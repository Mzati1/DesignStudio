<?php

namespace Database\Seeders;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all users and create payments for each
        $users = User::all();
        
        foreach ($users as $user) {
            Payment::factory(rand(1, 3))->create(['user_id' => $user->id]);
        }
    }
}
