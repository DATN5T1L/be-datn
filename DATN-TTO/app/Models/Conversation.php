<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
    protected $fillable = [
        'conversation_name',
        'conversation_type',
    ];

    //MESSAGE
    public function messages()
    {
    return $this->hasMany(Message::class);
    }

    //GROUP_MEMBER
    public function group_member()
    {
    return $this->hasMany(Group_member::class);
    }
}
