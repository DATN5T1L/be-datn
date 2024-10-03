<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Enrollment;
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
            'transaction_type' => fake()->randomElement(['purchase', 'refund', 'deposit']),
            'amount' => fake()->numberBetween(1000, 1000000),
            'payment_method' => fake()->randomElement(['Card', 'Momo', 'VnPay']),
            'status' => fake()->randomElement(['pending', 'completed', 'failed', 'canceled']),
            'payment_discription' => fake()->text(200),
            'enrollment_id' => Enrollment::factory(),
            'user_id' => User::factory(),
        ];
    }
}
