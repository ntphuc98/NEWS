<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    public function news(){
    	return $this->belongsTo('App\News', 'new_id', 'id');
    }

    public function user(){
    	return $this->belongsTo('App\User', 'user_id', 'id')
    }
}
