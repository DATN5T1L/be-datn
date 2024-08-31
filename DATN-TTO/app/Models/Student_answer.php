<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_answer extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_answer',
        'user_id',
        'attempt_id'
    ];

    //USER
    public function users()
    {
    return $this->belongto(User::class);
    }

    //ATTEMPT
    public function attempts()
    {
    return $this->belongto(Attempt::class);
    }
}
