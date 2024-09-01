<?php

namespace Database\Factories;
use App\Models\Post_Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title_post' => fake()->sentence(),
            'content_post' => fake()->paragraph(),
            'img_post' => fake()->imageUrl(200, 200),
            'views_post' => fake()->numberBetween(0, 100),
            'user_id' => User::factory(),
            'category_id' => Post_Category::factory(),
        ];
    }
}
