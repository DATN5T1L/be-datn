<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $fillable = [
        'content_question',
        'type_question',
        'document_id',
    ];

    //ANSWER_QUESTION
    public function answers_question()
    {
        return $this->hasMany(Answer_Question::class);
    }

    //DOCUMENT
    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
