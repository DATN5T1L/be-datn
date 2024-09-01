<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback_course>
 */
class Feedback_courseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rating_course' => fake()->numberBetween(1, 5),
            'feedback_text_course' => fake()->paragraph(),
            'course_id' => Course::factory(),
            'user_id' => User::factory(),
        ];
    }
}
