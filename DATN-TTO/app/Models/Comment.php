<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment_text',
        'user_id',
        'course_id',
        'post_id',
    ];

    //USER
    public function users()
    {
    return $this->belongsTo(User::class);
    }

    //COURSE
    public function courses()
    {
    return $this->belongsTo(Course::class);
    }

    //POST
    public function posts()
    {
    return $this->belongsTo(Post::class);
    }
}
