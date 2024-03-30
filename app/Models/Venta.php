<?php

namespace App\Models;

use App\Models\Maceta;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = [
        'cliente_id',
        'nombre',
        'apellido',
        'dni',
        'unidades',
        'total',
        'payment_method',
        'invoice_number',
        'notes', 
        'observacion'
    ];
    // Relación con los productos vendidos en esta venta
    public function macetas()
    {
        return $this->belongsToMany(Maceta::class, 'venta_maceta')->withPivot('cantidad', 'precio_unitario');
    }
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
};
