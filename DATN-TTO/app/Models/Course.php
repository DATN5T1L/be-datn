<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = [
        'name_course',
        'img_course',
        'price_course',
        'discount_price_course',
        'status_course',
        'views_course',
        'rating_course',
        'num_lesson',
        'tax_rate',
        'del_fig',
        'user_id',
    ];

    protected $attributes = [
        'status_course' => 'inactive',
    ];

    //MODULE
    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    //FAVORITE_COURSE
    public function favorite_courses()
    {
        return $this->hasMany(Favorite_Course::class);
    }

    //CHAPTER
    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    //LESSON
    public function documents()
    {
        return $this->hasManyThrough(Document::class, Chapter::class);
    }

    //USER - INSTRUCTORS
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
