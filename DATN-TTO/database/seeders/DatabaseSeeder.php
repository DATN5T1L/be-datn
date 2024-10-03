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
        \App\Models\Route::factory(5)->create();
        \App\Models\Course::factory(5)->create();
        \App\Models\FAQ_Course::factory(5)->create();
        \App\Models\Favorite_Course::factory(5)->create();
        \App\Models\Module::factory(5)->create();
        \App\Models\Enrollment::factory(5)->create();
        \App\Models\Reminder::factory(5)->create();
        \App\Models\Chapter::factory(5)->create();
        \App\Models\Lesson::factory(5)->create();
        \App\Models\FAQ_Lesson::factory(5)->create();
        \App\Models\Url_Quality::factory(5)->create();
        \App\Models\Url_Sub_Title::factory(5)->create();
        \App\Models\Status_Video::factory(5)->create();
        \App\Models\Comment_Lesson::factory(5)->create();
        \App\Models\Exercise::factory(5)->create();
        \App\Models\Question::factory(5)->create();
        \App\Models\Answer_Question::factory(5)->create();
        \App\Models\Code::factory(5)->create();
        \App\Models\Answer_Code::factory(5)->create();
        \App\Models\Payment_Link::factory(5)->create();
        \App\Models\Transaction::factory(5)->create();
        \App\Models\Post_Category::factory(5)->create();
        \App\Models\Post::factory(5)->create();
        \App\Models\Comment_Post::factory(5)->create();
    }
}
