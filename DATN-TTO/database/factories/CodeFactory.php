<?php

namespace Database\Factories;

use App\Models\Document;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Exercise;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Code>
 */
class CodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question_code' => fake()->text(100),
            'answer_code' => fake()->text(100),
            'tutorial_code' => fake()->text(200),
            'document_id' => Document::factory(),
        ];
    }
}
