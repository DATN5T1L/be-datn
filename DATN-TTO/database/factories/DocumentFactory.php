<?php

namespace Database\Factories;

use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Document>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_document' => fake()->sentence(5),
            'discription_document' => fake()->paragraph,
            'poster_document' => fake()->imageUrl(640, 480, 'education'),
            'url_video' => fake()->url(),
            'type_document' => fake()->randomElement(['video', 'code', 'quiz']),
            'chapter_id' => Chapter::factory(),
        ];
    }
}
