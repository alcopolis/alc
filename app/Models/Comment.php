<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'body', 'url', 'days', 'commentable_id', 'commentable_type', 'user_id'
    ];
}
