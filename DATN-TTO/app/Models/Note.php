<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $table = 'notes';
    protected $fillable = [
        'title_note',
        'content_note',
        'cache_time_note',
        'lesson_id',
        'user_id',

    ];

    //LESSON
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    //USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
