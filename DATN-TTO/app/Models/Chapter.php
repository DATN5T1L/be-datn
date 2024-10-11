<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $table = 'chapters';
    protected $fillable = [
        'name_chapter',
        'course_id',
    ];

    //DOCUMENT
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
    //COURSE
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
