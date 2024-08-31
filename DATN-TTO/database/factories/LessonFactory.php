<?php

namespace Database\Factories;
use App\Models\Chapter;
use App\Models\Video_lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name_lesson' => fake()->sentence(3),
            'discription_lesson' => fake()->paragraph(),
            'chapter_id' => Chapter::factory(),
            'video_lesson_id' => Video_lesson::factory(),
        ];
    }
}
