<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPostLike extends Model
{
    protected $table = "post_tag";
    protected $primaryKey = ['user_id', 'post_id'];
    public $incrementing = false;

    public $timestamps = false;
    protected $connection = '';
}
