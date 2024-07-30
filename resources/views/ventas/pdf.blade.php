<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ public_path('assets/css/pdf.css')}}">
    <title>Documento PDF</title>
</head>
<body>
    <style>
        #nombre-empresa{
            font-family: 'consolas';
            position: absolute; 
            margin-top: -10px; 
            margin-left: 10px;
            font-size:2em; 
            font-weight: 600;
        }
        #no-valido{
            border: 1px solid #000; 
            padding: 2px 5px;
            font-size:2em;
            position: absolute;
            right: 160px;
            top: -40px;
        }
        .text-no-valido{
            position: absolute;
            width: 150px;
            right: 0px;
            top:-55px;
            font-size: 1.1em
        }
        .products tr th, .products tr td{
            font-size:1.3em;
            text-align: center
        }
    </style>

    <div>

        <table class="w-full">
            <tr>
                <td >
                    <div class="" style="position:relative">
                        <img src="{{ public_path('assets/img/logo.jpg') }}" width="100px">
                        
                        <span id="nombre-empresa">Macetas de cemento <br>VALCEL</span>
                    </div>
                
                </td>

                <td >
                    <div class="" style="position:relative">
                        <span id="no-valido">X</span>
                        <p class="text-no-valido" >Documento no válido como factura</p>
                    </div>

                </td>
            </tr>
        </table>
        <hr>
        <h2>Operación ID: {{ $venta->id }}</h2>
    </div>

 
    <div class="margin-top">
        <table class="w-full">
            <tr style="font-size:1.1em;">
                <td class="w-half">
                    <div><h4>Para:</h4></div>
                    <div>{{ $venta->cliente->nombre }} {{ $venta->cliente->apellido }}  </div>
                    <div>
                         
                        123 Fake address
                    </div>
                </td>
                <td class="w-half">
                    <div><h4>De:</h4></div>
                    <div>Valentin Urbine</div>
                    <div>San Nicolás</div>
                </td>
                <td class="w-half">
                    <div><h4>Detalle:</h4></div>
                    <div>Fecha: {{ $venta->created_at->format('d/m/Y') }}</div>
                    <div>San Nicolás</div>
                </td>
            </tr>
        </table>
    </div>
 
    <div class="margin-top">
        <table class="products">
            <tr>
                <th>ID</th>
                <th>Maceta</th>
                <th>Cantidad</th>
                <th>Precio unitario</th>
                <th>Precio sumado</th>
            </tr>
            @foreach($detalleVenta->macetas as $maceta)
                <tr class="items">
                    <td>#{{ $maceta->id }}</td>
                    <td>Maceta {{ $maceta->nombre }}</td>
                    <td>{{ $maceta->pivot->cantidad }} unidades</td>
                    <td>$ {{  number_format($maceta->precio, 0, ',', '.') }}</td>
                    <td>$ {{ number_format($maceta->precio * $maceta->pivot->cantidad, 0, ',', '.') }}</td>
                    
                </tr>
            @endforeach
        </table>
    </div>
 
    <div class="total" style="font-size: 1.4em; font-weight:600">
        Total: $ {{ number_format($venta->total, 0, ',', '.') }} ARS
    </div>
 
    <div class="footer margin-top">
        <div>Muchas gracias</div>
        <div>&copy; Macetas Valcel</div>
    </div>
    <hr>
    <p style="color:grey; text-align:justify">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi dolore corporis quisquam facere? Fugit, repellendus expedita perspiciatis nostrum eius inventore deserunt quod, facilis dolorum animi saepe quia sit voluptatum, velit nemo laborum? Quisquam, reiciendis vero! Beatae libero quaerat perspiciatis iusto, rem optio. Ex, ducimus iure!
    </p>
</body>
</html>