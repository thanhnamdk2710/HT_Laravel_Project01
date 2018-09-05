<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = ['ISBN','name','alias','image','editor','publisher','count','category_id','average'];

    public $timestamps = false;

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsToMany('App\User');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function author()
    {
        return $this->belongsToMany('App\Author');
    }

}
