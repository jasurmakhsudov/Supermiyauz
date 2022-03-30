<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
    use HasFactory;
    
    public $timestamps = [ "created_at" ];

    protected $fillable = [
        'phone', 'message', 'status'
    ];
}
