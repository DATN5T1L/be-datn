<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'username',
        'password',
        'fullname',
        'age',
        'email',
        'avatar',
        'phonenumber',
        'balance',
        'PIN',
        'status_provider',
        'provider_id',
    ];

    //POST - BỘ PHẬN MARKETING ĐĂNG POST
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //COMMENTS_POST
    public function comments_post()
    {
        return $this->hasMany(Comment_Post::class);
    }

    //COMMENTS_LESSON
    public function comments_lesson()
    {
        return $this->hasMany(Comment_Lesson::class);
    }

    //COURSE - KHÓA HỌC CỦA GIẢNG VIÊN 
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    //ENROLLMENT
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    //FAVORITE_COURSE
    public function favorite_courses()
    {
        return $this->hasMany(Favorite_Course::class);
    }

    //PAYMENT_LINK
    public function payment_links()
    {
        return $this->hasMany(Payment_Link::class);
    }

    //NOTE
    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    //TRANSACTION
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}