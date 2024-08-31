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
    use HasFactory;
    protected $fillable = [
    'username',
    'password',
    'fullname',
    'age',
    'email',
    'phonenumber',
    'avatar',
    'role',
    'status',
    ];

    //COURSE
    public function courses()
    {
    return $this->hasMany(Course::class);
    }

    //COMMENT
    public function comments()
    {
    return $this->hasMany(Comment::class);
    }

    //WALLET
    public function wallets()
    {
    return $this->hasOne(Wallet::class);
    }

    //TRANSACTION
    public function transactions()
    {
    return $this->hasMany(Transaction::class);
    }

    //STUDENT_ANSWER
    public function student_answer()
    {
    return $this->hasMany(Student_answer::class);
    }

    //POST
    public function posts()
    {
    return $this->hasMany(Post::class);
    }

    //MESSAGE
    public function messages()
    {
    return $this->hasMany(Message::class);
    }

    //MESSENGER_STATUS
    public function messenger_status()
    {
    return $this->hasMany(Messenger_status::class);
    }

    //GROUP_MEMBER
    public function group_member()
    {
    return $this->hasMany(Group_member::class);
    }

    //FEEDBACK_COURSE
    public function feedback_course()
    {
    return $this->hasMany(Feedback_course::class);
    }

    //FEEDBACK_SUPPORT
    public function feedback_support()
    {
    return $this->hasMany(Feedback_support::class);
    }
}
