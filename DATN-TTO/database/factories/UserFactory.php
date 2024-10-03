<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => fake()->userName,
        'password' => Hash::make('password'),
        'fullname' => fake()->name,
        'age' => fake()->numberBetween(18, 60),
        'email' => fake()->unique()->safeEmail,
        'avatar' => fake()->imageUrl(200, 200, 'people'),
        'phonenumber' => fake()->numerify('##########'),
        'balance' => fake()->numberBetween(100000, 10000000),
        'PIN' => Hash::make(fake()->randomNumber(4, true)),
        'status_provider' => fake()->randomElement(['Google', 'Facebook']),
        'provider_id' => fake()->uuid,
        ];
    }
}
