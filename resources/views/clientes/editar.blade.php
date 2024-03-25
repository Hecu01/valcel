@extends('layouts.app')
@section('seccion-principal')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1>
        Cliente {{ $cliente->nombre }}
    </h1>
    <form class="row g-3 p-3" action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-3">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $cliente->nombre }}">
            </div>
            <div class="col-3">
                <label for="">Apellido</label> 
                <input type="text" name="apellido" class="form-control" value="{{ $cliente->apellido }}">
            </div>
            <div class="col-3">
                <label for="">Dni</label>
                <input type="text" name="dni" class="form-control" value="{{ $cliente->dni }}">
            </div> 
            <div class="col-3">
                <label for="">telefono</label>
                <input type="text"name="base" class="form-control" value="{{ $cliente->telefono }}">
            </div>
            <div class="col-3">
                <label for="">Zona</label>
                <input type="text" name="altura" class="form-control" value="{{ $cliente->zona }}">
            </div>
        </div>
        <div class="my-2">
            <button class="btn btn-success" type="submit">Actualizar</button>
        </div>
    </form>
    <div class="">
        <h3>Base de datos</h3>
        <ul>
            <li><strong>Id</strong>: {{ $cliente->id }}</li> 
            <li><strong>Nombre</strong>: {{ $cliente->nombre }}</li>
            <li><strong>Apellido</strong>: {{ $cliente->apellido }}</li>
            <li><strong>DNI</strong>: {{ number_format($cliente->dni, 0, ',', '.') }}</li>
            <li><strong>Teléfono</strong>: {{ $cliente->telefono }}</li>
            <li><strong>Zona</strong>: {{ $cliente->zona }}</li>

        </ul>
    </div>
@endsection

