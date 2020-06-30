<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public function newCategory(){
    	return $this->belongsTo('App\NewCategory', 'new_category_id','id');

    }

    public function comments(){
    	return $this->hasMany('App\Comment', 'new_id', 'id');
    }
}
