@extends('layouts.app')
@section('seccion-principal')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1>INDEX VENTAS</h1>
    <form action="{{ route('ventas.store')}}" method="POST" id="FormArtDeport" enctype="multipart/form-data" class="row mb-10">
        <div class="col-3">

            <div >
                @csrf
                <div class="row">
                    <div class="col-12">
                        <label for="Nombre">Cliente</label>
                        <input type="text" class="form-control" name="cliente">
                        <div class="col-12 my-1 d-flex" style="justify-content: space-between">
                            <div class="col-7">

                                <label for="maceta">Maceta</label>
                                <select name="maceta" class="form-select" id="maceta">
                                    <option value="" hidden selected></option>
                                    @foreach ($macetas as $maceta)
                                        <option value=" {{$maceta->id}} " data-id="{{$maceta->id}}" data-precio="{{$maceta->precio}}">{{$maceta->nombre}}</option>
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
                                <input type="text" id="precio_unitario" name="precio_unitario" class="form-control"  aria-label="Last name" >

                            </div>
                            <div class="col-5 " >
                                <label for="">Ciudad</label> 
                                <input class="form-control" name="ciudad" type="text">
                            </div>
                            
                        </div> 
                        <div class="form-floating col-12 mt-3 mb-1">
                            <textarea class="form-control" placeholder="Leave a comment here" id="observacion" name="observacion"></textarea>
                            <label for="observacion">Observación</label>
                        </div>
                    </div>
                   
                </div>
                <div class="mt-2">
    
                    <button type="button" class="btn btn-primary" id="aniadir_a_la_cuenta">Añadir</button>
                </div>

            </div>
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
                <button type="submit" class="btn btn-success">Realizar venta</button>
            </div>
            <div class="d-flex" style="align-items: center; font-size: 2em;">

                TOTAL: $ <div style="font-weight:600; color:black"class="mx-1" id="total-a-pagar"></div>
                <input type="text" id="total-hidden" name="total" value="" hidden>
                {{-- Toda la venta en la línea 158 --}}
                <input type="text" name="ventasArray" id="ventasArrayInput" hidden>
            </div>
    
        </div>
    </div>


    <table class="table mt-10 container">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">cliente_id</th>
            <th scope="col">unidades</th>
            <th scope="col">total</th>
            <th scope="col">oberservacion</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($ventas as $venta)
                <tr>
                    <td>{{$venta->id}}</td>
                    <td>{{$venta->cliente_id}}</td>
                    <td>{{$venta->unidades}}</td>
                    <td>$ {{ number_format($venta->total, 0, ',', '.')}}</td>
                    <td>{{$venta->observacion}}</td>
                </tr>
                
            @endforeach


        </tbody>
    </table>
@endsection

