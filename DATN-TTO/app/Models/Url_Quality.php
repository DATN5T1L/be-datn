<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url_Quality extends Model
{
    use HasFactory;
    protected $table = 'url_qualities';
    protected $fillable = [
        'quality_video',
        'quality_url',
        'document_id',
    ];

    //DOCUMENT
    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
