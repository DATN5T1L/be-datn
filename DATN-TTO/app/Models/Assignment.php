<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    protected $fillable = [
        'discription_assignment',
        'name_assignment',
        'content_assignment',
        'A',
        'B',
        'C',
        'D',
        'type_assignment',
        'lesson_id'
    ];

    //ATTEMPT
    public function attempts()
    {
    return $this->hasMany(Attempt::class);
    }

    //LESSON
    public function lessons()
    {
    return $this->belongsTo(Lesson::class);
    }

    //COURSE
    public function courses()
    {
    return $this->belongsTo(Course::class);
    }
}
