<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lesson;
use App\Models\Enrollment;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercise>
 */
class ExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_exercise' => fake()->sentence(5),
            'discription_exercise' => fake()->paragraph,
            'type_exercise' => fake()->randomElement(['quiz', 'code']),
            'status_exercise' => fake()->boolean(false),
            'lesson_id' => Lesson::factory(),
            'enrollment_id' => Enrollment::factory(),
        ];
    }
}
