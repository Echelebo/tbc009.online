<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Updates extends Model
{
    use HasFactory;


    //user relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id',
        'amount',
        'fee',
        'currency',
        'converted_amount',
        'ref',
        'payment_wallet',
        'status',
        'network',
        'valid_until',
        'payment_id',
    ];
}
