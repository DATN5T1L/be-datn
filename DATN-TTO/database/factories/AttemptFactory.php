<?php

namespace Database\Factories;
use App\Models\Assignment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attempt>
 */
class AttemptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'answer' => rand(0, 1) 
                ?  fake()->paragraph()
                :  fake()->randomElement(['A', 'B', 'C', 'D']),
            'assignment_id' => Assignment::factory(),
        ];
    }
}
