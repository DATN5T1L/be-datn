<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lesson;
use App\Models\Comment_Lesson;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment_Lesson>
 */
class Comment_LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question_text' => fake()->paragraph,
            'status' => fake()->randomElement(['active', 'inactive']),
            'lesson_id' => Lesson::factory(),
            'user_id' => User::factory(),
            'comment_to' => fake()->randomElement([null, Comment_Lesson::factory()]),  
        ];
    }
}
