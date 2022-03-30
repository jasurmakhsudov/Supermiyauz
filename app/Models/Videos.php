<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'course_id',
        'visibility',
        'order'
    ];
    // protected $primaryKey = 'course_id';

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

}
