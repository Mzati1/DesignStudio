<?php

namespace Database\Seeders;

use App\Models\Fee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // First, create the static membership fee
        Fee::firstOrCreate(
            ['slug' => 'membership-fee'],
            [
                'name' => 'Membership Fee',
                'slug' => 'membership-fee',
                'amount' => 5000.00, // Static amount in MWK
                'currency' => 'MWK',
                'description' => 'Annual membership fee for Design Studio membership',
                'created_by' => null, // System created
                'updated_by' => null,
            ]
        );

        // Then create other random fees
        Fee::factory(9)->create();
    }
}
