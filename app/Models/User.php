<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public const ROLE_ADMIN = 'Administrator';
    public const ROLE_USER = 'User';
    public const ROLE_BANK = 'Bank';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'password', 'role', 'token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token', 'token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function isAdmin():bool{
        return $this->role === self::ROLE_ADMIN;
    }
    public function isUser():bool{
        return $this->role === self::ROLE_USER; 
    }

    public static function allUser(){
        // return dd(DB::table('users')->where('role',self::ROLE_USER )->pluck('phone'));
        return User::where('role',self::ROLE_USER); 
    }

    public static function rolesList(): array
    {
        return [
            self::ROLE_USER => 'User',
            self::ROLE_ADMIN => 'Administrator',
            self::ROLE_BANK => 'Bank',
        ];
    }

    public function permissions(){
        return $this->hasMany(Permission::class, 'user_id', 'id');
    }

    // public function videos() {
    //     return $this->hasMany(Video::class);
    // }
}
