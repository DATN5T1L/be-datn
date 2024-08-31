<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video_lesson>
 */
class Video_lessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'poster_video' => fake()->imageUrl(),
            'name_video' => fake()->sentence(3),
            'cache_time_video' => fake()->randomNumber(5),
        ];
    }
}
