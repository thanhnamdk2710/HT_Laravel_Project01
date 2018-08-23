<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $filltable = ['name'];

	public function books()
	{
		$this->hasMany('App\Models\Book','category_id','id');
	}
}
