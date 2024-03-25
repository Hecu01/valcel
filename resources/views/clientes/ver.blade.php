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

