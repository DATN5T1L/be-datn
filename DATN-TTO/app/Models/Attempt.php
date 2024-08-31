<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attempt extends Model
{
    use HasFactory;
    protected $fillable = [
        'answer',
        'assignment_id',
    ];

    //STUDENT_ANSWER
    public function student_answer()
    {
    return $this->hasOne(Student_answer::class);
    }

    //ASSIGNMENT
    public function assignments()
    {
    return $this->belongsTo(Assignment::class);
    }
}
