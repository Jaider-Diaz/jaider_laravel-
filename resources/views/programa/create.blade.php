@extends('layouts2.app')

@section('tituloso','Todos los Programas')

@section('content')

<br>
    <form action="/programas" method="post">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>

        <div class="mb-3">
            <label for="sistemaop" class="form-label">Sistema Operativo</label>
            <input type="text" class="form-control" id="sistemaop" name="sistemaop">
        </div>

        <div class="mb-3">
            <label for="version" class="form-label">Version</label>
            <input type="text" class="form-control" id="version" name="version">
        </div>

        <button type="submit" class="btn btn-dark">Guardar</button>
    </form>


@endsection
