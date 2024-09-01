<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assignment>
 */
class AssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'discription_assignment' => fake()->paragraph(),
            'name_assignment' => fake()->sentence(3),
            'content_assignment' => fake()->paragraph(),
            'A, 150' => fake()->sentence(),
            'B, 150' => fake()->sentence(),
            'C, 150' => fake()->sentence(),
            'D, 150' => fake()->sentence(),
            'type_assignment' => collect(['Quiz', 'Coding', 'Resource'])->random(),
        ];
    }
}
