<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all users and create memberships for each
        $users = User::all();
        
        foreach ($users as $user) {
            Member::factory()->create(['user_id' => $user->id]);
        }
    }
}
