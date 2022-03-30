<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payme extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string',
    ];  

    protected $fillable = [
        'id',
        'card_number',
        'card_expire',
        'token',
        'phone_number',
        'invoice_id',
        'amount',
        'status'
    ];
    
    // public function checkout()
    // {
    //     return $this->belongsTo(Checkouts::class);
    // }

    // public function transactions(){
    //     return $this->hasMany(Transaction::class, 'leed_id', 'id');
    // }
}
