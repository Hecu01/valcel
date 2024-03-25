@extends('layouts.app')
@section('seccion-principal')

    @if (session('creado'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('creado') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('eliminado'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('eliminado') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1>INDEX MACETAS</h1>
    <div class="">
        <form action="{{ route('macetas.store')}}" method="POST" id="FormArtDeport" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-3">
                    <label for="nombre">Nombre de la maceta</label>
                    <input type="text"id="nombre" class="form-control" name="nombre" aria-label="First name">
                </div>
                <div class="col-3">
                    <label for="precio">Precio</label>
                    <input type="text" id="precio" name="precio" class="form-control"  aria-label="Last name">
                </div>
                <div class="col-2">
                    <label for="peso">Peso</label>
                    <input type="text" id="peso" name="peso" class="form-control"  aria-label="Last name">
                </div>
                <div class="col-2">
                    <label for="base">Base</label>
                    <input type="text" id="base" name="base" class="form-control"  aria-label="Last name">
                </div>
                <div class="col-2">
                    <label for="altura">Altura</label>
                    <input type="text" id="altura" name="altura" class="form-control"  aria-label="Last name">
                </div>
                <div class="col-2 my-2">
                    <label for="boca">Boca</label>
                    <input type="text" id="boca" name="boca" class="form-control"  aria-label="Last name">
                </div>
                <div class="col-2 my-2">
                    <label for="stock">Stock</label>
                    <input type="text" id="stock" name="stock" class="form-control"  aria-label="Last name">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cargar</button>
        </form>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Peso</th>
            <th scope="col">Medidas</th>
            <th scope="col">Stock</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($macetas as $maceta)
                <tr>
                    <th scope="row">{{ $maceta->id }}</th>
                    <td>{{ $maceta->nombre }}</td>
                    <td>$ {{ number_format($maceta->precio, 0, ',', '.') }}</td>
                    <td>{{ $maceta->peso }} kg</td>
                    <td>{{ $maceta->base }}x{{ $maceta->altura }}x{{ $maceta->boca }}</td>
                    <td>{{ $maceta->stock }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a 
                                href="{{ route('macetas.edit', $maceta->id) }}"
                                class="btn btn-success btn-sm"
                                title="Editar">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('macetas.destroy', $maceta->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm eliminar-btn mx-1" title="Eliminar"><i class="fa-solid fa-trash"></i></button>
                            </form>
                            <a href="{{ route('macetas.show', $maceta->id) }}" class="btn btn-secondary btn-sm" title="Visualizar"><i class="fa-solid fa-eye"></i></a>
                        </div>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection

