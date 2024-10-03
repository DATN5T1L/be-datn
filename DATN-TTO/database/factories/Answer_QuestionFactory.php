<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Question;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer_Question>
 */
class Answer_QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'correct_answer' => fake()->sentence(8),
            'question_id' => Question::factory(),
        ];
    }
}
