@extends('layouts/app')

@section('content')
<!--
<div class="container">
    <h1>busquedas</h1>
    
    
    <p>{{$input['query']}}</p><br>
    <p>{{$input['tipo']}}</p><br>
    </div>
-->
    <div class="container p-4">
            <div class="row">
                <div class="col-sm-3 opT">
                    <nav class="list-group">
                        <a class="list-group-item d-flex justify-content-between align-items-center list-group-item-action @if($input['tipo']=='blogs') active @endif"
                    href="?query={{$input['query']}}&tipo=blogs">
                            Blogs
                    <span class="badge badge-pill badge-primary ">
                                {{$numeroPosts}}
                            </span>
                        </a>
                        <!--
                        <a class="list-group-item d-flex justify-content-between align-items-center list-group-item-action "
                            href="#">
                            Repositorios
                            <span class="badge badge-pill badge-primary">
                                119K
                            </span>
                        </a>
                    -->
                        <a class="list-group-item d-flex justify-content-between align-items-center list-group-item-action @if($input['tipo']=='usuarios') active @endif"
                        href="?query={{$input['query']}}&tipo=usuarios">
                            Usuarios
                            <span class="badge badge-pill badge-primary">
                                    {{$numeroUsuarios}}
                            </span>
                        </a>
                        
                        </a>
                    </nav>
                    <!--
                    <div class="  p-3 mb-3 d-none d-md-block">
                        <h4 class="d-inline-block f5 mb-2">
                            Lenguajes
                        </h4>
                        <ul class="list-group ">
    
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center list-group-item-action ">
                                HTML
                                <span class="badge badge-pill badge-dark">
                                    1,880
                                </span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center list-group-item-action ">
                                JavaScript
                                <span class="badge badge-pill badge-dark">
                                    1,691
                                </span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center list-group-item-action ">
                                Java
                                <span class="badge badge-pill badge-dark">
                                    1,371
                                </span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center list-group-item-action ">
                                CSS
                                <span class="badge badge-pill badge-dark">
                                    745
                                </span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center list-group-item-action ">
                                C
                                <span class="badge badge-pill badge-dark">
                                    560
                                </span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center list-group-item-action ">
                                Python
                                <span class="badge badge-pill badge-dark">
                                    435
                                </span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center list-group-item-action ">
                                C++
                                <span class="badge badge-pill badge-dark">
                                    392
                                </span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center list-group-item-action ">
                                PHP
                                <span class="badge badge-pill badge-dark">
                                    369
                                </span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center list-group-item-action ">
                                C#
                                <span class="badge badge-pill badge-dark">
                                    332
                                </span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center list-group-item-action ">
                                Ruby
                                <span class="badge badge-pill badge-dark">
                                    3,623
                                </span>
                            </li>
    
    
                        </ul>
                    </div>-->
                </div>
                <div class="col-sm ">
                    <div class="d-flex flex-column flex-md-row flex-justify-between border-bottom pb-3 position-relative">
                        <h3>
                                @if($input['tipo']=='blogs') {{$numeroPosts}} @else {{$numeroUsuarios}}  @endif
                             Resultados de {{$input['tipo']}}
                        </h3>
                        <!--
                        <div class="btn-group   right col-md-4 ml-auto">
                            <button aria-expanded="false" aria-haspopup="true"
                                class=" border btn btn-secundary dropdown-toggle" data-toggle="dropdown" type="button">
                                Ordenar Por : <b>Mejor Busqueda</b>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Mejor Busqueda</a>
                                <a class="dropdown-item" href="#">Mas Estrellas</a>
                                <a class="dropdown-item" href="#">Menos Estrellas</a>
                                <a class="dropdown-item" href="#">Recientemente Subido</a>
                                <a class="dropdown-item" href="#">Menos Reciente</a>
                            </div>
                        </div>
                    -->
                    </div>
                    <div class="container noPadding ">
                        <div>
                            <!--
                            <div class="row py-4 mb-3 border-bottom">
                                <div class="col-sm">
                                    <div class="listProyectName mb-1">
                                        <a href="modeloProyecto.html">
                                            nombreUsuario/NombreProyecto
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-9 d-inline-block listProyectDescription mb-2 noPadding">
                                        Descripcion del proyecto
                                    </div>
                                    <div>
                                        <button type="button"
                                            class="btn btn-primary btn-sm caracteristicasProyecto">Categoria</button>
                                        <button type="button"
                                            class="btn btn-primary btn-sm caracteristicasProyecto">Categoria</button>
                                        <button type="button"
                                            class="btn btn-primary btn-sm caracteristicasProyecto">Categoria</button>
                                        <button type="button"
                                            class="btn btn-primary btn-sm caracteristicasProyecto">Categoria</button>
                                        <button type="button"
                                            class="btn btn-primary btn-sm caracteristicasProyecto">Categoria</button>
                                        <button type="button"
                                            class="btn btn-primary btn-sm caracteristicasProyecto">Categoria</button>
                                    </div>
                                    <div class="listProyectVarious mt-3 row">
                                        <span class="col-sm-auto">
                                            Licencias
                                        </span>
    
                                        <span class="col-sm-auto">
                                            Actualizado "utilma fecha de actializacion del proyecto"
                                        </span>
    
                                        <a href="#" class="col-sm-auto">
                                            asuntos para ayudar
                                        </a>
                                    </div>
                                    <div class="d-flex flex-wrap col-sm-auto">
    
    
                                    </div>
                                </div>
                                <div class="col-sm-4 ">
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="ml-0 mr-3">
                                                <svg width="12" height="12" class="colorSvg">
                                                    <circle cx="6" cy="6" r="6" fill="#00ADD8" />
                                                </svg>
                                                <span class="text-grey">Go</span>
                                            </span>
    
                                        </div>
                                        <div class="col-6">
                                            <a class="muted-link mr-3" href="#">
                                                <svg class="svgC" aria-label="star" class="listSvgAling" viewBox="0 0 14 16"
                                                    version="1.1" width="14" height="16" role="img">
                                                    <path fill-rule="evenodd"
                                                        d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74L14 6z">
                                                    </path>
                                                </svg>
                                                427
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        -->
                        @if($input['tipo']=='usuarios')
                            @if(count($usuarios)>0)
                                @foreach ($usuarios as $usuario)
                                <div class="row py-4 border-bottom">
                                        <div class="col-2">
                                            <img class="rounded" width="100%" src="{{url('storage/PerfilesImg/'.$usuario->perfil->imagen)}}" alt="">
                                        </div>
                                        <div class="col">
                                            <a href="{{ url('/users',$usuario->id) }}" class="a-custom">
                                                <span class="listUsersName">
                                                    {{$usuario->name}}
                                                </span>
                                                <span class="listUsersNick pl-1">
                                                        {{$usuario->nick}}
                                                </span>
                                            </a>
                                            <div class="listUsersDesc pt-1">
                                                    {{$usuario->perfil->biografia}}
                                            </div>
                                            <div class="listUsersDesc pt-1 row pl-3">
                                                <span class="mr-3 col-sm noPadding">
                                                    <svg fill="#343A40" class="octicon octicon-organization" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M16 12.999c0 .439-.45 1-1 1H7.995c-.539 0-.994-.447-.995-.999H1c-.54 0-1-.561-1-1 0-2.634 3-4 3-4s.229-.409 0-1c-.841-.621-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.442.58 2.5 3c.058 2.41-.159 2.379-1 3-.229.59 0 1 0 1s1.549.711 2.42 2.088C9.196 9.369 10 8.999 10 8.999s.229-.409 0-1c-.841-.62-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.437.581 2.495 3c.059 2.41-.158 2.38-1 3-.229.59 0 1 0 1s3.005 1.366 3.005 4z"></path>
                                                    </svg>
                                                    {{$usuario->perfil->company}}
                                                </span>
                                                <span class="col-sm noPadding">
                                                        <svg fill="#343A40" class="octicon octicon-location" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true">
                                                                <path fill-rule="evenodd" d="M6 0C2.69 0 0 2.5 0 5.5 0 10.02 6 16 6 16s6-5.98 6-10.5C12 2.5 9.31 0 6 0zm0 14.55C4.14 12.52 1 8.44 1 5.5 1 3.02 3.25 1 6 1c1.34 0 2.61.48 3.56 1.36.92.86 1.44 1.97 1.44 3.14 0 2.94-3.14 7.02-5 9.05zM8 5.5c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"></path>
                                                            </svg> {{$usuario->perfil->ubicacion}}
                                                </span>
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto " align="center">
                                            <a href="#">
                                                    @if(Auth::guest())
                                                    <a href="{{ route('register')}}">
                                                    <button type="button" class="btn btn-light border btn-sm  ">
                                                        <b>Seguir</b></button>
                                                    </a>
                                                @else
        
                                                    @if(Auth::user()->id != $usuario->id)
        
        
                                                        @if(DB::table('follows')->where([
                                                        ['seguidor',Auth::user()->id],
                                                        ['seguido',$usuario->id]
                                                        ])->exists())
                                                            {!! Form::open(['action' => 'FollowsController@delete','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                                                            {{Form::hidden('seguidor',Auth::user()->id)}}
                                                            {{Form::hidden('seguido',$usuario->id)}}
                                                            {{Form::submit('No Seguir',['class'=>'btn btn-light border btn-sm font-weight-bold'])}}
                    
                                                            {!! Form::close() !!}
        
        
                                                        @else
                                                            {!! Form::open(['action' => 'FollowsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                                                            {{Form::hidden('seguidor',Auth::user()->id)}}
                                                            {{Form::hidden('seguido',$usuario->id)}}
                                                            {{Form::submit('Seguir',['class'=>'btn btn-light border btn-sm font-weight-bold'])}}
                    
                                                            {!! Form::close() !!}
        
                                                        @endif
                                                    @endif
                                                @endif
                                            </a>
            
                                        </div>
                                    </div>
                                @endforeach

                            @else
                                <div class="my-5 py-5">
                                    <div class="mb-5 pb-5">
                                        <h2 class="mb-5 pb-5">Ningun usuario encontrado</h2>
                                    </div>
                                </div>
                            @endif
                            </div>
                            <div class="container mt-3">
                                    {{$usuarios->appends(['query' => $input['query'],'tipo' => $input['tipo']])->links()}}
                            </div>
                        

                        @else 
                            @if(count($posts)>0)

                                @foreach ($posts as $post)
                                <div class="container my-2 border ">
                                        <div class="row">
                                        <div class="col-md noPadding">
                                                <a class="cover" href="{{ url('/posts',$post->id) }}" style="background-image: url({{url('storage/PostsCovers/'.$post->imagen)}});;text-decoration: none">
                                                
                                                    <div class="overlay">
                                                        <h4 class="Bltitulo">
                                                                {{$post->titulo }} 
                                                        </h4>
                                                    </div>
                                                </a>
                                        </div>
                                        <div class="col-md noPadding">
                                                
                                                    <div class="card-body">
                                
                                                        <p class="card-text">{{$post->descripcion}}</p>
                                
                                                        <div class="row">
                                                            <div class="col-auto">
                                                                    <a href="{{ url('/posts',$post->id) }}" class="btn btn-outline-dark"><b>Leer Mas →</b></a>

                                                            </div>
                                                            @if(!Auth::guest())
                                                            @if(Auth::user()->id==$post->user_id)
                                                            <div class="col-auto noPadding">
                                                                    <a href="{{ url('/posts/'.$post->id.'/edit') }}" class="btn btn-info ml-2">Editar</a> 

                                                            </div>
                                                            <div class="col-auto">
                                                                    {!!Form::open(['action'=>['PostController@destroy',$post->id],'method'=> 'POST','class'=>'pull-right'])!!}
                                                                    {{Form::hidden('_method','DELETE')}}
                                                                    {{Form::submit('Borrar',['class'=>'btn btn-danger'])}}
                                            
                                                                    {!!Form::close()!!}

                                                            </div>
                                                            @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                        </div>
                                        
                                        </div>
                                    </div>
                            <!-- un blog-->
                                @endforeach

                            @else 

                            <div class="my-5 py-5">
                            <div class="mb-5 pb-5">
                            <h2 class="mb-5 pb-5">Ningun blog encontrado</h2>
                            </div>
                            </div>
                            @endif
                            </div>
                            <div class="container mt-3">
                                    {{$posts->appends(['query' => $input['query'],'tipo' => $input['tipo']])->links()}}
                            </div>
                        @endif
                            
    
    
                        
                    </div>
                </div>
            </div>
    
    
        </div>
    </div>
@endsection