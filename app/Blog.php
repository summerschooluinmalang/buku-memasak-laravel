<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = 'blogs';
    protected $fillable = ['title', 'user_id', 'content', 'category_id'];

    public function category()
    {
    	return $this->belongsTo('App\Category', 'category_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

}
