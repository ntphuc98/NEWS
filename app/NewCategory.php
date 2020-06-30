<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewCategory extends Model
{
    protected $table = 'new_categories';

    public function category(){
    	return $this->belongsTo('App\Category', 'category_id', 'id');
    }

     public function news(){
    	return $this->hasMany('App\News', 'new_category_id', 'id');
    }
}
