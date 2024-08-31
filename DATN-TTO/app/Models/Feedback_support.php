<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback_support extends Model
{
    use HasFactory;
    protected $fillable = [
        'rating_support',
        'feedback_test_support',
        'user_id',
    ];

    //USER
    public function users()
    {
    return $this->belongsTo(User::class);
    }
}
