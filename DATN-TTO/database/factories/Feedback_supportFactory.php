<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback_support>
 */
class Feedback_supportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rating_support' => fake()->numberBetween(1, 5),
            'feedback_text_support' => fake()->paragraph(),
            'user_id' => User::factory(),
        ];
    }
}
