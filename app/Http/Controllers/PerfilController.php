<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfiles;
use App\User;
class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //actualizamos el ferfil del usuario que lo requiera
        $this->validate($request,[
            'biografia'=>'required',
            'company'=>'required',
            'ubicacion'=> 'required',
            'paginaWeb'=> 'required'
        ]);
        if(auth()->user()->id == $id){

            //comprobamos si se ingreso un archivo
            if($request->hasFile('imagen')  ){
                //obtener el archivo con la extension
                $nombreExt=$request->file('imagen')->getClientOriginalName();
                $nombre= pathinfo($nombreExt,PATHINFO_FILENAME);
                $extension= $request->file('imagen')->getClientOriginalExtension();
                $nombreDelArchivoAGuardar= $nombre.'_'.time().'.'.$extension;
                $path = $request->file('imagen')->storeAs('public/PerfilesImg',$nombreDelArchivoAGuardar);
            }
            $user = User::find($id);
            // almacenar articulo
            $perfil =   Perfiles::where('uid', $id)->first();
            $perfil->biografia = $request->input('biografia');
            $perfil->company = $request->input('company');
            $perfil->ubicacion = $request->input('ubicacion');
            $perfil->paginaWeb = $request->input('paginaWeb');
            if($request->hasFile('imagen')  ){
    
                $perfil->imagen=$nombreDelArchivoAGuardar;
            }
            $perfil->save();
            

            return redirect('/home');


        }else{
            return 'no tienes permisos dude ';
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
