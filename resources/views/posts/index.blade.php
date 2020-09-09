@extends('layouts.app')
@section('content')


<div class="blank-header subMenuBox">
        <img class="caja cl  subMenuSvg" src="{{asset('img/icons-pattern-left.svg')}}">
        <img class="caja crz subMenuSvg" src="{{asset('img/icons-pattern-right.svg')}}">
        <div class="header-content">
            <h1>
                Todos los Posts
            </h1>
        </div>
</div>
<div class="container my-2">
        @include('inc.mensajes')
        
    </div>

        
        <!--
        <div class="centrador my-4" >
            <div class="seccion">
                
                <div class="articulos">

                    @if (count($posts)>0)
                        @foreach ($posts as $post)
                        <div class="articulo shadow">
                                <a class="cover" href="/lproc/public/posts/{{$post->id}}" style="background-image: url({{asset('img/'.$post->imagen)}});;text-decoration: none">
                                    <div class="overlay">
                                        <h3 class="Bltitulo"> 
                                                {{$post->titulo}} 
                                        </h3>
                                    </div>
                                </a>
                                <div class="informacion-deArticulo">
                                    <div class="autor">
                                        <strong>
                                            {{$post->user->name}}
                                            <span>&nbsp;</span>
                                            <a href="#">
                                                <img src="img/logo.png" alt="" width="17px" style="filter: grayscale(100%)"> 
                                            </a>
                                            
                                        </strong>
                                    </div>
                                    <div class="fecha">
                                            {{$post->created_at}}
                                    </div>
                                    <div class="descripcion" style="max-width:375px">
                                            {{$post->descripcion}} 
                                    </div>
                                    <a href="/lproc/public/posts/{{$post->id}}" class="btn btn-outline-dark"><b>Leer Mas </b></a>
                                </div>
                            </div>
                        @endforeach
                        <div class="container" aling="center">
                                {{$posts->links()}}
                        </div>
                        
                    @else
                        <div style="margin-top:100px; margin-bottom-100px">
                            <p>No se encontro ningun Articulo</p>
                        </div>
                    @endif
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
    -->
        <div class="container my-4">
            <div class="row">
                @if (count($posts)>0)
                    @foreach ($posts as $post)
                <div class="col-md-6 ">
                    <div class="card mb-4">
                        <a class="cover" href="{{ url('/posts',$post->id) }}"
                            style="background-image: url(storage/PostsCovers/{{$post->imagen}});;text-decoration: none">
                            <div class="overlay">
                                <h4 class="Bltitulo">
                                        {{$post->titulo}} 
                                </h4>
                            </div>
                        </a>
                        <div class="card-footer text-muted">
                            Creado en {{$post->created_at}}, por
                            <a href="{{ url('/users',$post->user->id) }}" class="text-dark">{{$post->user->name}}</a>
                        </div>
                        <div class="card-body">
    
                            <p class="card-text">{{$post->descripcion}} </p>
    
                            <a href="{{ url('/posts',$post->id) }}" class="btn btn-outline-dark"><b>Leer Mas →</b></a>
                        </div>
    
                    </div>
                </div>
                @endforeach
                <!--  para la paginacion de los posts-->
                        <div class="container">

                            {{$posts->links()}}
                        </div>
                
                @else
                        <div style="margin-top:100px; margin-bottom-100px">
                            <p>No se encontro ningun Articulo</p>
                        </div>
                @endif 
                
            </div>
        </div>

    
    
    
@endsection