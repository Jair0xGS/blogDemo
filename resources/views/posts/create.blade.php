@extends('layouts.app')
@section('content')
<div class="blank-header subMenuBox">
        <img class="caja cl  subMenuSvg" src="{{asset('img/icons-pattern-left.svg ')}}">
        <img class="caja crz subMenuSvg" src="{{asset('img/icons-pattern-right.svg')}}">
        <div class="header-content">
            <h1>
                    Crear Post
            </h1>
        </div>
</div>
<div class="container my-2">
        @include('inc.mensajes')
        
    </div>
    <div class="container my-4">
            {!! Form::open(['action' => 'PostController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('titulo','Titulo',['class'=>'h3'])}}
                    {{Form::text('titulo','',['class'=>'form-control','placeholder'=>'titulo'])}}
                </div>
                <div class="form-group">
                        {{Form::label('descripcion','Descripcion',['class'=>'h3'])}}
                        {{Form::text('descripcion','',['class'=>'form-control','placeholder'=>'descripcion'])}}
                    </div>
                <div class="form-group">
                    {{Form::label('cuerpo','Cuerpo',['class'=>'h3'])}}
                    {{Form::textArea('cuerpo','',[ 'id'=>'article-ckeditor' ,'class'=>'form-control','placeholder'=>'Cuerpo'])}}
                </div>
                <div class="form-group">
                        {{Form::label('portada','Imagen de Portada',['class'=>'h3'])}}
                        <div class="custom-file">
                                {{Form::file('imagen',['class'=>'custom-file-input','id'=>'customFile'])}}
                                <label class="custom-file-label" for="customFile">Seleccionar Archivo</label>
                              </div>
                    
                </div>
                {{Form::submit('Enviar',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
    </div>
@endsection
