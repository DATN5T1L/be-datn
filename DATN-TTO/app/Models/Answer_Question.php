<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer_Question extends Model
{
    use HasFactory;
    protected $table = 'answers_question';
    protected $fillable = [
        'correct_answer',
        'question_id'
    ];

    //QUESTION
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
