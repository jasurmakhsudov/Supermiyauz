<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'code', 'discount','active'];


    public function transactions(){
        return $this->hasMany(Transaction::class, 'referral_id', 'id');
    }

}