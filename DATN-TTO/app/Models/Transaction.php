<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = [
        'transaction_type',
        'amount',
        'payment_method',
        'status',
        'payment_discription',
        'enrollment_id',
        'user_id'
    ];
    protected $attributes = [
        'status' => 'pending',
    ];
    //ENROLLMENT
    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }

    //USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
