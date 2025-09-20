<?php

use App\Models\User;
use Livewire\Volt\Volt as LivewireVolt;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

test('login screen can be rendered', function () {
    $response = $this->get(route('login'));

    $response->assertStatus(200);
});

test('users can authenticate using the login screen', function () {
    $user = User::factory()->create(['email' => 'user@must.ac.mw']);

    $response = LivewireVolt::test('auth.login')
        ->set('email', $user->email)
        ->set('password', 'password')
        ->call('login');

    $response
        ->assertHasNoErrors()
        ->assertRedirect(route('dashboard', absolute: false));

    $this->assertAuthenticated();
});

test('users can not authenticate with invalid password', function () {
    $user = User::factory()->create(['email' => 'user@must.ac.mw']);

    $response = LivewireVolt::test('auth.login')
        ->set('email', $user->email)
        ->set('password', 'wrong-password')
        ->call('login');

    $response->assertHasErrors('email');

    $this->assertGuest();
});

test('users can not authenticate with email from non-allowed domain', function () {
    $response = LivewireVolt::test('auth.login')
        ->set('email', 'user@gmail.com')
        ->set('password', 'password')
        ->call('login');

    $response->assertHasErrors('email');
    $response->assertSee('Only emails from must.ac.mw domain are allowed.');

    $this->assertGuest();
});

test('users can authenticate with email from allowed domain', function () {
    $user = User::factory()->create(['email' => 'user@must.ac.mw']);

    $response = LivewireVolt::test('auth.login')
        ->set('email', $user->email)
        ->set('password', 'password')
        ->call('login');

    $response
        ->assertHasNoErrors()
        ->assertRedirect(route('dashboard', absolute: false));

    $this->assertAuthenticated();
});

test('users can logout', function () {
    $user = User::factory()->create(['email' => 'user@must.ac.mw']);

    $response = $this->withoutMiddleware()
        ->actingAs($user)
        ->post(route('logout'));

    $response->assertRedirect(route('home'));

    $this->assertGuest();
});