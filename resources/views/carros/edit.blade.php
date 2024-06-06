@extends('layouts1.app')

@section('titulo', 'Editar')

@section('contenido')
<br>
<h3>Actualizar Informacion</h3>
<br>
<form action="/carros/{{$carros->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <div class="mb-3">
        <label for="imagen" class="form-label"></label>
        <input type="file" class="form-control" id="imagen" name="imagen">
    </div>

    <div class="mb-3">
        <label for="recidencia" class="form-label">Recidencia</label>
        <input type="text" class="form-control" id="recidencia" value="{{$carros->recidencia}} " name="recidencia">
    </div>

    <div class="mb-3">
        <label for="marca" class="form-label">Marca</label>
        <input type="text" class="form-control" id="marca" value="{{$carros->marca}} " name="marca">
    </div>

    <div class="mb-3">
        <label for="modelo" class="form-label">Modelo</label>
        <input type="text" class="form-control" id="modelo" value="{{$carros->modelo}} " name="modelo">
    </div>

    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" class="form-control" id="precio" value="{{$carros->precio}} " name="precio">
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" value="{{$carros->descripcion}} " name="descripcion">
    </div>
    <button type="text" class="btn btn-primary">Guardar</button>
</form>
@endsection
