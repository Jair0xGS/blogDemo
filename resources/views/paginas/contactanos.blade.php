@extends('layouts/app')

@section('content')

<div class=" container" align="center">
        <div class="mt-4" style="max-width: 400px;">
            <div style="width: 100%" align="left" class="border-bottom pb-1 mb-4">
                <h4>Enviame un Email</h4>
            </div>
            <div style="width: 100%;margin-bottom: 20px" align="left">
                <label for="name" class="">Nombre</label>
                <input type="text" id="name" class=" form-control">
            </div>
            <div style="width: 100%;margin-bottom: 20px" align="left">
                <label for="email" class="">Direccion de Correo</label>
                <input type="email" id="email" class=" form-control" value="">
            </div>
            <div style="width: 100%;margin-bottom: 20px" align="left">
                <label for="subject" class="">Asunto</label>
                <input type="text" id="subject" class=" form-control" value="">
            </div>
            <div style="width: 100%;margin-bottom: 20px" align="left">
                <label for="reason" class="">Razon</label>
                <select id="reason" required="" class=" form-control">
                    <option class="">Solo para decir hola</option>
                    <option class="">Negocios</option>
                    <option class="">Software</option>
                    <option class="">Otros</option>
                </select>
            </div>
            <div style="width: 100%;margin-bottom: 20px" align="left">
                <label for="message" class="">Mensaje</label>
                <textarea id="message" rows="4" placeholder="..." required="" class=" form-control"></textarea>
            </div>
            <div class=" submitButton mb-5 ">
                <button type="submit" class=" btn btn-dark">Enviar >></button>
            </div>
        </div>
    </div>

@endsection