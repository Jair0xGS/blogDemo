<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use DB;
class controladorDePaginas extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at','desc')->paginate(3);
        
        //forma 1
        //return view('paginas.index',compact('titulo'));

        //forma 2
        return view('paginas.index')->with('posts',$posts);
    }
    public function about(){
        /*$data = array(
            'titulo'=> 'servicios',
            'servicios'=> ['Diseño Web','Programacion','otra cosa']
        );*/
        $fechaInicio = 'Septiembre 2019';
        $sede = 'Trujillo';
        
        $numeroDeRepositorios = DB::table('posts')->count();

        $data = array(
            'fechaInicio'=> $fechaInicio,
            'sede'=> $sede,
            'num'=>$numeroDeRepositorios
        );
        
        return view('paginas.about')->with($data);
    }
    public function desarrolladores(){
        $nombreDesarrollador = 'Guevara Segura Jair';
        return view('paginas.desarrolladores')->with('nombreDesarrollador',$nombreDesarrollador);
    }
    public function ayuda(){
        return view('paginas.ayuda');
    }
    public function estatus(){
        return view('paginas.estatus');
    }
    public function contactanos(){
        return view('paginas.contactanos');
    }
    public function busqueda(Request $request){
        $input = $request->all();
        if(! isset($input['query'])){
            return view('paginas.busquedaVacia');
               
        }else {
            //asginamos el tipo de busqueda por defecto
            //por ahora es blogs pero despues tendra q ser por repositorios
            if(!isset($input['tipo']) || $input['tipo'] == null){
                $input['tipo'] ='blogs';
            }
            $usuarios = User::where('name', 'like', '%' . $input['query'] . '%')->paginate(10);
            $numeroUsuarios=$usuarios->total()	;
            $posts = Post::where('titulo', 'like', '%' . $input['query'] . '%')->paginate(10);
            $numeroPosts=$posts->total()	;

            switch ($input['tipo']) {

                case "usuarios":
                    
                    $data = array(
                        'usuarios'=> $usuarios,
                        'input'=> $input,
                        'numeroPosts'=>$numeroPosts,
                        'numeroUsuarios'=>$numeroUsuarios
                    );
                    break;
                default:
                    $input['tipo'] ='blogs';
                    //$posts = Post::where('titulo', 'like', '%' . $input['query'] . '%')->get();
                    $data = array(
                        'posts'=> $posts,
                        'input'=> $input,
                        'numeroPosts'=>$numeroPosts,
                        'numeroUsuarios'=>$numeroUsuarios
                    );
                    break;
                
            }
            /*
            $data = array(
                'posts'=> $posts,
                'usuarios'=> $usuarios,
                'input'=> $input,
                'numeroResultados'=>$numeroResultados
            );*/
            return view('paginas.busqueda')->with($data);
        }
    }


    
}
