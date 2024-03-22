<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MacetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $macetas = [
            ['nombre_maceta' => 'Pilar', 'precio' => 4500, 'peso' => 14, 'base' => 15, 'altura' => '', 'boca' => ''],

        ];


        // INSERT INTO macetas(nombre_maceta, precio, peso, base, altura, boca) 
        // VALUES ('Redonda', '4000', 10, 0, 30, 22);
        // INSERT INTO macetas(nombre_maceta, precio, peso, base, altura, boca) 
        // VALUES ('Rectangular', '5000', 10, 40, 20, 40);
        // INSERT INTO macetas(nombre_maceta, precio, peso, base, altura, boca) 
        // VALUES ('Cuadrada', '5500', 16, 30, 30, 30);
        // INSERT INTO macetas(nombre_maceta, precio, peso, base, altura, boca) 
        // VALUES ('Cónica', '5700', 16, 23, 40, 30);
        // INSERT INTO macetas(nombre_maceta, precio, peso, base, altura, boca) 
        // VALUES ('Piramidal', '6000', 16, 15, 73, 22);
        // INSERT INTO macetas(nombre_maceta, precio, peso, base, altura, boca) 
        // VALUES ('Cubo Piramidal', '4500', 14, 15, 73, 15);
        // Insertar los registros en la tabla 'deportes'
        DB::table('macetas')->insert($macetas);
    }
}
