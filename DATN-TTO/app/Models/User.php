<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Migrations\Comments;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    //COURSE
    public function courses()
    {
    return $this->hasMany(Course::class);
    }


    public function comments()
    {
    return $this->hasMany(Comment::class);
    }
}
