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
        'description_route',
    ];

    //MODULE
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
