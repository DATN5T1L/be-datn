<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url_Sub_Title extends Model
{
    use HasFactory;
    protected $table = 'url_sub_titles';
    protected $fillable = [
        'sub_title_video',
        'sub_title_url',
        'document_id',
    ];

    //DOCUMENT
    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
