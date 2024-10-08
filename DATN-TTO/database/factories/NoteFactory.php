<?php

namespace Database\Factories;

use App\Models\Lesson;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_note' => fake()->sentence(5),
            'content_note' => fake()->paragraph(),
            'cache_time_note' => fake()->numberBetween(1, 3600),
            'lesson_id' => Lesson::factory(),
            'user_id' => User::factory(),
        ];
    }
}
