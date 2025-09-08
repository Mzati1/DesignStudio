<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\OAuth\SocialController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});


// Social auth routes
Route::prefix('auth')->name('social.')->controller(SocialController::class)->group(function () {
	Route::get('{provider}/redirect', 'redirectToProvider')->name('redirect');
	Route::get('{provider}/callback', 'handleProviderCallback')->name('callback');
});

require __DIR__.'/auth.php';
