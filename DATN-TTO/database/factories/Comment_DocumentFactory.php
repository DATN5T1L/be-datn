<?php

namespace Database\Factories;

use App\Models\Comment_Document;
use App\Models\Document;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment_Document>
 */
class Comment_DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment_title' => fake() -> sentence(),
            'comment_text' => fake() ->paragraph(),
            'status' => fake()->randomElement(['active', 'inactive']),
            'document_id' => Document::factory(),
            'user_id' => User::factory(),
            'comment_to' => fake()->randomElement([null, Comment_Document::factory()]),
        ];
    }
}
