<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function cate(){
    	return $this->belongsTo('App\Category');
    }
}
