<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer_Code extends Model
{
    use HasFactory;
    protected $table = 'answers_code';
    protected $fillable = [
        'correct_answer',
        'code_id',
    ];

    //CODE
    public function code()
    {
        return $this->belongsTo(Code::class);
    }
}
