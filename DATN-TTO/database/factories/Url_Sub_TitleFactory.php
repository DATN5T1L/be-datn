<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lesson;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Url_Sub_Title>
 */
class Url_Sub_TitleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sub_title_video' => fake()->randomElement(['Vietnamese', 'English', 'Chinese', 'Japanese', 'Russian']), // Ngôn ngữ phụ đề video
            'sub_title_url' => fake()->url,
            'lesson_id' => Lesson::factory(),
        ];
    }
}
