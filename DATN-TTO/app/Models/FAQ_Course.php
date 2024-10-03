<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ_Course extends Model
{
    use HasFactory;
    protected $table = 'faqs_course';
    protected $fillable = [
        'question_faq',
        'answer_faq',
        'course_id',
    ];

    //COURSE
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
