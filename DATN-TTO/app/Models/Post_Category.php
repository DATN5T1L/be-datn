<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_category'
    ];

    //POST
    public function posts()
    {
    return $this->hasMany(Post::class);
    }
}
