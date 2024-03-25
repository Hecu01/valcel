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
    <h1>INDEX VENTAS</h1>
    <div class="row mb-10">
        <div class="col-3">

            <form action="{{ route('macetas.store')}}" method="POST" id="FormArtDeport" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <label for="Nombre">Cliente</label>
                        <select name="cliente" class="form-select" id="">
                            <option value="default" hidden selected>Seleccionar cliente</option>
                            @foreach ($clientes as $cliente)
                                <option value=" {{$cliente->id}} "> {{$cliente->nombre}} {{$cliente->apellido}}</option>
                            @endforeach
                        </select>
                        <div class="col-12 my-1 d-flex" style="justify-content: space-between">
                            <div class="col-7">

                                <label for="maceta">Maceta</label>
                                <select name="maceta" class="form-select" id="maceta">
                                    <option value="" hidden selected></option>
                                    @foreach ($macetas as $maceta)
                                        <option value=" {{$maceta->id}} " data-id="{{$maceta->id}}" data-precio="{{$maceta->precio}}"> {{$maceta->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4">
                                    <label for="peso">Cantidad</label>
                                    <input type="text" id="unidades" name="unidades" class="form-control"  aria-label="Last name" value="1">
                            </div>
        
                        </div>
                        <div class="col-12 d-flex" style="justify-content: space-between">
                            {{-- ID ARTICULOS --}}
                            <input type="text" id="articulo_id" hidden>

                            <div class="col-6">
                                <label for="peso">Precio</label>
                                <input type="text" id="precio_unitario" name="precio_unitario" class="form-control"  aria-label="Last name" value="1">

                            </div>
                            <div class="col-5 " >
                                <label for="">Descuento</label> 
                                <input class="form-control  "  type="text">
                            </div>
                            
                        </div> 
                    </div>
                   
                </div>
                <div class="mt-2">
    
                    <button type="button" class="btn btn-primary" id="aniadir_a_la_cuenta">Añadir</button>
                </div>

            </form>
        </div>
        <div class="col-9">
            <table class="table tabla-ventas">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Maceta</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Unitario</th>
                        <th scope="col">Importe</th>
                        <th scope="col">Función</th>
                    </tr>
                </thead>
                <tbody>

        
                </tbody>
            </table>
        </div>
        <div class="my-4 pt-3 d-flex "style="border-top:1px solid grey; justify-content: space-between" >
            <div class="">
                <button type="button" class="btn btn-success">Realizar venta</button>
            </div>
            <div class="d-flex" style="align-items: center">

                <div class="" style="font-size: 2em; ">
                    TOTAL: $<span style="font-weight:600" id="total-a-pagar"></span>
                    <input type="text" id="total-hidden" name="total" value=""hidden>

                </div>
            </div>
    
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <table class="table mt-10">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Peso</th>
            <th scope="col">Medidas</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>


        </tbody>
    </table>
@endsection

