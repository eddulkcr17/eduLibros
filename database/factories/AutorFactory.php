<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Autor;
use Faker\Generator as Faker;

$factory->define(Autor::class, function (Faker $faker) {
    return [

    	//USANDO INFORMACION FALSA PARA LA TABLA AUTOR
      'hejr_nombres' => strtoupper($faker->firstNameMale) ,
      'hejr_apellidos' => strtoupper($faker->lastName),
      'hejr_tipo_dni' => strtoupper($faker->randomElement(['C', 'P'])),
      'hejr_dni'=> $faker->numerify('##########'),
      'hejr_sexo' => strtoupper($faker->randomElement(['H', 'M'])),
      'hejr_fecha_autor' => $faker->date($format = 'Y/m/d', $max = 'now'),
       'hejr_email'=> strtoupper($faker->email) 
    ];
});
