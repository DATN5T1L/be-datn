<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Module;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enrollment>
 */
class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rating_course' => fake()->optional()->numberBetween(1, 5),
            'feedback_text' => fake()->optional()->paragraph,
            'status_course' => fake()->randomElement(['completed', 'in_progress', 'failed']),
            'certificate_course' => fake()->optional()->imageUrl(640, 480, 'certificate'),
            'enroll' => fake()->boolean(0),
            'module_id' => Module::factory(),
            'user_id' => User::factory(),
        ];
    }
}
