<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
       		'rol_id' => '1',
       		'name' =>  strtoupper('Eduardo Jaramillo'),
       		'email' => strtoupper('admin@gmail.com'),
       		'password' => bcrypt('12345678'),
       		'dni' => '1001245781',
       		'sexo' => strtoupper('H'),
       		'direccion' => strtoupper('Cotocollao y avenida Machala OE50'),
          'telefono' => '09847151152',
       		'fecha_nacimiento' => '1990-06-05',


       ]);

        DB::table('Users')->insert([
       		'rol_id' => '2',
       		'name' => strtoupper('Mishel Rodriguez'),
       		'email' => strtoupper('mishel@gmail.com'),
       		'password' => bcrypt('12345678'),
       		'dni' => '172504781',
       		'sexo' => 'M',
       		'direccion' => strtoupper('Amazonas  y  6 de Diciembre OE20'),
          'telefono' => '0971515615',
       		'fecha_nacimiento' => '1994-09-05',
       	

       ]);
    }
}
