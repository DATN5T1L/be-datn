<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;
    protected $table = 'codes';
    protected $fillable = [
        'question_code',
        'answer_code',
        'tutorial_code',
        'document_id',
    ];

    //ANSWER_CODE
    public function answers_code()
    {
        return $this->hasMany(Answer_Code::class);
    }

    //DOCUMENT
    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
