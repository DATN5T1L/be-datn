<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lesson;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Url_Quality>
 */
class Url_QualityFactory extends Factory
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
            'quality_url' => fake()->url,
            'lesson_id' => Lesson::factory(),
        ];
    }
}
