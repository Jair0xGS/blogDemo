@extends('layouts.app')

@section('content')

<div class="container mt-4">
        <div class="row ">
            <div class="col-lg-3   mb-4">
                <div class="container">
                    <img class="rounded" src="https://avatars2.githubusercontent.com/u/1989373?s=460&v=4" width="100%"
                        alt="">
                    <div class="mt-2 ">
                        <span class="nombreUsuario">{{ Auth::user()->name }}</span>
                        <h5 class="nickUsuario">{{ Auth::user()->nick }}</h5>
                        <button class="btn btn-outline-dark" style="width: 100%">Editar Perfil</button>
                    </div>
                    <div class="pt-2">
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
                        <div>
                            <svg class="octicon octicon-mail" viewBox="0 0 14 16" version="1.1" width="14" height="16"
                                aria-hidden="true">
                                <path fill-rule="evenodd" fill="#343A40"
                                    d="M0 4v8c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H1c-.55 0-1 .45-1 1zm13 0L7 9 1 4h12zM1 5.5l4 3-4 3v-6zM2 12l3.5-3L7 10.5 8.5 9l3.5 3H2zm11-.5l-4-3 4-3v6z" />
                            </svg>
                            <span class="descripcionUsuario"><a href="#">{{Auth::user()->email }}</a></span>
                        </div>
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
                </div>

            </div>
            <div class="col-lg-9 ">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" id="bl-tab" data-toggle="tab" href="#bl" role="tab"
                            aria-controls="bl" aria-selected="true">
                            Blogs
                    <span class="badge badge-secondary">{{$cuenta}}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="repo-tab" data-toggle="tab" href="#repo" role="tab"
                            aria-controls="repo" aria-selected="false">
                            Repositorios
                            <span class="badge badge-secondary">10</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="seg-tab" data-toggle="tab" href="#seg" role="tab"
                            aria-controls="seg" aria-selected="false">
                            Seguidores
                            <span class="badge badge-secondary">1k</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="sega-tab" data-toggle="tab" href="#sega" role="tab"
                            aria-controls="sega" aria-selected="false">
                            Sigue a
                            <span class="badge badge-secondary">32</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="stars-tab" data-toggle="tab" href="#stars" role="tab"
                            aria-controls="stars" aria-selected="false">
                            Estrellas
                            <span class="badge badge-secondary">12k</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="bl" role="tabpanel" aria-labelledby="bl-tab">

                        <div class="row ">
                            <div class="col-sm mt-3 mb-2">
                                <input type="text" placeholder="Encuentra un Blog..." class="form-control px-2"
                                    aria-label="Text input with dropdown button">
                            </div>
                            <div class="col-sm-auto mt-3 mb-2">
                            <a href="{{ url('/posts/create') }}">
                                    <button type="button" class="btn btn-success">

                                            <svg class="octicon octicon-repo" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true">
                                                <path fill="white " fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z">
                                                </path>
                                            </svg>
                                            Nuevo
        
                                        </button>
                                    </a></div>
                        </div>
                        <div>
                            @if(count($posts)>0)
                                @foreach ($posts as $post)
                                <div class="container my-2 border ">
                                        <div class="row">
                                          <div class="col-md noPadding">
                                                <a class="cover" href="{{ url('/posts',$post->id) }}" style="background-image: url(storage/PostsCovers/{{$post->imagen}});;text-decoration: none">
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
                    
                    <div class="tab-pane fade " id="seg" role="tabpanel" aria-labelledby="seg-tab">
                        <!-- un usuario-->
                        <div class="row py-4 border-bottom">
                            <div class="col-2">
                                <img class="rounded" width="100%"
                                    src="https://avatars2.githubusercontent.com/u/1989373?s=460&v=4" alt="">
                            </div>
                            <div class="col">
                                <a href="usuario.html" class="a-custom">
                                    <span class="listUsersName">
                                        Nombre de Usuario
                                    </span>
                                    <span class="listUsersNick pl-1">
                                        nickname
                                    </span>
                                </a>
                                <div class="listUsersDesc pt-1">
                                    Descripcion sobre el perfil del usuario que es ingresada por el si desea.
                                </div>
                                <div class="listUsersDesc pt-1">
                                    <span class="mr-3">
                                        <svg fill="#343A40" class="octicon octicon-organization" viewBox="0 0 16 16"
                                            version="1.1" width="16" height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16 12.999c0 .439-.45 1-1 1H7.995c-.539 0-.994-.447-.995-.999H1c-.54 0-1-.561-1-1 0-2.634 3-4 3-4s.229-.409 0-1c-.841-.621-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.442.58 2.5 3c.058 2.41-.159 2.379-1 3-.229.59 0 1 0 1s1.549.711 2.42 2.088C9.196 9.369 10 8.999 10 8.999s.229-.409 0-1c-.841-.62-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.437.581 2.495 3c.059 2.41-.158 2.38-1 3-.229.59 0 1 0 1s3.005 1.366 3.005 4z" />
                                        </svg>
                                        Empresa
                                    </span>
                                    <svg fill="#343A40" class="octicon octicon-location" viewBox="0 0 12 16"
                                        version="1.1" width="12" height="16" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M6 0C2.69 0 0 2.5 0 5.5 0 10.02 6 16 6 16s6-5.98 6-10.5C12 2.5 9.31 0 6 0zm0 14.55C4.14 12.52 1 8.44 1 5.5 1 3.02 3.25 1 6 1c1.34 0 2.61.48 3.56 1.36.92.86 1.44 1.97 1.44 3.14 0 2.94-3.14 7.02-5 9.05zM8 5.5c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z" />
                                    </svg> Ubicacion
                                </div>
                            </div>
                            <div class="col-auto " align="center">
                                <a href="registrar.html">
                                    <button type="button" class="btn btn-light border btn-sm  ">
                                        <b>Seguir</b></button>
                                </a>

                            </div>
                        </div>
                        <!-- ------->

                        <div class="container pt-4 pb-4" align="center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary disabled">Anterior</button>
                                <button type="button" class="btn btn-secondary">Siguiente</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sega" role="tabpanel" aria-labelledby="sega-tab">
                        <!-- un usuario-->
                        <div class="row py-4 border-bottom">
                            <div class="col-2">
                                <img class="rounded" width="100%"
                                    src="https://avatars2.githubusercontent.com/u/1989373?s=460&v=4" alt="">
                            </div>
                            <div class="col">
                                <a href="usuario.html" class="a-custom">
                                    <span class="listUsersName">
                                        Nombre de Usuario
                                    </span>
                                    <span class="listUsersNick pl-1">
                                        nickname
                                    </span>
                                </a>
                                <div class="listUsersDesc pt-1">
                                    Descripcion sobre el perfil del usuario que es ingresada por el si desea.
                                </div>
                                <div class="listUsersDesc pt-1">
                                    <span class="mr-3">
                                        <svg fill="#343A40" class="octicon octicon-organization" viewBox="0 0 16 16"
                                            version="1.1" width="16" height="16" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16 12.999c0 .439-.45 1-1 1H7.995c-.539 0-.994-.447-.995-.999H1c-.54 0-1-.561-1-1 0-2.634 3-4 3-4s.229-.409 0-1c-.841-.621-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.442.58 2.5 3c.058 2.41-.159 2.379-1 3-.229.59 0 1 0 1s1.549.711 2.42 2.088C9.196 9.369 10 8.999 10 8.999s.229-.409 0-1c-.841-.62-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.437.581 2.495 3c.059 2.41-.158 2.38-1 3-.229.59 0 1 0 1s3.005 1.366 3.005 4z" />
                                        </svg>
                                        Empresa
                                    </span>
                                    <svg fill="#343A40" class="octicon octicon-location" viewBox="0 0 12 16"
                                        version="1.1" width="12" height="16" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M6 0C2.69 0 0 2.5 0 5.5 0 10.02 6 16 6 16s6-5.98 6-10.5C12 2.5 9.31 0 6 0zm0 14.55C4.14 12.52 1 8.44 1 5.5 1 3.02 3.25 1 6 1c1.34 0 2.61.48 3.56 1.36.92.86 1.44 1.97 1.44 3.14 0 2.94-3.14 7.02-5 9.05zM8 5.5c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z" />
                                    </svg> Ubicacion
                                </div>
                            </div>
                            <div class="col-auto " align="center">
                                <a href="registrar.html">
                                    <button type="button" class="btn btn-light border btn-sm  ">
                                        <b>Seguir</b></button>
                                </a>

                            </div>
                        </div>
                        <!--  -->
                        <div class="container pt-4 pb-4" align="center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary disabled">Anterior</button>
                                <button type="button" class="btn btn-secondary">Siguiente</button>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>

@endsection
