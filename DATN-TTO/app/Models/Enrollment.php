<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    protected $table = 'enrollments';
    protected $fillable = [
        'rating_course',
        'feedback_text',
        'status_course',
        'certificate_course',
        'enroll',
        'module_id',
        'user_id',
    ];

    protected $attributes = [
        'status_course' => 'in_progress',
    ];
    //TRANSACTION
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    //STATUS_VIDEO
    public function status_videos()
    {
        return $this->hasMany(Status_Video::class);
    }


    //MODULE
    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    //USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
