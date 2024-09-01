<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Conversation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group_member>
 */
class Group_memberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'left_datetime' => fake()->dateTime(),
            'conversation_id' => Conversation::factory(),
            'user_id' => User::factory()
        ];
    }
}
