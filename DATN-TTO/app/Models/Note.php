<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $table = 'notes';
    protected $fillable = [
        'title_note',
        'content_note',
        'cache_time_note',
        'document_id',
        'user_id',

    ];

    //DOCUMENT
    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    //USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
