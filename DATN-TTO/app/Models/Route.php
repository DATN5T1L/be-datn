<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_route',
        'img_route',
        'discription_route',        
    ];

    //ROUTE
    public function modules()
    {
    return $this->hasMany(Module::class);
    }
}

