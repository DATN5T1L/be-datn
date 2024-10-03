<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'title_post',
        'content_post',
        'img_post',
        'views_post',
        'user_id',
        'category_id',
    ];

    //COMMETN_POST
    public function comments_post()
    {
        return $this->hasMany(Comment_Post::class);
    }

    //USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //CATEGORY
    public function category()
    {
        return $this->belongsTo(Post_Category::class);
    }
}
