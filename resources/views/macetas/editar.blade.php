@extends('layouts.app')
@section('seccion-principal')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1>
        Maceta {{ $maceta->nombre }}
    </h1>
    <form class="row g-3 p-3" action="{{ route('macetas.update', $maceta->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-3">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $maceta->nombre }}">
            </div>
            <div class="col-3">
                <label for="">Precio</label>
                <input type="text" name="precio" class="form-control" value="{{ $maceta->precio }}">
            </div>
            <div class="col-3">
                <label for="">Peso (KG)</label>
                <input type="text" name="peso" class="form-control" value="{{ $maceta->peso }}">
            </div> 
            <div class="col-3">
                <label for="">Base</label>
                <input type="text"name="base" class="form-control" value="{{ $maceta->base }}">
            </div>
            <div class="col-3">
                <label for="">Altura</label>
                <input type="text" name="altura" class="form-control" value="{{ $maceta->altura }}">
            </div>
            <div class="col-2">
                <label for="">Boca</label>
                <input type="text" name="boca" class="form-control" value="{{ $maceta->boca }}">
            </div>
            <div class="col-2">
                <label for="">Stock</label>
                <input type="text" name="stock" class="form-control" value="{{ $maceta->stock }}">
            </div>
        </div>
        <div class="my-2">
            <button class="btn btn-success" type="submit">Actualizar</button>
        </div>
    </form>
    <div class="">
        <h3>Base de datos</h3>
        <ul>
            <li><strong>Id</strong>: {{ $maceta->id }}</li>
            <li><strong>Nombre</strong>: {{ $maceta->nombre }}</li>
            <li><strong>Precio</strong>: $ {{ number_format($maceta->precio, 0, ',', '.') }}</li>
            <li><strong>Peso</strong>: {{ number_format($maceta->peso,0,',','.') }} KG</li>
            <li><strong>Altura</strong>: {{ $maceta->altura }} cm</li>
            <li><strong>Boca</strong>: {{ $maceta->boca }} cm</li>
            <li><strong>Stock</strong>: {{ $maceta->stock }} u</li>
        </ul>
    </div>
@endsection

