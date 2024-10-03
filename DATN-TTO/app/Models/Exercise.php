<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;
    protected $table = 'exercises';
    protected $fillable = [
        'name_exercise',
        'discription_exercise',
        'type_exercise',
        'status_exercise',
        'lesson_id',
        'enrollment_id'
    ];

    //LESSON
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    //LESSON
    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
