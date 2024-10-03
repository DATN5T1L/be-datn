<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Code;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer_Code>
 */
class Answer_CodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'correct_answer' => fake()->text(100),
            'code_id' => Code::factory(),
        ];
    }
}
