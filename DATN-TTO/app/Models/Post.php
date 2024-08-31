<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_post',
        'content_post',
        'img_post',
        'views_post',
        'user_id',
        'category_id',
    ];

    //COMMENT
    public function comments()
    {
    return $this->hasMany(Comment::class);
    }

    //USER
    public function users()
    {
    return $this->belongsTo(User::class);
    }

    //POST_CATEGORY
    public function Post_categories()
    {
    return $this->belongsTo(Post_Category::class);
    }
}
