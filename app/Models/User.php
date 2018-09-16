<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
    	'username',
    	'email',
    	'gender',
    	'status',
    	'role',
    	'password'
    ];
}
