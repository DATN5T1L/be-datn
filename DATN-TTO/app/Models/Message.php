<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'receiver_id',
        'message_text',
        'user_id',
        'conversation_id'
    ];

    //MESSENGER_STATUS
    public function messenger_status()
    {
    return $this->hasMany(Messenger_status::class);
    }

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
