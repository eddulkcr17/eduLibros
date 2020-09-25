<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Editorial;
use Faker\Generator as Faker;

$factory->define(Editorial::class, function (Faker $faker) {
    return [
    	//INFORMACION FALSA PARA LA TABLA EDITORIAL
        'hejr_nombre' => strtoupper($faker->company),
        'hejr_email' => strtoupper($faker->unique()->safeEmail)
    ];
});
