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
            'name_route' => fake()->randomElement(['Lộ trình học Front-end', 'Lộ trình học Back-end']),
            'img_route' => fake()->imageUrl(640, 480),
            'description_route' => fake()->paragraph(),
        ];
    }
}
