<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class URL_quality extends Model
{
    protected $table = 'url_quality';
    use HasFactory;
    protected $fillable = [
        'quality_video',
        'quality_url',
        'video_lesson_id'
    ];

    //VIDEO_LESSON_ID
    public function video_lesson()
    {
    return $this->belongsTo(Video_lesson::class);
    }
}
