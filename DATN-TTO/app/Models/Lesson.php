<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_lesson',
        'discription_lesson',
        'chapter_id',
        'video_lesson_id',
    ];

    //ASSIGNMENT
    public function assignments()
    {
    return $this->hasMany(Assignment::class);
    }

    //CHAPTER
    public function chapters()
    {
    return $this->belongsTo(Chapter::class);
    }

    //VIDEO_LESSON
    public function video_lessons()
    {
    return $this->hasOne(Video_lesson::class);
    }
}
