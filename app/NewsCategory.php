<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = 'new_categories';

    public function category(){
    	return $this->belongsTo('App\Category', 'category_id', 'id');
    }

     public function news(){
    	return $this->hasMany('App\News', 'news_category_id', 'id');
    }
}
