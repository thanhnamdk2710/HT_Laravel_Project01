<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $filltable = [
    	'id',
    	'name'
	];

	public function book(){
		this->hasMany('App/Models/Category','category_id','id');
	}
}
