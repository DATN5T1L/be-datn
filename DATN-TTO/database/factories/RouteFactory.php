<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Route>
 */
class RouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'name_route' => fake()->sentence(3), 
        'img_route' => fake()->imageUrl(640, 480, 'education'),
        'discription_route' => fake()->paragraph,
        'status' => fake()->randomElement(['default', 'customize']),
        ];
    }
}
