<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillables = ['name', 'slug'];

    public function category(){
        return $this->hasMany('App\Post');
    }
}
