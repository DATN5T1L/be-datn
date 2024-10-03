<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lesson;
use App\Models\Enrollment;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Status_Video>
 */
class Status_VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status_video' => fake()->boolean(0),
            'cache_time_video' => fake()->numberBetween(1, 3600),
            'lesson_id' => Lesson::factory(),
            'enrollment_id' => Enrollment::factory(),
        ];
    }
}
