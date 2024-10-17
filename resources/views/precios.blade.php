@extends('layouts.app')
@section('seccion-principal')

    <h1>Precios actuales de las macetas.</h1>
    <div class=""style="">
        <article id="articulo"  style="border: 1px solid rgb(0,0,0,0.3);font-size: 0.83rem;">
            <div class="div-img-mac" style="width:100%; position: relative; ">
                <div class="" style="width:fit-content; position:absolute; opacity: 0.8; border-bottom: 1px solid #000 ">
                    <div class="py-1" style="padding-left: 4px;background: #fff; color:#000 ; border-right: 1px solid #000">
                        <p style="margin: 0; padding-right:5px;">Fecha actualización: 16/09/2024</p>
                    </div>
                    <div class="py-1" style="padding-left: 4px;background: #fff; color:#000; border-top: 1px solid #000; border-right: 1px solid #000">
                        <p style="margin: 0; padding-right:5px;font-size: .92em">Precios validos hasta: 01/10/2024</p>
                    </div>
                </div>
                <img src="{{asset('assets/img/macetas_2024.jpg')}}" alt="" style="width:100%;" draggable="false" >
            </div>
        
            <div class="contenido d-flex" style="position: relative; background: url(' {{ asset('assets/img/fondo.jpg')}} ') no-repeat center/cover">
                <div class="izquierda" style="width:65.5%">
                    <table class="" style="background: rgb(0,0,0,0.3);">
                        <thead style="color: white">
                            <td class="text-center">ID</td>
                            <td class="px-3">MEDIDAS (CM)</td>
                            <td style="width:120px; text-align:center">PRECIO</td>
                            {{-- <td>STOCK</td> --}}
                        </thead>
                        <tbody>
                            @foreach ($macetas as $maceta)
                                <tr style="color: white; font-size:1.1em">

                                    <td> #{{$maceta->id}} </td>                            
                                    <td> {{$maceta->base}}x{{$maceta->altura}}x{{$maceta->boca}} </td>                            
                                    <td class="precio">$ {{$maceta->precio}} </td>                            
                                    {{-- <td> {{$maceta->stock}} </td>                             --}}
                                </tr>
                                
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="derecha"  >
                    <p style="font-weight: bolder; text-align: center; font-size: 1.4em; margin-left: -10px; text-shadow: 1px 1px 1px #000">Información extra</p>
                    <ul style="margin-left: -40px; color: #fff; font-weight: semibold; text-shadow: 1px 1px 1px #000">
                        <li><strong>Precios ya mayoristas.</strong></li>
                        <li style="text-transform: capitalize"> <strong>whatsApp</strong>: 3364-036241.</li>
                        <li><strong>Direccion</strong>: Gutemberg 7 bis, <br> B° Yaguarón.</li>
                        
                    </ul>

                    <div class="" >

                        <img src="{{asset('assets/img/logo.jpg')}}" alt="" style="width:120px;border-radius:100%; margin-top:-9px; margin-left: 15px" draggable="false" >
                    </div>

                </div>
            </div>
        </article>
        <br>
    </div>
    <button class="btn btn-primary" id="download">Descargar Flyer</button>

    <script>
      document.getElementById("download").addEventListener("click", function() {
        html2canvas(document.getElementById("articulo")).then(function(canvas) {
          var link = document.createElement("a");
          link.download = "flyer.png";
          link.href = canvas.toDataURL("image/png");
          link.click();
        });
      });
    </script>
      
@endsection