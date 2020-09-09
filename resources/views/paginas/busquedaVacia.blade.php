@extends('layouts/app')

@section('content')

<div class="container pb-5">
    <div class="container px-5 my-5"> 
        <div class="container px-5">
                <h2>
                        <svg  class= " "height="24" class="octicon octicon-search" viewBox="0 0 16 16" version="1.1" width="24" aria-hidden="true"><path fill-rule="evenodd" d="M15.7 13.3l-3.81-3.83A5.93 5.93 0 0013 6c0-3.31-2.69-6-6-6S1 2.69 1 6s2.69 6 6 6c1.3 0 2.48-.41 3.47-1.11l3.83 3.81c.19.2.45.3.7.3.25 0 .52-.09.7-.3a.996.996 0 000-1.41v.01zM7 10.7c-2.59 0-4.7-2.11-4.7-4.7 0-2.59 2.11-4.7 4.7-4.7 2.59 0 4.7 2.11 4.7 4.7 0 2.59-2.11 4.7-4.7 4.7z"></path></svg>
                    Busca mas de <span class="h1">{{DB::table('posts')->count()}}</span>  blogs 
                </h2>
        </div>
        <div class="container px-5 pb-5">
                {{ Form::open(array('url' => '/busqueda', 'method' => 'get')) }}
                <div class="row">
                        {{Form::text('query','',['class'=>'form-control col-sm','placeholder'=>'Blog a buscar'])}}
                        {{Form::submit('Buscar',['class'=>'btn btn-dark col-sm-2'])}}        
                        
                    </div>
                        {{ Form::close() }}
        </div>
        
        
    </div>
</div>  
@endsection
