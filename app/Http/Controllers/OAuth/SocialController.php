<?php

namespace App\Http\Controllers\OAuth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\SocialAccount;

class SocialController extends Controller
{
    public function redirectToProvider($provider)
    {
        $provider = strtolower($provider);

        if (!$this->isProviderConfigured($provider)) {
            return redirect()->route('home')->with('error', 'Unsupported or misconfigured provider.');
        }

        try {
            return Socialite::driver($provider)->redirect();
        } catch (\Throwable $exception) {
            Log::error('Social redirect failed', [
                'provider' => $provider,
                'message' => $exception->getMessage(),
            ]);
            return redirect()->route('home')->with('error', 'Could not initiate social login.');
        }
    }
    public function handleProviderCallback($provider)
    {
        $provider = strtolower($provider);

        if (!$this->isProviderConfigured($provider)) {
            return redirect()->route('home')->with('error', 'Unsupported or misconfigured provider.');
        }

        try {
            $socialUser = Socialite::driver($provider)->user();
        } catch (\Throwable $exception) {
            Log::warning('Social callback error', [
                'provider' => $provider,
                'message' => $exception->getMessage(),
            ]);
            return redirect()->route('home')->with('error', 'Social login failed or was cancelled.');
        }

        // Try to find social account first
        $account = SocialAccount::where('social_name', $provider)
            ->where('social_id', $socialUser->getId())
            ->first();

        if ($account) {
            // Account exists → log in the linked user
            $user = $account->user;
        } else {
            // No social account yet → check if a user with this email exists
            $email = $socialUser->getEmail();
            if (empty($email)) {
                $email = $this->buildFallbackEmail($provider, (string) $socialUser->getId());
            }

            $name = $socialUser->getName() ?: $socialUser->getNickname() ?: ucfirst($provider) . ' User';

            $user = User::firstOrCreate(
                ['email' => $email],
                [
                    'name' => $name,
                    'password' => $this->generateStrongPassword(),
                ]
            );

            // Create the new social account link
            $user->socialAccounts()->create([
                'social_name' => $provider,
                'social_id'   => $socialUser->getId(),
            ]);
        }

        // Log the user in via session
        Auth::login($user, remember: true);

        return redirect()->route('home');

    }

    /**
     * Ensure the provider exists and is configured in services config.
     */
    protected function isProviderConfigured(string $provider): bool
    {
        // Basic check: provider section exists and has a client_id/secret
        $config = config('services.' . $provider);
        return is_array($config)
            && !empty($config['client_id'] ?? null)
            && !empty($config['client_secret'] ?? null);
    }

    /**
     * Build a fallback email when provider does not return one.
     */
    protected function buildFallbackEmail(string $provider, string $providerId): string
    {
        return $provider . '_' . $providerId . '@example.local';
    }

    /**
     * Generate a strong random password with mixed character sets.
     */
    protected function generateStrongPassword(int $length = 32): string
    {
        $length = max(16, $length);

        $sets = [
            'upper' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            'lower' => 'abcdefghijklmnopqrstuvwxyz',
            'digits' => '0123456789',
            'symbols' => '!@#$%^&*()-_=+[]{}<>?/|',
        ];

        $password = '';
        // Ensure at least one from each required set
        $password .= $sets['upper'][random_int(0, strlen($sets['upper']) - 1)];
        $password .= $sets['lower'][random_int(0, strlen($sets['lower']) - 1)];
        $password .= $sets['digits'][random_int(0, strlen($sets['digits']) - 1)];
        $password .= $sets['symbols'][random_int(0, strlen($sets['symbols']) - 1)];

        $all = implode('', $sets);
        for ($i = strlen($password); $i < $length; $i++) {
            $password .= $all[random_int(0, strlen($all) - 1)];
        }

        // Shuffle to avoid predictable positions
        return str_shuffle($password);
    }
}
