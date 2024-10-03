<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment_Post;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment_Post>
 */
class Comment_PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment_text' => fake()->sentence(10, true),
            'status' => fake()->randomElement(['active', 'inactive']),
            'user_id' => User::factory(),
            'post_id' => Post::factory(),
            'comment_to' => fake()->randomElement([null, Comment_Post::factory()]),
        ];
    }
}
