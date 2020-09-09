@extends('layouts/app')

@section('content')
<div class=" container pt-4 mb-5 pb-5" align="center">
        <div class="mt-4" style="max-width: 650px;">
            <h1 style="font-weight: 200" class="mb-4">
                <span style="font-weight: bold">BlogUNT</span>
                se trata de compartir ideas
            </h1>

            <div style="color:#586069!important; font-size: 20px;font-weight: 400;max-width: 550px;">
                <span>Apoyamos a una comunidad donde más de {{DB::table('users')->count()}} de personas aprenden, comparten y trabajan juntas.</span>
            </div>

        </div>
        <div class="mt-5 pt-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm p-4 border">
                        <span style="font-weight: 500; font-size: 24px">
                            {{$fechaInicio}}
                        </span>
                        <br>
                        <span style="color:#586069!important;; font-size: 14px">
                            Primer Proyecto
                        </span>
                    </div>
                    <div class="col-sm p-4 border">
                        <span style="font-weight: 500; font-size: 24px">
                            {{$sede}}
                        </span>
                        <br>
                        <span style="color:#586069!important;; font-size: 14px">
                            Sede
                        </span>
                    </div>
                    <div class="col-sm p-4 border">
                        <span style="font-weight: 500; font-size: 24px">
                            {{$num}}
                        </span>
                        <br>
                        <span style="color:#586069!important;; font-size: 14px">
                                Blogs alojados
                        </span>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="mt-5 " style="max-width: 600px;color:#586069!important;">
            <p>
                    Estamos trabajando arduamente para crear un lugar de apoyo y acogedor para los usuarios y Desarrolladores por igual.
            </p>
        </div>
    </div>
@endsection