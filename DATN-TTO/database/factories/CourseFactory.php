<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'name_course' => fake()->sentence(4),
        'img_course' => fake()->imageUrl(640, 480, 'education'),
        'price_course' => fake()->numberBetween(100000, 5000000),
        'discount_price_course' => fake()->optional()->numberBetween(50000, 4500000),
        'status_course' => fake()->randomElement(['active', 'inactive', 'archived']),
        'views_course' => fake()->numberBetween(0, 10000),
        'rating_course' => fake()->randomFloat(2, 1, 5),
        'num_lesson' => fake()->numberBetween(1, 100),
        'tax_rate' => fake()->randomFloat(2, 0, 1),
        'del_flag' => fake()->boolean(0),   
        'user_id' => User::factory()
        ];
    }
}
