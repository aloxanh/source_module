<?php

namespace App\Models\shared;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comment extends Model
{
    /**
     * Get the owning commentable model.
     */
    public function commentable(){
        return $this->morphTo();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

}
