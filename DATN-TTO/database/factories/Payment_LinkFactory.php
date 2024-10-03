<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment_Link>
 */
class Payment_LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bank_name' => fake()->company,
            'bank_account_number' => fake()->numerify('####################'),
            'bank_account_holder_name' => fake()->name,
            'user_id' => User::factory(),
        ];
    }
}
