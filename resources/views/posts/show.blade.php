@extends('layouts.app')
@section('content')






<div class="blogHeader">

    <div class="mainCover" style="background-image: url({{url('storage/PostsCovers/'.$post->imagen)}});">
        <div class="container mt-5 text-white">
            <div class="mt-5">
                <span class="mt-5">
                    <b class="bordecito">{{$post->created_at}}</b>

                </span>
                <span class="bordecito">-</span>
                <span>
                    <a class="bordecito" href="{{ url('/users',$post->user->id) }}">{{$post->user->name}}</a>
                </span>
            </div>
            <h1 class="bordecito">{{$post->titulo}}</h1>
            <p class="bordecito">
                {{$post->descripcion}}
            </p>
        </div>


    </div>
    <div class="container">
        <div class="row mt-5 mb-4 ">
            <a class="pl-3 col " href="{{ url()->previous() }}"> ← Volver </a>
            @if(!Auth::guest())
            @if(Auth::user()->id==$post->user_id)
            <div class="col-auto">
                <a href="{{ url('/posts/'.$post->id.'/edit') }}" class="btn btn-info">Editar</a>

            </div>
            <div class="col-auto">
                {!!Form::open(['action'=>['PostController@destroy',$post->id],'method'=>
                'POST','class'=>'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Borrar',['class'=>'btn btn-danger'])}}

                {!!Form::close()!!}
            </div>
            @endif
            @endif
        </div>

        {!!$post->cuerpo!!}
    </div>
</div>
</div>


@endsection
