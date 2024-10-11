<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $table = 'routes';
    protected $fillable = [
        'name_route',
        'img_route',
        'discription_route',
        'status'
    ];

    protected $attributes = [
        'status' => 'default',
    ];

    //MODULE
    public function modules()
    {
        return $this->hasMany(Module::class, 'route_id');
    }

    //COURSE
    public function courses()
    {
        return $this->hasManyThrough(Course::class, Module::class, 'route_id', 'id');
    }

    //ENROLLMENT
    public function enrollments()
    {
        return $this->hasManyThrough(Module::class, Enrollment::class);
    }
}
