<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $table = 'lessons';
    protected $fillable = [
        'name_lesson',
        'discription_lesson',
        'poster_lesson',
        'type_lesson',
        'chapter_id',

    ];

    //FAQ
    public function faqs()
    {
        return $this->hasMany(FAQ::class);
    }

    //COMMENT_LESSON
    public function comments_lesson()
    {
        return $this->hasMany(Comment_Lesson::class);
    }

    //URL_QUALITY
    public function url_qualities()
    {
        return $this->hasMany(Url_Quality::class);
    }

    //URL_SUB_TITLE
    public function url_sub_titles()
    {
        return $this->hasMany(Url_Sub_Title::class);
    }

    //STATUS_VIDEO
    public function status_videos()
    {
        return $this->hasMany(Status_Video::class);
    }

    //EXERCISE
    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }

    //NOTE
    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    //CHAPTER
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}
