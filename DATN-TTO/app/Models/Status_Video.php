<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_Video extends Model
{
    use HasFactory;
    protected $table = 'status_videos';
    protected $fillable = [
        'status_video',
        'cache_time_video',
        'description_route',
        'lesson_id',
        'enrollment_id',
    ];

    //LESSON
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    //ENROLLMENT
    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
