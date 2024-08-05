<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'categories_id',
        'user_id',
        'title',
        'img',
        'content',
        'views',
    ];

    public function categories() {
        return $this->belongsTo(Post::class);
    }
    public function users() {
        return $this->belongsTo(Post::class);
    }
}
