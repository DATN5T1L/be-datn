<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_type',
        'amount',
        'payment_method',
        'status',
        'payment_discription',
        'enrollment_id',
        'user_id',
        'wallet_id',
    ];

    //ENROLLMENT
    public function enrollments()
    {
    return $this->belongsTo(Enrollment::class);
    }

    //WALLET
    public function wallets()
    {
    return $this->belongsTo(Wallet::class);
    }

    //USER
    public function users()
    {
    return $this->belongsTo(User::class);
    }
}
