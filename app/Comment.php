<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post(){
        return $this->belongsTo('App\Post','post');
    }
    public function usuario(){
        return $this->belongsTo('App\User','user');
    }
    public function subComentarios(){
        return $this->hasMany('App\Comment','commentFather');
    }    

}
