<?php

namespace App\Models;

use App\Models\Venta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Maceta extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'precio', 'peso', 'base', 'altura', 'boca', 'stock'];
    
    // Relación con las ventas en las que se ha vendido este producto
    public function ventas()
    {
        return $this->belongsToMany(Venta::class, 'venta_maceta')->withPivot('cantidad', 'precio_unitario');
    }
}






























