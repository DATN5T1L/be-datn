<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $fillable = [
        'balance',
        'bank_name',
        'bank_account_number',
        'bank_account_holder_name',
        'PIN',
        'user_id',
    ];

    //TRANSACTION
    public function transactions()
    {
    return $this->hasMany(Transaction::class);
    }

    //USER
    public function users()
    {
    return $this->belongsTo(User::class);
    }
}
