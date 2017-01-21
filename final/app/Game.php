<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    public function category()
    {
        return $this->belongsToMany('App\Category');
    }

    public function user()
    {
        return $this->belongsToMany('App\User');
    }

    public function record(){
        return $this->hasMany('App\Record');
    }

    public function comment(){
        return $this->hasMany('App\Comment');
    }
}
