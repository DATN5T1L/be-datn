<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url_Quality extends Model
{
    use HasFactory;
    protected $table = 'url_qualities';
    protected $fillable = [
        'quality_video',
        'quality_url',
        'lesson_id',
    ];

    //LESSON
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
