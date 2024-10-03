<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FAQ_Course>
 */
class FAQ_CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question_faq' => fake()->sentence(10),
            'answer_faq' => fake()->paragraph,
            'course_id' => Course::factory(),
        ];
    }
}
