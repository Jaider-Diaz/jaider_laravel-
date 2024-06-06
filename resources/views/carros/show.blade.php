@extends('layouts1.app')

@section('titulo', 'Actualizaciones')

@section('contenido')

    <div class="card text-center">
        <img src="{{Storage::url($carros->imagen)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Actualizar Datos</h5>
            <br>
            <p class="card-text"><strong> Cuidad:</strong> {{$carros->recidencia}}</>
            <p class="card-text"><strong> Marca:</strong> {{$carros->marca}}</p>
            <p class="card-text"><strong> Modelo:</strong> {{$carros->modelo}}</p>
            <p class="card-text"><strong> Precio:</strong> {{$carros->precio}}</p>
            <p class="card-text"><strong> Descripcion:</strong> {{$carros->descripcion}}</p>
            <a href="/carros/{{$carros->id}}/edit" class="btn btn-primary">Editar Carro</a>
        </div>
    </div>

@endsection
