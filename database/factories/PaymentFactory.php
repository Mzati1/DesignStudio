<?php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'tx_ref' => $this->faker->unique()->uuid,
            'reference' => $this->faker->optional()->uuid,
            'event_type' => $this->faker->randomElement(['checkout.payment', 'api.payment']),
            'mode' => $this->faker->randomElement(['sandbox', 'live']),
            'type' => $this->faker->optional()->randomElement(['API Payment', 'Checkout']),
            'status' => $this->faker->randomElement(['pending', 'success', 'failed', 'cancelled', 'completed', 'verification_failed']),
            'number_of_attempts' => $this->faker->numberBetween(0, 3),
            'amount' => $this->faker->randomFloat(2, 100, 10000),
            'charges' => $this->faker->randomFloat(2, 0, 100),
            'currency' => $this->faker->randomElement(['MWK', 'USD']),
            'agenda' => $this->faker->optional()->sentence,
            'method' => $this->faker->optional()->randomElement(['Card', 'MobileMoney']),
            'card_brand' => $this->faker->optional()->randomElement(['Visa', 'Mastercard']),
            'card_last4' => $this->faker->optional()->numerify('####'),
            'customization' => [
                'title' => $this->faker->sentence,
                'description' => $this->faker->sentence,
                'logo' => $this->faker->imageUrl(),
            ],
            'logs' => [
                'provider' => $this->faker->company,
                'message' => $this->faker->sentence,
            ],
            'completed_at' => $this->faker->optional()->dateTimeThisYear,
        ];
    }
}
