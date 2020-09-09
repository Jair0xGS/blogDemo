<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;

//para solo usa querys
use DB;
class PostController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** 
            *para mostrar todos
            *$posts =  Post::all();

            *para mostrar todos pero para ordenarlos
            *$posts = Post::orderBy('created_at','desc')->get();
            *$posts = Post::orderBy('titulo','asc')->get();


            *para buscar un articulo en especifico
            *$posts = Post::where('titulo','Articulo dos')->get();




            *para usar querys
            *$posts = DB::select('SELECT * FROM posts');



            *para solo obtener un cierto numero de resultados
            *solo toma 1 post :v
            *$posts = Post::orderBy('titulo','desc')->take(1)->get();

            *para paginacion 
            *solo uno por pagina...pero tu puedes cambiar el numero
        
        */
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'titulo'=>'required',
            'descripcion'=>'required',
            'cuerpo'=> 'required',
            'imagen' =>'image|nullable|max:1999'
        ]);
        //manejar  subida de archivos
        if($request->hasFile('imagen')  ){
            //obtener el archivo con la extension
            $nombreExt=$request->file('imagen')->getClientOriginalName();
            $nombre= pathinfo($nombreExt,PATHINFO_FILENAME);
            $extension= $request->file('imagen')->getClientOriginalExtension();
            $nombreDelArchivoAGuardar= $nombre.'_'.time().'.'.$extension;
            $path = $request->file('imagen')->storeAs('public/PostsCovers',$nombreDelArchivoAGuardar);
        }else{
            $nombreDelArchivoAGuardar="articulo2.jpg";
        }
        // almacenar articulo
        $post =  new Post;
        $post->titulo = $request->input('titulo');
        $post->descripcion = $request->input('descripcion');
        $post->cuerpo = $request->input('cuerpo');
        $post->user_id = auth()->user()->id;
        $post->imagen= $nombreDelArchivoAGuardar;
        $post->save();
        return redirect('/posts')->with('success','Articulo Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        //verficar si es el usuario correcto
        if(auth()->user()->id !==$post->user_id){

            return redirect('/posts')->with('error','Pagina no autorizada');
        }
        return view('posts.edit')->with('post',$post);
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
        $this->validate($request,[
            'titulo'=>'required',
            'descripcion'=>'required',
            'cuerpo'=> 'required'
        ]);


        if($request->hasFile('imagen')  ){
            //obtener el archivo con la extension
            $nombreExt=$request->file('imagen')->getClientOriginalName();
            $nombre= pathinfo($nombreExt,PATHINFO_FILENAME);
            $extension= $request->file('imagen')->getClientOriginalExtension();
            $nombreDelArchivoAGuardar= $nombre.'_'.time().'.'.$extension;
            $path = $request->file('imagen')->storeAs('public/PostsCovers',$nombreDelArchivoAGuardar);
        }

        // almacenar articulo
        $post =   Post::find($id);
        $post->titulo = $request->input('titulo');
        $post->descripcion = $request->input('descripcion');
        $post->cuerpo = $request->input('cuerpo');
        if($request->hasFile('imagen')  ){

            $post->imagen=$nombreDelArchivoAGuardar;
        }
        $post->save();
        return redirect('/posts')->with('success','Articulo Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id);
        if(auth()->user()->id !==$post->user_id){

            return redirect('/posts')->with('error','Pagina no autorizada');
        }

        if($post->imagen != 'articulo2.jpg'){
            //borrar imagen
            Storage::delete('public/PostsCovers/'.$post->imagen);
        }


        $post->delete();
        return redirect('/posts')->with('success','Articulo Borrardo exitosamente');
        
    }
}
