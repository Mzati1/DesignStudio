<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\OAuth\SocialController;
use App\Http\Controllers\Members\MemberController;
use App\Http\Controllers\Payments\PaymentController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
| These routes are accessible to all users, including guests.
*/

// Home page
Route::get('/', function () {
    return view('welcome');
})->name('home');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
| Routes for user authentication (login, register, password reset, etc.)
*/

require __DIR__ . '/auth.php';

/*
|--------------------------------------------------------------------------
| Social Authentication Routes
|--------------------------------------------------------------------------
| OAuth routes for social login providers (Google, Facebook, etc.)
*/

Route::prefix('auth')
    ->name('social.')
    ->controller(SocialController::class)
    ->group(function () {
        Route::get('{provider}/redirect', 'redirectToProvider')->name('redirect');
        Route::get('{provider}/callback', 'handleProviderCallback')->name('callback');
    });

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
| These routes require user authentication to access.
*/

Route::middleware(['auth'])->group(function () {
    
    /*
    |----------------------------------------------------------------------
    | Dashboard Routes
    |----------------------------------------------------------------------
    */
    
    Route::view('dashboard', 'admin.dashboard')
        ->middleware(['verified'])
        ->name('dashboard');
    
    /*
    |----------------------------------------------------------------------
    | Settings Routes
    |----------------------------------------------------------------------
    */
    
    // Redirect /settings to /settings/profile
    Route::redirect('settings', 'settings/profile');
    
    // Settings pages using Livewire Volt
    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
    
    /*
    |----------------------------------------------------------------------
    | Membership Routes
    |----------------------------------------------------------------------
    */
    
    // Membership registration page
    Route::get('/members/register', function () {
        return view('members.register');
    })->name('members.register');
    
    // Membership subscription (testing purposes)
    Route::get('membership/subscribe', function () {
        return view('membership.subscribe');
    })->name('membership.subscribe');
    
    Route::post('membership/subscribe', [MemberController::class, 'subscribeMembership'])
        ->name('membership.subscribe.post');
    
    /*
    |----------------------------------------------------------------------
    | Payment Routes
    |----------------------------------------------------------------------
    | Routes for handling payment processing with PayChangu
    */
    
    Route::prefix('payment')
        ->name('payment.')
        ->group(function () {
            // Initialize payment with PayChangu
            Route::post('/initialize', [PaymentController::class, 'initialize'])
                ->name('initialize');
            
            // Store payment after verification
            Route::post('/store', [PaymentController::class, 'store'])
                ->name('store');
            
            // Get payment status
            Route::get('/status', [PaymentController::class, 'status'])
                ->name('status');
        });
});

/*
|--------------------------------------------------------------------------
| Payment Webhook Routes
|--------------------------------------------------------------------------
| These routes handle callbacks from payment providers (no auth required)
*/

Route::prefix('payment')
    ->name('payment.')
    ->group(function () {
        // Payment return (redirect after payment completion)
        Route::get('/return', [PaymentController::class, 'return'])
            ->name('return');
        
        // Payment callback (webhook from PayChangu)
        Route::post('/callback', [PaymentController::class, 'callback'])
            ->name('callback');
    });
