<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_Link extends Model
{
    use HasFactory;
    protected $table = 'payment_links';
    protected $fillable = [
        'bank_name',
        'bank_account_number',
        'bank_account_holder_name',
        'user_id',
    ];

    //USER
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
