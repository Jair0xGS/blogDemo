@extends('layouts/app')

@section('content')
<div style="background: #343A40;">
        <div class="container pb-2">
                @include('inc.mensajes')
                
            </div>
</div>

<div>
        <div class="pt-2" style="background: #343A40;height: 990px;">
                <img class="cajas cl" src="img/hero-bg-left.svg">
                <img class="cajas cr" src="img/hero-bg-right.svg">
                <div style="width: 100%;padding-top: 80px" align="center">
                    <h1 style="font-size: 62px;font-weight: 500;color: white; margin-bottom:30px">Bienvenido a BlogUNT</h1>
                    <p style="font-size: 32px;font-weight: 300;color :white; width: 70%;">
                        BlogUNT es una herramienta orientada para desarrolladores dentro de la Universidad Nacional de Trujillo
                        para almacenar y compartir ideas.
                    </p>
                    <a href="{{ url('/about') }}">
                    
                        <button class="btn btn-light mt-4 mb-3" style="padding: 8px 20px 9px;font-size: 18px;">Saber Mas →</button>
                    </a>
                </div>
        
            </div>
        
        
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div align="center" class="col-12 ">
                        <hr>
                        <h1>Lo mas nuevo de nuestro Blog</h1>
                        <hr>
                    </div>
                    @if (count($posts)>0)
                            @foreach ($posts as $post)
                    <div class="col-lg-4 ">      
                        
                            <div class="card mb-4">
                                <a class="cover" href="{{ url('/posts',$post->id) }}"
                                    style="background-image: url({{url('storage/PostsCovers/'.$post->imagen)}});;text-decoration: none">
                                    <div class="overlay">
                                        <h4 class="Bltitulo">
                                                {{$post->titulo}} 
                                        </h4>
                                    </div>
                                </a>
                                <div class="card-body">
            
                                    <p class="card-text">{{$post->descripcion}} </p>
            
                                    <a href="{{ url('/posts',$post->id) }}" class="btn btn-outline-dark"><b>Leer Mas →</b></a>
                                </div>
            
                            </div>
                        
                        
                            
                    </div>
                    @endforeach
                    @endif
        
                    
                </div>
        
            </div>
            <!-- /container -->
        
            <div class="container">
                <div>
                    <div align="center" style="width: 100%">
                        <hr>
                        <h1>Trabaja en grupo</h1>
                        <hr>
                    </div>
                    <div class="full" style="width: 50%;display: inline-block;vertical-align: top;padding-top: 30px;">
                        <img alt="" src="img/rob.svg">
                    </div>
                    <div class="full" style="width: 47%;display: inline-block; padding-top: 30px">
                        <div style="width: 100%">
                            <h2>Escribe mejor codigo</h2>
                            <p>La colaboración hace la perfección. Las conversaciones y las revisiones de código que ocurren en
                                las solicitudes de extracción ayudan a su equipo a compartir el peso de su trabajo y mejorar el
                                software que crea.</p>
                        </div>
        
                        <div style="width: 100%">
                            <h2>Maneja tu caos</h2>
                            <p>
                                Tomar una respiración profunda. En BlogUNT, la gestión de proyectos ocurre en problemas y paneles
                                de proyectos, junto con su código. Todo lo que tienes que hacer es mencionar a un compañero de
                                equipo para involucrarlo.</p>
                        </div>
                        <div style="width: 100%">
                            <h2>Encuentra herramientas </h2>
                            <p>Explore aplicaciones en BlogUNT con su cuenta de BlogUNT. Encuentre las herramientas que le gustan
                                o descubra nuevos favoritos, luego comience a usarlas en minutos.</p>
                        </div>
                    </div>
        
                </div>
            </div>
            <hr>
</div>
@endsection