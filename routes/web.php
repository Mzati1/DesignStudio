<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\OAuth\SocialController;
use App\Http\Controllers\Members\MemberController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'admin.dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');

    // Simple membership subscription test page and handler ( for testing )
    Route::get('membership/subscribe', function () {
        return view('membership.subscribe');
    })->name('membership.subscribe');

    Route::post('membership/subscribe', [MemberController::class, 'subscribeMembership'])
        ->name('membership.subscribe.post');
});


// Payment Endpoints


// Social auth routes
Route::prefix('auth')->name('social.')->controller(SocialController::class)->group(function () {
    Route::get('{provider}/redirect', 'redirectToProvider')->name('redirect');
    Route::get('{provider}/callback', 'handleProviderCallback')->name('callback');
});

require __DIR__ . '/auth.php';
