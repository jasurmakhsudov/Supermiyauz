<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leeds extends Model
{
    use HasFactory;

    public const NEW_LEED = 'New Leed';
    public const CALLED = 'Called';
    public const NOT_RESPONSE = 'No response';
    public const PENDING = 'Pending';
    public const CANCELED = 'Canceled';
    public const CONFIRMED = 'Confirmed';
        
    protected $fillable = [
        'name',
        'phone',
        'course',
        'status'
    ];
    
    public function transactions(){
        return $this->hasMany(Transaction::class, 'leed_id', 'id');
    }

    public static function rolesList(): array
    {
        return [
            self::NEW_LEED,
            self::CALLED,
            self::NOT_RESPONSE,
            self::PENDING,
            self::CANCELED,
            self::CONFIRMED
        ];
    }

}
