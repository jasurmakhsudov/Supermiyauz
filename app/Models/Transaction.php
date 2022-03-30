<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string',
    ];          
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'phone',
        'card_number',
        'card_expire',
        'token',
        'amount',
        'status',
        'invoice_id',
        'leed_id',
        'referral_id',
        'course_id',
        'invoice_created_time',
        'invoice_pay_time'
    ];

    public function course(){
        return $this->belongsTo(Courses::class);
    }

    public function referral(){
        return $this->belongsTo(Coupon::class);
    }

    public function leed(){
        return $this->belongsTo(Leeds::class);
    }

}
