<?php

namespace App;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // need to add this library

class User extends Authenticatable // change model to authenticable
{
    protected $fillable = ['user_name', 'email', 'password'];
    protected $table = "users";
    protected $primaryKey = 'user_id';
    public $timestamps = false;
    protected $connection = '';
}