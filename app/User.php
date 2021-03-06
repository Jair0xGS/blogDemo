<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// implements MustVerifyEmail
class User extends Authenticatable 
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','nick',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function posts(){
        return $this->hasMany('App\Post');
    }
    public function perfil(){
        return $this->hasOne('App\Perfiles','uid');
    }
    public function seguidores(){
        return $this->belongsToMany('App\User','follows','seguido','seguidor');
    }
    public function seguidos(){
        return $this->belongsToMany('App\User','follows','seguidor','seguido');
    }
}
