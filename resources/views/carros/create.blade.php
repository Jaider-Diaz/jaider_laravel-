@extends('layouts1.app')

@section('titulo', 'Mis Autos')

@section('contenido')
    <br>
    <h2>Autos </h2>
    <br>
    <form action="/carros" method="POST" enctype="multipart/form-data">
        @method ('PUT')
        @csrf

        <div class="mb-3">
            <label for="imagen" class="form-label"></label>
            <input type="file" class="form-control" id="imagen" name="imagen">
        </div>

        <div class="mb-3">
            <label for="recidencia" class="form-label">Recidencia</label>
            <input type="text" class="form-control" id="recidencia " name="recidencia">
        </div>

        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca">
        </div>

        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo">
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>
        <button type="text" class="btn btn-primary">Guardar</button>
    </form>


@endsection
