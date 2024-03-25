@extends('layouts.app')
@section('seccion-principal')
    <h1>INDEX CLIENTES</h1>
    <div class="">
        <form action="{{ route('clientes.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                <div class="row">

                    <div class="col-6">
                        <label for="Nombre">Nombre</label>
                        <input type="text"id="nombre" class="form-control" name="nombre">
                    </div>
                    <div class="col-6">
                        <label for="Apellido">Apellido</label>
                        <input type="text" id="Apellido" name="apellido" class="form-control">
                    </div>
                </div> 
                <div class="row my-2">

                    <div class="col-6">
                        <label for="dni">Dni</label>
                        <input type="text" id="dni" name="dni" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="telefono">Telefono</label>
                        <input type="text" id="telefono" name="telefono" class="form-control">
                    </div>
                </div>
                <div class="row">

                    <div class="col-6">
                        <label for="zona">Zona</label>
                        <input type="text" id="zona" name="zona" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary my-3">Cargar</button>
        </form>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Cliente</th>
            <th scope="col">DNI</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Zona</th>
            <th scope="col" class="text-center">Acciones</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>

                    <th> {{ $cliente->id }} </th>
                    <td> {{ $cliente->nombre }} {{ $cliente->apellido }}  </td>
                    <td> {{ number_format($cliente->dni, 0, ',', '.') }}  </td>
                    <td> {{ $cliente->telefono }}  </td>
                    <td > {{ $cliente->zona }}  </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a 
                                href="{{ route('clientes.edit', $cliente->id) }}"
                                class="btn btn-success btn-sm"
                                title="Editar">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm eliminar-btn mx-1" title="Eliminar"><i class="fa-solid fa-trash"></i></button>
                            </form>
                            <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-secondary btn-sm" title="Visualizar"><i class="fa-solid fa-eye"></i></a>
                        </div>

                    </td>
                </tr>
                    
            @endforeach


        </tbody>
    </table>
    {{ $clientes->links() }}

@endsection

