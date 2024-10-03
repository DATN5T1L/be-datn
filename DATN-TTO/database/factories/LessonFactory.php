<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Chapter;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_lesson' => fake()->sentence(5),
            'discription_lesson' => fake()->paragraph,
            'poster_lesson' => fake()->imageUrl(640, 480, 'education'),
            'type_lesson' => fake()->randomElement(['video', 'document']),
            'chapter_id' => Chapter::factory(),
        ];
    }
}
