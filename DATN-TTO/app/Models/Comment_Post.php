<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_Post extends Model
{
    use HasFactory;
    protected $table = 'comments_post';
    protected $fillable = [
        'comment_text',
        'status',
        'user_id',
        'post_id',
        'comment_to'
    ];
    protected $attributes = [
        'status' => 'active',
    ];
    //COMMENT - BÌNH LUẬN
    public function comments()
    {
        return $this->hasMany(Comment_Post::class);
    }

    //USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //POST
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    //COMMENT_TO - BÌNH LUẬN TRẢ LỜI
    public function comment()
    {
        return $this->belongsTo(Comment_Post::class);
    }
}
