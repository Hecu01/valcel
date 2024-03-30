@extends('layouts.app')
@section('seccion-principal')

    <h1>Precios actuales de las macetas.</h1>
    <div class=""style="">
        <article id="articulo"  style="border: 1px solid rgb(0,0,0,0.3);font-size: 0.83rem;">
            <div class="div-img-mac" style="width:100%; position: relative; ">
                <img src="{{asset('assets/img/wsp.jpg')}} " alt="" style="width:200px; position:absolute;" draggable="false">
                <img src="{{asset('assets/img/macetas_2024.jpg')}}" alt="" style="width:100%;" draggable="false" >
            </div>
        
            <div class="contenido d-flex" style="position: relative; background: url(' {{ asset('assets/img/fondo.jpg')}} ') no-repeat center/cover">
                <div class="izquierda" style="width:65.5%">
                    <table class="" style="background: rgb(0,0,0,0.3);">
                        <thead style="color: white">
                            <td>ID</td>
                            <td class="px-1">MEDIDAS (CM)</td>
                            <td style="width:90px; text-align:center">PRECIO</td>
                            <td>STOCK</td>
                        </thead>
                        <tbody>
                            @foreach ($macetas as $maceta)
                                <tr style="color: white; font-size:1.1em">

                                    <td> {{$maceta->id}} </td>                            
                                    <td> {{$maceta->base}}x{{$maceta->altura}}x{{$maceta->boca}} </td>                            
                                    <td class="precio">$ {{$maceta->precio}} </td>                            
                                    <td> {{$maceta->stock}} </td>                            
                                </tr>
                                
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="derecha" >
                    <p style="font-weight: bolder; text-align: center; font-size: 1.4em;">Métodos de pago</p>
                    <div class="" style="background: white; height: 135px; width:150px; border-radius: none;">
                        <img draggable="false" src="{{ asset('assets/img/aceptamos_transf.jpg') }} " alt="" > 
                        <img draggable="false" src=" {{asset('assets/img/hac_env.jpg')}}" alt="" class="envios" style="border-top:1px solid #000; border-radius:0px;">
                        <span style="">SU CONSULTA NO MOLESTA!!!</span>
                    </div>
                </div>
            </div>
        </article>
    </div>
@endsection