<?php

namespace Database\Factories;
use App\Models\Video_lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\URL_sub_title>
 */
class URL_sub_titleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sub_title_video' => fake()->randomElement(['Tiếng Việt', 'Tiếng Anh', 'Tiếng Nhật Bản', 'Tiếng Hàn Quốc']),
            'sub_title_url' => fake()->url(),
            'video_lesson_id' => Video_lesson::factory(),
        ];
    }
}
