<?php

namespace Database\Seeders;

use App\Models\Fee;
use App\Models\Member;
use App\Models\Payment;
use App\Models\SocialAccount;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed 300 users
        $users = User::factory(300)->create();

        // Seed memberships for each user
        foreach ($users as $user) {
            Member::factory()->create(['user_id' => $user->id]);
        }

        // Seed payments for each user
        foreach ($users as $user) {
            Payment::factory(rand(1, 3))->create(['user_id' => $user->id]);
        }

        // Seed social accounts for a few users
        $users->take(20)->each(function ($user) {
            SocialAccount::factory(rand(1, 2))->create(['user_id' => $user->id]);
        });

        // Seed some fees
        Fee::factory(10)->create();
    }
}
