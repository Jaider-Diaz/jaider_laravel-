@extends('layouts1.app')

@section('titulo', 'Mis Autos')

@section('contenido')
<br>
<h2 class="text-center">Mi coleccion de autos</h2>
<br>
<div class="row">
    @foreach ($course as $coleccion)

    <div class="col-sm">
        <br>
        <div class="card" style="width: 18rem;">
            <img src="{{Storage::url($coleccion->imagen)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><strong> Cuidad:</strong></strong> {{$coleccion->recidencia}}</h5>
                <p class="card-text"><strong> Marca:</strong> {{$coleccion->marca}}</p>
                <p class="card-text"><strong> Modelo:</strong> {{$coleccion->modelo}}</p>
                <p class="card-text"><strong> Precio:</strong> {{$coleccion->precio}}</p>
                <p class="card-text"><strong> Descripcion:</strong> {{$coleccion->descripcion}}</p>
                <a href="/carros/{{$coleccion->id}}" class="btn btn-primary">Mas Informacion</a>
            </div>
            </div>

    </div>

    @endforeach

</div>
@endsection




