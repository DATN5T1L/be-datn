<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class URL_sub_title extends Model
{
    use HasFactory;
    protected $fillable = [
        'sub_title_video',
        'sub_title_url',
        'video_lesson_id'
    ];

    //VIDEO_LESSON_ID
    public function video_lesson()
    {
    return $this->belongsTo(Video_lesson::class);
    }
}
