<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//AGREGANDO INFORAMCION A LA TABLA LIBROS
        DB::table('Libros')->insert([
       		'autor_id' => '2',
       		'editorial_id' => '2',
       		'hejr_ISBN' => '978-612-466241-9-2',
       		'hejr_titulo' => strtoupper('Blancas Nieves'),
       		'hejr_anio' => '2000',
       		'hejr_precio_venta' => 64.54,
       		'hejr_otros_autores' => strtoupper('Miguel sanches fernando, Luida Sim'),
       		


       ]);

        DB::table('Libros')->insert([
       		'autor_id' => '3',
       		'editorial_id' => '1',
       		'hejr_ISBN' => '99921-58-10-7',
       		'hejr_titulo' => strtoupper('Los tres cerditos'),
       		'hejr_anio' => '1991',
       		'hejr_precio_venta' => 44.90,
       		'hejr_otros_autores' => strtoupper('Erika Lomas'),
       		


       ]);

         DB::table('Libros')->insert([
       		'autor_id' => '3',
       		'editorial_id' => '2',
       		'hejr_ISBN' => '978-2403-577-0',
       		'hejr_titulo' => strtoupper('La jungla'),
       		'hejr_anio' => '1996',
       		'hejr_precio_venta' => 60.70,
       		'hejr_otros_autores' => strtoupper('Pedro Manuel'),
       		


       ]);
    }
}
