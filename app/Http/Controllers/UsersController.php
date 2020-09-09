<?php

namespace App\Http\Controllers;
use App\User;
use App\Post;
use App\Perfiles;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/')->with('error','Pagina no autorizada');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/')->with('error','Pagina no autorizada');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('/')->with('error','Pagina no autorizada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id) 
    {
        
        /**************************** */

        //obtenemos el usuario que se busca
        $user= User::find($id);
        //abre la pagina con el perfil del usuario
        $posts= $user->posts()->paginate(5, ["*"], "ptab");
        $contadorPosts = $posts->total();
        $perfil = $user->perfil;
        $seguidores = $user->seguidores()->paginate(5, ["*"], "stab");
        $contadorSeguidores = $seguidores->total();
        $seguidos = $user->seguidos()->paginate(5, ["*"], "satab");
        $contadorSeguidos = $seguidos->total();
       
        
        $data = array(
            'user'=>$user,
            'posts'=> $posts,
            'contadorPosts'=>$contadorPosts,
            'perfil'=> $perfil,
            'seguidores'=>$seguidores,
            'contadorSeguidores'=>$contadorSeguidores,
            'seguidos'=>$seguidos,
            'contadorSeguidos'=>$contadorSeguidos

            
        );

        return view('users.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect('/')->with('error','Pagina no autorizada');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect('/')->with('error','Pagina no autorizada');
    }
}
