<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    // relationships
    public function newCategories(){
    	return $this->hasMany('App\NewCategory', 'category_id', 'id');
    }

    public function news(){
    	return $this->hasManyThrough('App\News', 'App\NewCategory', 'category_id', 'new_category_id', 'id');
    }
}
