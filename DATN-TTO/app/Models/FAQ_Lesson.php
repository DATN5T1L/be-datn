<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ_Lesson extends Model
{
    use HasFactory;
    protected $table = 'faqs_lesson';
    protected $fillable = [
        'question_faq',
        'answer_faq',
        'lesson_id',
    ];

    //LESSON
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
