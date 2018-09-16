<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
    	'username',
    	'email',
    	'avatar',
    	'gender',
    	'status',
    	'role',
    	'password'
    ];
}
