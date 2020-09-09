@extends('layouts/app')

@section('content')

<div class=" container pt-4 mb-5 pb-5" align="center">
        <div class="mt-4" style="max-width: 550px;">
            <h1  style="font-weight: 200" class="mb-4"> CONOCE NUESTRO 
                <span style="font-weight: bold">EQUIPO</span>
            </h1>
            <div class="mb-4">
                <img  src="img/developer.PNG" alt="" style="border-radius: 50%" height="120px" width="120px">
            </div>
            <div>
            <h3>{{$nombreDesarrollador}}</h3>
                <div style="color: #959da5"> 

                    <h5>La Esperanza,Trujillo,Perú</h5>
                    <h5 class="mb-5 pb-5">CEO</h5>
                </div>
            </div>
        </div>
    </div>

@endsection