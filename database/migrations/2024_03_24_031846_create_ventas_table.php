<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();

            // preferentemente si está registrado
            $table->unsignedBigInteger('cliente_id')->nullable(); 
            $table->foreign('cliente_id')->references('id')->on('clientes');
            
            // otros campos importantes
            $table->integer('unidades'); // Campo para el total de unidades vendidas
            $table->decimal('total', 10, 2); // Campo para el total de la venta
  
            $table->date('fecha')->nullable(); // Fecha
            $table->text('observacion')->nullable(); // Notas o comentarios
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
