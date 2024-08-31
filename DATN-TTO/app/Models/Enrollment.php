<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    protected $fillable = [
        'enroll',
        'course_id',
    ];

    //TIMELINE
    public function timelines()
    {
    return $this->hasMany(Timeline::class);
    }

    //TRANSACTION
    public function transactions()
    {
    return $this->hasMany(Transaction::class);
    }
    
    //COURSE
    public function courses()
    {
    return $this->belongsTo(Course::class);
    }

}
