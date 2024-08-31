<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Attempt;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student_answer>
 */
class Student_answerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_answer' => rand(0, 1) 
                ?  fake()->paragraph()
                :  fake()->randomElement(['A', 'B', 'C', 'D']),
            'user_id' => User::factory(),
            'attempt' => Attempt::factory(),
        ];
    }
}
