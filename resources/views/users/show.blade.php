@extends('layouts.app')

@section('content')

<div class="container mt-4">
        <div class="row ">
            <div class="col-lg-3   mb-4">
                <div class="container">
                    <img class="rounded" src="{{url('storage/PerfilesImg/'.$perfil->imagen)}}" width="100%"
                        alt="">
                    <div class="mt-2 ">
                            
                        <span class="nombreUsuario">{{ $user->name }}</span>
                        <h5 class="nickUsuario">{{ $user->nick }}</h5>
                    </div>
                    <div class="pt-2" id="datosLLenados">
                        <div class="my-1">
                                @if(!Auth::guest())
                                @if(Auth::user()->id == $user->id)
                                <button class="btn btn-outline-dark "  style="width: 100%" onclick="editarDatos()">Editar Perfil</button>
                                @else 





                                    @if(DB::table('follows')->where([
                                    ['seguidor',Auth::user()->id],
                                    ['seguido',$user->id]
                                    ])->exists())
                                        {!! Form::open(['action' => 'FollowsController@delete','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                                        {{Form::hidden('seguidor',Auth::user()->id)}}
                                        {{Form::hidden('seguido',$user->id)}}
                                        {{Form::submit('No Seguir',['class'=>'btn btn-outline-dark','style'=>'width: 100%'])}}

                                        {!! Form::close() !!}


                                    @else
                                        {!! Form::open(['action' => 'FollowsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                                        {{Form::hidden('seguidor',Auth::user()->id)}}
                                        {{Form::hidden('seguido',$user->id)}}
                                        {{Form::submit('Seguir',['class'=>'btn btn-outline-dark','style'=>'width: 100%'])}}

                                        {!! Form::close() !!}

                                    @endif
                             





                                @endif
                                @endif
                        </div>
                            
                        <div>
                        <p class="descripcionUsuario">{{$perfil->biografia}}</p>

                        </div>
                        <div>
                            <svg viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                <path fill="#343A40" fill-rule="evenodd"
                                    d="M16 12.999c0 .439-.45 1-1 1H7.995c-.539 0-.994-.447-.995-.999H1c-.54 0-1-.561-1-1 0-2.634 3-4 3-4s.229-.409 0-1c-.841-.621-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.442.58 2.5 3c.058 2.41-.159 2.379-1 3-.229.59 0 1 0 1s1.549.711 2.42 2.088C9.196 9.369 10 8.999 10 8.999s.229-.409 0-1c-.841-.62-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.437.581 2.495 3c.059 2.41-.158 2.38-1 3-.229.59 0 1 0 1s3.005 1.366 3.005 4z" />
                            </svg>
                            <span class="descripcionUsuario"><a href="" class="text-dark">{{$perfil->company}}</a></span>
                        </div>
                        <div>
                            <svg class="octicon octicon-location" viewBox="0 0 12 16" version="1.1" width="12"
                                height="16" aria-hidden="true">
                                <path fill-rule="evenodd" fill="#343A40"
                                    d="M6 0C2.69 0 0 2.5 0 5.5 0 10.02 6 16 6 16s6-5.98 6-10.5C12 2.5 9.31 0 6 0zm0 14.55C4.14 12.52 1 8.44 1 5.5 1 3.02 3.25 1 6 1c1.34 0 2.61.48 3.56 1.36.92.86 1.44 1.97 1.44 3.14 0 2.94-3.14 7.02-5 9.05zM8 5.5c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z" />
                            </svg>
                            <span class="descripcionUsuario">{{$perfil->ubicacion}}</span>
                        </div>
                        @if(!Auth::guest())
                        @if( Auth::user()->id != $user->id)
                        <div>
                            <svg class="octicon octicon-mail" viewBox="0 0 14 16" version="1.1" width="14" height="16"
                                aria-hidden="true">
                                <path fill-rule="evenodd" fill="#343A40"
                                    d="M0 4v8c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H1c-.55 0-1 .45-1 1zm13 0L7 9 1 4h12zM1 5.5l4 3-4 3v-6zM2 12l3.5-3L7 10.5 8.5 9l3.5 3H2zm11-.5l-4-3 4-3v6z" />
                            </svg>
                            <span class="descripcionUsuario"><a href="#">{{$user->email }}</a></span>
                            
                        </div>
                        @endif
                        @else
                        <div>
                                <svg class="octicon octicon-mail" viewBox="0 0 14 16" version="1.1" width="14" height="16"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd" fill="#343A40"
                                        d="M0 4v8c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H1c-.55 0-1 .45-1 1zm13 0L7 9 1 4h12zM1 5.5l4 3-4 3v-6zM2 12l3.5-3L7 10.5 8.5 9l3.5 3H2zm11-.5l-4-3 4-3v6z" />
                                </svg>
                                <span class="descripcionUsuario"><a href="#">{{$user->email }}</a></span>
                                
                            </div>
                        @endif
                        <div>
                            <svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16"
                                aria-hidden="true">
                                <path fill-rule="evenodd" fill="#343A40"
                                    d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z" />
                            </svg>
                            <span class="descripcionUsuario"><a href="#" >{{$perfil->paginaWeb}}</a></span>
                        </div>
                        <hr>
                        


                    </div>
                    
                    <div class="pt-2" id="datosParaLlenar" style="display: none">
                        {!! Form::open(['action' => ['PerfilController@update',$perfil->uid],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
                        <div class="custom-file" id="fileEdit" style="display:none;">
                            {{Form::file('imagen',['class'=>'custom-file-input','id'=>'customFile'])}}
                            <label class="custom-file-label form-control form-control-sm" for="customFile">Nueva Foto</label>
                          </div>
                        <div>
                                {{Form::text('biografia',$perfil->biografia,['class'=>'col-11 form-control form-control-sm','placeholder'=>'nueva biografia'])}}
                            

                        </div>
                        <div class="row my-1">
                            <svg viewBox="0 0 16 16"  width="16" height="16" aria-hidden="true" class="col-1 noPadding mt-2">
                                <path fill="#343A40" fill-rule="evenodd"
                                    d="M16 12.999c0 .439-.45 1-1 1H7.995c-.539 0-.994-.447-.995-.999H1c-.54 0-1-.561-1-1 0-2.634 3-4 3-4s.229-.409 0-1c-.841-.621-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.442.58 2.5 3c.058 2.41-.159 2.379-1 3-.229.59 0 1 0 1s1.549.711 2.42 2.088C9.196 9.369 10 8.999 10 8.999s.229-.409 0-1c-.841-.62-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.437.581 2.495 3c.059 2.41-.158 2.38-1 3-.229.59 0 1 0 1s3.005 1.366 3.005 4z" />
                            </svg>
                            {{Form::text('company',$perfil->company,['class'=>'col-11 form-control form-control-sm','placeholder'=>'nueva ocupacion'])}}
                        </div>
                        <div class="row my-1">
                            <svg  viewBox="0 0 12 16"  width="12 " class="col-1 noPadding mt-2"
                                height="16" aria-hidden="true">
                                <path fill-rule="evenodd" fill="#343A40"
                                    d="M6 0C2.69 0 0 2.5 0 5.5 0 10.02 6 16 6 16s6-5.98 6-10.5C12 2.5 9.31 0 6 0zm0 14.55C4.14 12.52 1 8.44 1 5.5 1 3.02 3.25 1 6 1c1.34 0 2.61.48 3.56 1.36.92.86 1.44 1.97 1.44 3.14 0 2.94-3.14 7.02-5 9.05zM8 5.5c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z" />
                            </svg>
                            {{Form::text('ubicacion',$perfil->ubicacion,['class'=>'col-11 form-control form-control-sm','placeholder'=>'nueva ubicacion'])}}
                        </div>
                        <div class="row my-1">
                            <svg  class="col-1 noPadding mt-2" viewBox="0 0 16 16"  width="16" height="16"
                                aria-hidden="true">
                                <path fill-rule="evenodd" fill="#343A40"
                                    d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z" />
                            </svg>
                            {{Form::text('paginaWeb',$perfil->paginaWeb,['class'=>'col-11 form-control form-control-sm','placeholder'=>'nueva paginaWeb'])}}
                        </div>
                        <div class="row my-1">
                                <div class="col-1 noPadding"></div>
                                {{Form::hidden('_method','PUT')}}
                                {{Form::submit('Guardar',['class'=>'col-auto btn  btn-success btn-sm'])}}
                                <button onclick="cancelarEdicion()" type="button" class="col-auto btn mx-2 btn-secondary btn-sm">Cancelar</button>
                        </div>
                        <hr>
                        
                         {!! Form::close() !!}


                    </div>
                
                </div>

            </div>
            <div class="col-lg-9 ">
                    
                    <div>   
                            
                           
                    </div>
                    
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" id="bl-tab" data-toggle="tab" href="#bl" role="tab"
                            aria-controls="bl" aria-selected="true">
                            Blogs
                    <span class="badge badge-secondary">{{$contadorPosts}}</span>
                        </a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="repo-tab" data-toggle="tab" href="#repo" role="tab"
                            aria-controls="repo" aria-selected="false">
                            Repositorios
                            <span class="badge badge-secondary">10</span>
                        </a>
                    </li>
                    -->
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="seg-tab" data-toggle="tab" href="#seg" role="tab"
                            aria-controls="seg" aria-selected="false">
                            Seguidores
                            <span class="badge badge-secondary">{{$contadorSeguidores}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="sega-tab" data-toggle="tab" href="#sega" role="tab"
                            aria-controls="sega" aria-selected="false">
                            Sigue a
                    <span class="badge badge-secondary">{{$contadorSeguidos}}</span>
                        </a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="stars-tab" data-toggle="tab" href="#stars" role="tab"
                            aria-controls="stars" aria-selected="false">
                            Estrellas
                            <span class="badge badge-secondary">12k</span>
                        </a>
                    </li>
                -->
                </ul>
                <div class="tab-content pt-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="bl" role="tabpanel" aria-labelledby="bl-tab">
                            @if(!Auth::guest())
                            @if(Auth::user()->id == $user->id)
                        <div class="row ">
                            <div class="col-sm mt-3 mb-2">
                                <!--
                                <input type="text" placeholder="Encuentra un Blog..." class="form-control px-2"
                                    aria-label="Text input with dropdown button">
                                -->
                            </div>
                            
                            <div class="col-sm-auto mt-3 mb-2">
                                <a href="{{ url('/posts/create') }}">
                                    <button type="button" class="btn btn-success">

                                            <svg class="octicon octicon-repo" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true">
                                                <path fill="white " fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z">
                                                </path>
                                            </svg>
                                             Crear Nuevo Blog
        
                                        </button>
                                    </a>
                            </div>
                            
                        </div>
                        @endif
                        @endif
                        <div>
                            @if(count($posts)>0)
                                @foreach ($posts as $post)
                                <div class="container my-2 border ">
                                        <div class="row">
                                          <div class="col-md noPadding">
                                                <a class="cover" href="{{ url('/posts',$post->id) }}" style="background-image: url(/lproc/public/storage/PostsCovers/{{$post->imagen}});;text-decoration: none">
                                                    <div class="overlay">
                                                        <h4 class="Bltitulo">
                                                                {{$post->titulo}} 
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
                            <h2 class="mb-5 pb-5">No tiene ningun blog publicado</h2>
                            </div>
                            </div>
                            @endif
                                
                               
                        </div>
                        <div class="container pt-4 pb-4" align="center">
                                {{ $posts->links() }}
                            
                        </div>
                    </div>
                    <!--
                    <div class="tab-pane fade" id="repo" role="tabpanel" aria-labelledby="repo-tab">

                        <div class="row ">
                            <div class="col-sm mt-3 mb-2">
                                <input type="text" placeholder="Encuentra un Repositorio..." class="form-control px-2"
                                    aria-label="Text input with dropdown button">
                            </div>
                            <div class="col-sm-auto mt-3 mb-2">
                                <div class="dropdown px-2" style="display: inline-block">
                                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tipo: <b>Todos</b>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <h6 class="dropdown-header">Selecciona el Tipo</h6>
                                        <a class="dropdown-item active" href="#">Todos</a>
                                        <a class="dropdown-item" href="#">Fuentes</a>
                                        <a class="dropdown-item" href="#">Forks</a>
                                        <a class="dropdown-item" href="#">Archivados</a>
                                        <a class="dropdown-item" href="#">Mirrors</a>
                                    </div>
                                </div>
                                <div class="dropdown pr-2" style="display: inline-block">
                                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Lenguaje: <b>Todos</b>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <h6 class="dropdown-header">Selecciona el Lenguaje</h6>
                                        <a class="dropdown-item active" href="#">Todos</a>
                                        <a class="dropdown-item" href="#">Python</a>
                                        <a class="dropdown-item" href="#">HTML</a>
                                        <a class="dropdown-item" href="#">C++</a>
                                        <a class="dropdown-item" href="#">C</a>
                                        <a class="dropdown-item" href="#">JavaScript</a>
                                        <a class="dropdown-item" href="#">CSS</a>
                                        <a class="dropdown-item" href="#">Java</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success">

                                        <svg class="octicon octicon-repo" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true">
                                            <path fill="white " fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z">
                                            </path>
                                        </svg>
                                        Nuevo
    
                                    </button>
                            </div>
                        </div>
                        <div>
                            
                            <div class="row py-4 mb-3 border-bottom">
                                <div class="col-sm">
                                    <div class="listProyectName mb-1">
                                        <a href="modeloProyecto.html">
                                            NombreProyecto
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
                                                <svg class="svgC" aria-label="star" class="listSvgAling"
                                                    viewBox="0 0 14 16" version="1.1" width="14" height="16" role="img">
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
                        

                        </div>
                        <div class="container pt-4 pb-4" align="center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary disabled">Anterior</button>
                                <button type="button" class="btn btn-secondary">Siguiente</button>
                            </div>
                        </div>
                    </div>
                -->
                    <div class="tab-pane fade " id="seg" role="tabpanel" aria-labelledby="seg-tab">
                        @if(count($seguidores)>0)
                            @foreach ($seguidores as $seguidor)
                            <div class="row py-4 border-bottom">
                                    <div class="col-2">
                                        <img class="rounded" width="100%" src="{{url('storage/PerfilesImg/'.$seguidor->perfil->imagen)}}" alt="">
                                    </div>
                                    <div class="col">
                                        <a href="{{ url('/users',$seguidor->id) }}" class="a-custom">
                                            <span class="listUsersName">
                                                {{$seguidor->name}}
                                            </span>
                                            <span class="listUsersNick pl-1">
                                                    {{$seguidor->nick}}
                                            </span>
                                        </a>
                                        <div class="listUsersDesc pt-1">
                                                {{$seguidor->perfil->biografia}}
                                        </div>
                                        <div class="listUsersDesc pt-1 row pl-3">
                                            <span class="mr-3 col-sm noPadding">
                                                <svg fill="#343A40" class="octicon octicon-organization" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16 12.999c0 .439-.45 1-1 1H7.995c-.539 0-.994-.447-.995-.999H1c-.54 0-1-.561-1-1 0-2.634 3-4 3-4s.229-.409 0-1c-.841-.621-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.442.58 2.5 3c.058 2.41-.159 2.379-1 3-.229.59 0 1 0 1s1.549.711 2.42 2.088C9.196 9.369 10 8.999 10 8.999s.229-.409 0-1c-.841-.62-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.437.581 2.495 3c.059 2.41-.158 2.38-1 3-.229.59 0 1 0 1s3.005 1.366 3.005 4z"></path>
                                                </svg>
                                                {{$seguidor->perfil->company}}
                                            </span>
                                            <span class="col-sm noPadding">
                                                    <svg fill="#343A40" class="octicon octicon-location" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M6 0C2.69 0 0 2.5 0 5.5 0 10.02 6 16 6 16s6-5.98 6-10.5C12 2.5 9.31 0 6 0zm0 14.55C4.14 12.52 1 8.44 1 5.5 1 3.02 3.25 1 6 1c1.34 0 2.61.48 3.56 1.36.92.86 1.44 1.97 1.44 3.14 0 2.94-3.14 7.02-5 9.05zM8 5.5c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"></path>
                                                        </svg> {{$seguidor->perfil->ubicacion}}
                                            </span>
                                            
                                        </div>
                                    </div>
                                    <div class="col-auto " align="center">
                                            @if(Auth::guest())
                                            <a href="{{ route('register')}}">
                                            <button type="button" class="btn btn-light border btn-sm  ">
                                                <b>Seguir</b></button>
                                            </a>
                                        @else

                                            @if(Auth::user()->id != $seguidor->id)


                                                @if(DB::table('follows')->where([
                                                ['seguidor',Auth::user()->id],
                                                ['seguido',$seguidor->id]
                                                ])->exists())
                                                    {!! Form::open(['action' => 'FollowsController@delete','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                                                    {{Form::hidden('seguidor',Auth::user()->id)}}
                                                    {{Form::hidden('seguido',$seguidor->id)}}
                                                    {{Form::submit('No Seguir',['class'=>'btn btn-light border btn-sm font-weight-bold'])}}
            
                                                    {!! Form::close() !!}


                                                @else
                                                    {!! Form::open(['action' => 'FollowsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                                                    {{Form::hidden('seguidor',Auth::user()->id)}}
                                                    {{Form::hidden('seguido',$seguidor->id)}}
                                                    {{Form::submit('Seguir',['class'=>'btn btn-light border btn-sm font-weight-bold'])}}
            
                                                    {!! Form::close() !!}

                                                @endif
                                            @endif
                                        @endif
        
                                    </div>
                                </div>
                            @endforeach
                            <div class="container pt-4 pb-4" align="center">
                                    {{ $seguidores->links() }}
                                
                            </div>

                        @else
                            <div class="my-5 py-5">
                                <div class="mb-5 pb-5">
                                    <h2 class="mb-5 pb-5">No tiene ningun seguidor</h2>
                                </div>
                            </div>
                        @endif


                    </div>
                    <div class="tab-pane fade" id="sega" role="tabpanel" aria-labelledby="sega-tab">
                            @if(count($seguidos)>0)
                            @foreach ($seguidos as $seguido)
                            <div class="row py-4 border-bottom">
                                    <div class="col-2">
                                        <img class="rounded" width="100%" src="{{url('storage/PerfilesImg/'.$seguido->perfil->imagen)}}" alt="">
                                    </div>
                                    <div class="col">
                                        <a href="{{ url('/users',$seguido->id) }}" class="a-custom">
                                            <span class="listUsersName">
                                                {{$seguido->name}}
                                            </span>
                                            <span class="listUsersNick pl-1">
                                                    {{$seguido->nick}}
                                            </span>
                                        </a>
                                        <div class="listUsersDesc pt-1">
                                                {{$seguido->perfil->biografia}}
                                        </div>
                                        <div class="listUsersDesc pt-1 row pl-3">
                                            <span class="mr-3 col-sm noPadding">
                                                <svg fill="#343A40" class="octicon octicon-organization" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16 12.999c0 .439-.45 1-1 1H7.995c-.539 0-.994-.447-.995-.999H1c-.54 0-1-.561-1-1 0-2.634 3-4 3-4s.229-.409 0-1c-.841-.621-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.442.58 2.5 3c.058 2.41-.159 2.379-1 3-.229.59 0 1 0 1s1.549.711 2.42 2.088C9.196 9.369 10 8.999 10 8.999s.229-.409 0-1c-.841-.62-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.437.581 2.495 3c.059 2.41-.158 2.38-1 3-.229.59 0 1 0 1s3.005 1.366 3.005 4z"></path>
                                                </svg>
                                                {{$seguido->perfil->company}}
                                            </span>
                                            <span class="col-sm noPadding">
                                                    <svg fill="#343A40" class="octicon octicon-location" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M6 0C2.69 0 0 2.5 0 5.5 0 10.02 6 16 6 16s6-5.98 6-10.5C12 2.5 9.31 0 6 0zm0 14.55C4.14 12.52 1 8.44 1 5.5 1 3.02 3.25 1 6 1c1.34 0 2.61.48 3.56 1.36.92.86 1.44 1.97 1.44 3.14 0 2.94-3.14 7.02-5 9.05zM8 5.5c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"></path>
                                                        </svg> {{$seguido->perfil->ubicacion}}
                                            </span>
                                            
                                        </div>
                                    </div>
                                    <div class="col-auto " align="center">
                                        @if(Auth::guest())
                                            <a href="{{ route('register')}}">
                                            <button type="button" class="btn btn-light border btn-sm  ">
                                                <b>Seguir</b></button>
                                            </a>
                                        @else

                                            @if(Auth::user()->id != $seguido->id)


                                                @if(DB::table('follows')->where([
                                                ['seguidor',Auth::user()->id],
                                                ['seguido',$seguido->id]
                                                ])->exists())
                                                    {!! Form::open(['action' => 'FollowsController@delete','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                                                    {{Form::hidden('seguidor',Auth::user()->id)}}
                                                    {{Form::hidden('seguido',$seguido->id)}}
                                                    {{Form::submit('No Seguir',['class'=>'btn btn-light border btn-sm font-weight-bold'])}}
            
                                                    {!! Form::close() !!}


                                                @else
                                                    {!! Form::open(['action' => 'FollowsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                                                    {{Form::hidden('seguidor',Auth::user()->id)}}
                                                    {{Form::hidden('seguido',$seguido->id)}}
                                                    {{Form::submit('Seguir',['class'=>'btn btn-light border btn-sm font-weight-bold'])}}
            
                                                    {!! Form::close() !!}

                                                @endif
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                            <div class="container pt-4 pb-4" align="center">
                                    {{ $seguidos->links() }}
                                
                            </div>

                        @else
                            <div class="my-5 py-5">
                                <div class="mb-5 pb-5">
                                    <h2 class="mb-5 pb-5">No sigue a ningun usuario</h2>
                                </div>
                            </div>
                        @endif
                    </div>
                    <!--
                    <div class="tab-pane fade " id="stars" role="tabpanel" aria-labelledby="stars-tab">
                        <div class="row ">
                            <div class="col-sm-7 mt-3 mb-2">
                                <input type="text" placeholder="Encuentra un Repositorio..." class="form-control px-2 "
                                    aria-label="Text input with dropdown button">
                            </div>
                            <div class="col-sm-auto mt-3 mb-2">
                                <div class="dropdown px-2 " style="display: inline-block">
                                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tipo: <b>Todos</b>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <h6 class="dropdown-header">Selecciona el Tipo</h6>
                                        <a class="dropdown-item active" href="#">Todos</a>
                                        <a class="dropdown-item" href="#">Fuentes</a>
                                        <a class="dropdown-item" href="#">Forks</a>
                                        <a class="dropdown-item" href="#">Archivados</a>
                                        <a class="dropdown-item" href="#">Mirrors</a>
                                    </div>
                                </div>
                                <div class="dropdown pr-2 " style="display: inline-block">
                                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Lenguaje: <b>Todos</b>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                        <h6 class="dropdown-header">Selecciona el Lenguaje</h6>
                                        <a class="dropdown-item active" href="#">Todos</a>
                                        <a class="dropdown-item" href="#">Python</a>
                                        <a class="dropdown-item" href="#">HTML</a>
                                        <a class="dropdown-item" href="#">C++</a>
                                        <a class="dropdown-item" href="#">C</a>
                                        <a class="dropdown-item" href="#">JavaScript</a>
                                        <a class="dropdown-item" href="#">CSS</a>
                                        <a class="dropdown-item" href="#">Java</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom py-4">
                            <div class="listProyectName mb-1">
                                <a href="">
                                    <span class="text-normal">nombreUsuario /</span>
                                    NombreProyecto
                                </a>
                            </div>
                            <div class="py-1">
                                <p class="listProyectDescription col-9">
                                    Descripcion de lo que hace el proyecto.
                                </p>
                            </div>
                            <div class="f6 listProyectVarious mt-2">
                                <span class="ml-0 mr-3">
                                    <svg width="12" height="12" class="colorSvg">
                                        <circle cx="6" cy="6" r="6" fill="#00ADD8" />
                                    </svg>
                                    <span itemprop="programmingLanguage">Go</span>
                                </span>

                                <a class="muted-link mr-3" href="#">
                                    <svg class="svgC" aria-label="star" class="listSvgAling" viewBox="0 0 14 16"
                                        version="1.1" width="14" height="16" role="img">
                                        <path fill-rule="evenodd"
                                            d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74L14 6z">
                                        </path>
                                    </svg>
                                    427
                                </a>

                                <a class="muted-link mr-3" href="#">
                                    <svg class="svgC" aria-label="fork" class="octicon octicon-repo-forked"
                                        viewBox="0 0 10 16" version="1.1" width="10" height="16" role="img">
                                        <path fill-rule="evenodd"
                                            d="M8 1a1.993 1.993 0 0 0-1 3.72V6L5 8 3 6V4.72A1.993 1.993 0 0 0 2 1a1.993 1.993 0 0 0-1 3.72V6.5l3 3v1.78A1.993 1.993 0 0 0 5 15a1.993 1.993 0 0 0 1-3.72V9.5l3-3V4.72A1.993 1.993 0 0 0 8 1zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3 10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3-10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z">
                                        </path>
                                    </svg>
                                    143
                                </a>
                                <div>
                                    Actualizado "utilma fecha de actializacion del proyecto"
                                </div>

                            </div>
                        </div>

                        

                        <div class="container pt-4 pb-4" align="center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary disabled">Anterior</button>
                                <button type="button" class="btn btn-secondary">Siguiente</button>
                            </div>
                        </div>
                    </div>
                -->
                </div>
            </div>
        </div>
    </div>

@endsection
