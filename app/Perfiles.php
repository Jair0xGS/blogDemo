<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    protected $fillable = ['uid','biografia','company','ubicacion','paginaWeb'];
    public function user(){
        return $this->belongsTo('App\User','id');
    }
}
