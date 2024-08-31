<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_course',
        'discription_course',
        'img_course',
        'price_course',
        'status_course',
        'certify_course',
        'user_id',
    ];

    //COURSE
    public function modules()
    {
    return $this->hasMany(Module::class);
    }

    //CHAPTER
    public function chapters()
    {
    return $this->hasMany(Chapter::class);
    }

    //TIMELINE
    public function timelines()
    {
    return $this->hasMany(Timeline::class);
    }

    //ENROLLMENT
    public function enrollments()
    {
    return $this->hasMany(Enrollment::class);
    }

    //FEEDBACK_COURSE
    public function feedback_course()
    {
    return $this->hasMany(Feedback_course::class);
    }
    
    //COMMENT
    public function comments()
    {
    return $this->hasMany(Comment::class);
    }

    //USER
    public function users()
    {
    return $this->belongsTo(User::class);
    }
}
