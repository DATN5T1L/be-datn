<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messenger_status extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'message_id',
        'user_id',
    ];

    //MESSAGE
    public function messages()
    {
    return $this->belongsTo(Message::class);
    }

    //USER
    public function users()
    {
    return $this->belongsTo(User::class);
    }
}
