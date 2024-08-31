<?php

namespace Database\Factories;
use App\Models\Video_lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\URL_quality>
 */
class URL_qualityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quality_video' => fake()->randomElement(['144', '240', '360', '480', '720', '1080']),
            'quality_url' => fake()->url(),
            'video_lesson_id' => Video_lesson::factory(),
        ];
    }
}
