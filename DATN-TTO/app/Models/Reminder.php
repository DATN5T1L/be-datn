<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;
    protected $table = 'reminders';
    protected $fillable = [
        'day_of_week',
        'time',
        'status',
        'enrollment_id',
    ];

    //ENROLLMENT
    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
