<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Route::factory(3)->create();
        \App\Models\Course::factory(4)->create();
        \App\Models\Module::factory(3)->create();
        \App\Models\Chapter::factory(5)->create();
        \App\Models\Video_lesson::factory(6)->create();
        \App\Models\Lesson::factory(3)->create();
        \App\Models\URL_quality::factory(5)->create();
        \App\Models\URL_sub_title::factory(5)->create();
        \App\Models\Enrollment::factory(5)->create();
        \App\Models\Timeline::factory(3)->create();
        \App\Models\Assignment::factory(5)->create();
        \App\Models\Attempt::factory(5)->create();
        \App\Models\Student_answer::factory(7)->create();
        \App\Models\Wallet::factory(5)->create();
        \App\Models\Transaction::factory(5)->create();
        \App\Models\Post_Category::factory(5)->create();
        \App\Models\Post::factory(5)->create();
        \App\Models\Comment::factory(5)->create();
        \App\Models\Conversation::factory(5)->create();
        \App\Models\Message::factory(10)->create();
        \App\Models\Messenger_status::factory(5)->create();
        \App\Models\Group_member::factory(6)->create();
        \App\Models\Feedback_course::factory(3)->create();
        \App\Models\Feedback_support::factory(3)->create();

    }
}
