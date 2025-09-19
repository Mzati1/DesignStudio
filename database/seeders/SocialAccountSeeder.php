<?php

namespace Database\Seeders;

use App\Models\SocialAccount;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get first 20 users and create social accounts for them
        $users = User::take(20)->get();
        
        foreach ($users as $user) {
            SocialAccount::factory(rand(1, 2))->create(['user_id' => $user->id]);
        }
    }
}
