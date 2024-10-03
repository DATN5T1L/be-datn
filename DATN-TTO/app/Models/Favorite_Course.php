<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite_Course extends Model
{
    use HasFactory;
    protected $table = 'favorite_courses';
    protected $fillable = [
        'user_id',
        'course_id',
    ];

    //USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //COURSE
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
