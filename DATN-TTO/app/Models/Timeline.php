<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;
    protected $fillable = [
        'day_of_week',
        'time',
        'notes',
        'course_id',
        'enrollment_id'
    ];

    //COURSE
    public function courses()
    {
    return $this->belongsTo(Course::class);
    }

    //ENROLLMENT
    public function enrollments()
    {
    return $this->belongsTo(Enrollment::class);
    }
}
