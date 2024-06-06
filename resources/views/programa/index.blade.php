@extends('layouts2.app')

@section('tituloso', 'Todos los programas')

@section('content')

<br>
<h2 class="text-center">Tipos de Programas y Lenguajes en la Programacion</h2>
<br>
<div class="row">
    @foreach ($course as $programacion)

    <div class="col-sm">
        <br>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><strong> Nombre:</strong></strong> {{$programacion->nombre}}</h5>
                <p class="card-text"><strong> Descripcion:</strong> {{$programacion->descripcion}}</p>
                <p class="card-text"><strong> Sistema Operativo:</strong> {{$programacion->sistemaop}}</p>
                <p class="card-text"><strong> Version:</strong> {{$programacion->version}}</p>

            </div>
            </div>
    </div>

    @endforeach

</div>
@endsection
