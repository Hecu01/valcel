<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Clientes";
        $clientes = Cliente::orderBy('id', 'asc')->paginate(10);
        return view('clientes.index', compact('clientes', 'title'));
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
        $clienteNuevo = New Cliente;
        $request->validate([
            'nombre' => 'required|string|max:100',
            'apellido' => 'max:100',
            'dni' => 'integer',
            'telefono' => 'integer',
            'zona' => 'max:100',
        ]);
        $clienteNuevo= Cliente::create([
            'nombre' => $request->nombre, 
            'apellido' => $request->apellido, 
            'dni' => $request->dni, 
            'telefono' => $request->telefono, 
            'zona' => $request->zona
        ]);
        return back()->with('creado', 'Cliente creado con éxito');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.ver', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.editar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update([
            'nombre' => $request->nombre, 
            'apellido' => $request->apellido, 
            'dni' => $request->dni, 
            'telefono' => $request->telefono, 
            'zona' => $request->zona, 
        ]);
        return redirect()->back()->with('success', 'El cliente '.$cliente->nombre.' '. $cliente->apellido . ' actualizado exitosamente.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
