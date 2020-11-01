<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $primaryKey = 'post_id';
    public $timestamps = false;
    protected $connection = '';
    protected $attributes = [
        'no_likes'=>0,
        'no_comments'=>0,
    ];
}
