<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Maceta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $macetas = Maceta::all();
        $clientes = Cliente::orderBy('nombre', 'asc')->get();
        $ventas = Venta::all();
        $title = "Valcel - Ventas";
        return view('ventas.index', compact('ventas','title', 'clientes', 'macetas'));
    }

    public function pdf(string $id){
        $venta = Venta::find($id);
        $cliente = Venta::with('cliente')->get();

        $detalleVenta = Venta::with('macetas')->find($id);
        $pdf = Pdf::loadView('ventas.pdf', compact('venta', 'cliente', 'detalleVenta'));
        // return $pdf->download('invoice.pdf');
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id_cliente = $request->cliente;
        $ventaNueva = New Venta;
        if(!isset($id_cliente)){
            $nombre = $request->nombre;
            $apellido = $request->apellido;
            $dni = $request->dni;
        }
        // Obtener el array enviado desde el formulario
        $ventasArray = json_decode($request->input('ventasArray'), true);
        
        $importe_total = 0;
        $unidades_total = 0;
        // dd($ventasArray); // verificar si se lee ventasArray
        foreach ($ventasArray as $venta) {
            $precio_unitario = $venta['precio_unitario'];
            // Sumar el importe
            $importe = $venta['importe'];
            $importe_total += $importe;
            // Sumar las unidades
            $unidades = $venta['unidades'];
            $unidades_total += $unidades;
        }

        $ventaNueva = Venta::create([
            'cliente_id' => $id_cliente,
            'unidades' => $unidades_total,
            'total' => $importe_total,
            'observacion' => $request->observacion,
            // 'nombre' => $nombre,
            // 'apellido' => $apellido,
            // 'dni' => $dni,
        ]);


      
        // Iterar sobre cada elemento del array de ventas
        foreach ($ventasArray as $venta) {
            // Obtener el artículo correspondiente
            $maceta = Maceta::find($venta['articulo_id']);
        
            // Si no es un calzado, asociarlo a la venta de otros artículos
            $ventaNueva->macetas()->attach($maceta->id, [
                'cantidad' => $venta['unidades'],
                'precio_unitario' => $venta['precio_unitario']
            ]);

            // Calcular el nuevo stock
            $nuevoStock = $maceta->stock - $venta['unidades'];

            // Actualizar el stock del artículo
            $maceta->update(['stock' => $nuevoStock]);
        }


        // Redirigir a una ruta específica o devolver una respuesta si es necesario
        return redirect()->route('ventas.index')->with('success', '¡La venta fue realizada con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}