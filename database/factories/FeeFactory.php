<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fee>
 */
class FeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),
            'slug' => $this->faker->unique()->slug,
            'amount' => $this->faker->randomFloat(2, 100, 10000),
            'currency' => 'MWK',
            'description' => $this->faker->optional()->sentence,
            'created_by' => null,
            'updated_by' => null,
        ];
    }
}
