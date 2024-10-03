<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post_Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_post' => fake()->sentence(6, true),
            'content_post' => fake()->paragraphs(3, true),
            'img_post' => fake()->imageUrl(640, 480),
            'views_post' => 0,
            'user_id' => User::factory(),
            'category_id' => Post_Category::factory(),
        ];
    }
}
