<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_Document extends Model
{
    use HasFactory;
    protected $table = 'comments_document';
    protected $fillable = [
        'comment_title',
        'comment_text',
        'status',
        'document_id',
        'user_id',
        'comment_to'
    ];

    protected $attributes = [
        'status' => 'active',
    ];
    //COMMENT - BÌNH LUẬN
    public function comments()
    {
        return $this->hasMany(Comment_Document::class);
    }

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

    //COMMENT_TO - BÌNH LUẬN TRẢ LỜI
    public function comment()
    {
        return $this->belongsTo(Comment_Document::class);
    }
    
}
