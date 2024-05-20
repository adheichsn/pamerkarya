<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['user_id', 'post_id'];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the Post model
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // Define a scope to check if a user has liked a specific post
    public function scopeLikedByUser($query, $userId, $postId)
    {
        return $query->where('user_id', $userId)->where('post_id', $postId);
    }
}
