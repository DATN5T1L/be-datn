<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transaction_type' => fake()
                ->randomElement(['payment', 'refund', 'deposit', 'withdrawal']),
            'amount' => fake()->numberBetween(10000, 3000000),
            'payment_method' => fake()->randomElement(['Bank Transfer', 'Credit Card']),
            'status' => fake()->randomElement(['pending', 'completed', 'failed']),
            'payment_description' => fake()->text(200),
            'user_id' => User::factory(),
            'wallet_id' => Wallet::factory(),
            'enrollment_id' => Enrollment::factory(),
        ];
    }
}
