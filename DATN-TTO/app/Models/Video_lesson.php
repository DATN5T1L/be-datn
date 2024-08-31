<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video_lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'poster_video',
        'name_video',
        'cache_time_video',
    ];

    //LESSON
    public function lessons()
    {
    return $this->belongsTo(Lesson::class);
    }

    //URL_QUALITY
    public function url_quality()
    {
    return $this->hasMany(URL_quality::class);
    }

    //URL_SUB_TITLE
    public function url_sub_title()
    {
    return $this->hasMany(URL_sub_title::class);
    }
}
