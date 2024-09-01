<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback_course extends Model
{
    protected $table = 'feedback_course';
    use HasFactory;
    protected $fillable = [
        'rating_course',
        'feedback_test_course',
        'course_id',
        'user_id',
    ];

    //COURSE
    public function courses()
    {
    return $this->belongsTo(Course::class);
    }

    //USER
    public function users()
    {
    return $this->belongsTo(User::class);
    }
}
