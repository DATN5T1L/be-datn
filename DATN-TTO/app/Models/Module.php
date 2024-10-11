<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $table = 'modules';
    protected $fillable = [
        'route_id',
        'course_id',
    ];

    //ROUTE
    public function route()
    {
        return $this->belongsTo(Route::class, 'route_id');
    }

    //COURSE
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
