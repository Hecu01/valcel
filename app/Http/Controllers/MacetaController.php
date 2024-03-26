<?php

namespace App\Http\Controllers;

use App\Models\Maceta;
use Illuminate\Http\Request;

class MacetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $macetas = Maceta::all();
        return view('macetas.index', compact('macetas'));
        
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
        $macetaNueva = New Maceta;   

        $macetaNueva = Maceta::create([
            'nombre' => $request->nombre,
            'precio'=> $request->precio,
            'peso' => $request->peso,
            'base' => $request->base , 
            'altura' => $request->altura, 
            'boca' => $request->boca,
            'stock' => $request->stock
        ]);
        
        return redirect()->route('inicio')->with('creado', '¡La maceta '. $macetaNueva->nombre .' ha sido cargado con éxito!');
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
        $maceta = Maceta::findOrFail($id);
        return view('macetas.editar', compact('maceta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $maceta = Maceta::findOrFail($id);
        $maceta->update([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'peso' => $request->peso,
            'base' => $request->base,
            'altura' => $request->altura,
            'boca' => $request->boca,
            'stock' => $request->stock
        ]);
        return redirect()->back()->with('success', 'Maceta actualizada exitosamente.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $maceta = Maceta::find($id);
        $maceta->delete();
        return redirect()->route('inicio')->with('eliminado', 'Maceta eliminada correctamente');

    }
    public function precios()
    {
        $macetas = Maceta::all();
        return view('precios', compact('macetas'));
        
    }

}