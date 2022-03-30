<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'definition',
        'photo',
        'price'
    ];
    //protected $primaryKey = 'course_id';

    public function videos(){
        return $this->hasMany(Videos::class, 'course_id', 'id');
    }

    public function transactions(){
        return $this->hasMany(Transaction::class, 'course_id', 'id');
    }

}
