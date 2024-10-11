<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{

    use HasFactory;
    protected $table = 'documents';
    protected $fillable = [
        'name_document',
        'discription_document',
        'poster_document',
        'url_video',
        'type_document',
        'chapter_id',

    ];

    //COMMENT_DOCUMENT
    public function comments_document()
    {
        return $this->hasMany(Comment_Document::class);
    }

    //URL_QUALITY
    public function url_qualities()
    {
        return $this->hasMany(Url_Quality::class);
    }

    //URL_SUB_TITLE
    public function url_sub_titles()
    {
        return $this->hasMany(Url_Sub_Title::class);
    }

    //STATUS_VIDEO
    public function status_videos()
    {
        return $this->hasMany(Status_Video::class);
    }


    //NOTE
    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    //CHAPTER
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}
