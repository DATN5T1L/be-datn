<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_member extends Model
{
    use HasFactory;
    protected $fillable = [
        'left_datetime',
        'user_id',
        'conversation_id',
    ];

    //USER
    public function users()
    {
    return $this->belongsTo(User::class);
    }

    //CONVERSATION
    public function conversations()
    {
    return $this->belongsTo(Conversation::class);
    }
}
