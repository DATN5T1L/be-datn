<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_course' => fake()->sentence(3),
            'description_course' => fake()->paragraph(),
            'img_course' => fake()->imageUrl(640, 480),
            'price_course' => fake()->numberBetween(600000, 2200000),
            'status_course' => fake()->randomElement(['Not registerd', 'In progress', 'Completed']),
            'certify_course' => fake()->boolean(),
            'user_id' => User::factory(),
        ];
    }
}
