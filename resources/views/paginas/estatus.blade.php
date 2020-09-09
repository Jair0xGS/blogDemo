@extends('layouts/app')

@section('content')

<div class=" container pt-4 mb-5 pb-5" align="center">
        <div class="mt-4"  align="left" style="max-width: 950px; background-color: #28a745;color: #fff;padding: 0.75rem 1.25rem;">
                <span style="font-weight: 500;font-size: 1.25rem; ">Todos los Sistemas Operacionales</span>
        </div>
        <div style="max-width: 950px" align="left" class="pt-5 pb-3"> 
            <h2>Estado Actual</h2>
        </div>
        <ul class="list-group" style="max-width: 950px">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Operaciones Git
                  <span class="badge badge-success badge-pill">Operacional</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Asuntos y Proyectos
                  <span class="badge badge-success badge-pill">Operacional</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Notificaciones
                  <span class="badge badge-success badge-pill">Operacional</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Paginas
                  <span class="badge badge-success badge-pill">Operacional</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Procesos en segundo plano
                  <span class="badge badge-success badge-pill">Operacional</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Registro
                  <span class="badge badge-success badge-pill">Operacional</span>
                </li>
              </ul>
    </div>

@endsection