<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lesson;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FAQ_Lesson>
 */
class FAQ_LessonFactory extends Factory
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
            'lesson_id' => Lesson::factory(),
        ];
    }
}
