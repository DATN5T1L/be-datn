<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_Lesson extends Model
{
    use HasFactory;
    protected $table = 'comments_lesson';
    protected $fillable = [
        'question_text',
        'status',
        'lesson_id',
        'user_id',
        'comment_to'
    ];
    protected $attributes = [
        'status' => 'active',
    ];
    //COMMENT - BÌNH LUẬN
    public function comments()
    {
        return $this->hasMany(Comment_Lesson::class);
    }

    //LESSON
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    //USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //COMMENT_TO - BÌNH LUẬN TRẢ LỜI
    public function comment()
    {
        return $this->belongsTo(Comment_Lesson::class);
    }
}
