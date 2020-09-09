<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // nombre de la tabla
    protected $table = 'posts';
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function comentarios(){
        return $this->hasMany('App\Comment','post');
    }
}
