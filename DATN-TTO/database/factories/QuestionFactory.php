<?php

namespace Database\Factories;

use App\Models\Document;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Exercise;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return[
        'content_question' => fake()->sentence(10),
            'type_question' => fake()->randomElement(['multiple_choice', 'fill', 'true_false']), // Loại câu hỏi
            'document_id' => Document::factory(),
        ];
    }
}
