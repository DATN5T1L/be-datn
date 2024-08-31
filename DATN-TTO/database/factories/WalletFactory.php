<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wallet>
 */
class WalletFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'balance' => fake()->numberBetween(0, 3000000),
            'bank_name' => fake()->randomElement(['MB Bank', 'Agribank', 'Techcombank']),
            'bank_account_number' => fake()->bankAccountNumber(),
            'bank_account_holder_name' => fake()->name(),
            'PIN' => Hash::make(str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT)),
            'user_id' => User::factory(),
        ];
    }
}
