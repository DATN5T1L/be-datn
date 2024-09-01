<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Messenger_status>
 */
class Messenger_statusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => 'readed',
            'message_id' => Message::factory(),
            'user_id' => User::factory()
        ];
    }
}
