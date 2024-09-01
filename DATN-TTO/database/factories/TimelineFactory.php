<?php

namespace Database\Factories;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Timeline>
 */
class TimelineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'day_of_week' => fake()->date(),
            'time' => fake()->time(),
            'notes' => fake()->text(50),
            'course_id' => Course::factory(),
            'enrollment_id' => Enrollment::factory(),
        ];
    }
}
