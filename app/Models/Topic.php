<?php

namespace App\Models;

class Topic extends Model
{
    protected $fillable = ['title', 'body', 'user_id', 'category_id', 'reply_count', 'view_count',
        'collection', 'fabulous', 'forward', 'last_reply_user_id', 'order', 'excerpt', 'slug', 'is_good', 'is_top'];
}
