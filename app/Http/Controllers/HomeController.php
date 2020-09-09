<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\User;
use  App\Post;
use  App\Perfiles;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   /**
        *obtiene el id del usuario loggeado
        *$user_id = auth()->user()->id;
        *retorna el usuario loggeado
        *$user= User::find($user_id);
        *abre la pagina con el perfil del usuario
        *$postst= Post::where('user_id',$user_id)->get();
        *$cuenta = count($postst);
        *$posts= Post::where('user_id',$user_id)->paginate(5);
        *if(!isset($user->perfil)){
        *    Perfiles::create([
        *        'uid'=> $user_id,
        *        'biografia'=> 'ingrese una biografia',
        *        'company'=> 'ingrese una empresa',  
        *        'ubicacion'=> 'ingrese una ubicacion',
        *        'paginaWeb'=> 'ingrese una Pagina Web'
        *    ]);
        *}
        *$perfil = Perfiles::where('uid',$user_id)->first();
        *$data = array(
        *    'posts'=> $posts,
        *    'perfil'=> $perfil,
        *    'cuenta'=>$cuenta
        *);
        */
        $user_id = auth()->user()->id;
        $user= User::find($user_id);
        if(!isset($user->perfil)){
            Perfiles::create([
                'uid'=> $user_id,
                'biografia'=> 'ingrese una biografia',
                'company'=> 'ingrese una empresa',  
                'ubicacion'=> 'ingrese una ubicacion',
                'paginaWeb'=> 'ingrese una Pagina Web',
                'imagen'=> 'noImagen.jpg'
            ]);
        }
        $user_id = auth()->user()->id;
        //return view('home')->with($data);
        return redirect(url('users/'.$user_id));
    }
}
