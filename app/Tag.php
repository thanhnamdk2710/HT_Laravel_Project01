<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $table = 'tags'; 

    protected $fillable = ['name'];

    public $timestamps = false;

    public function book()
    {
        return $this->belongsToMany('App\Book');
    }
}
