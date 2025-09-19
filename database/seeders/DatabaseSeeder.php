<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed users first (required for other relationships)
        $this->call(UserSeeder::class);

        // Seed fees (membership fee first, then others)
        $this->call(FeeSeeder::class);

        // Seed memberships for each user
        $this->call(MemberSeeder::class);

        // Seed payments for each user
        $this->call(PaymentSeeder::class);

        // Seed social accounts for a few users
        $this->call(SocialAccountSeeder::class);
    }
}
