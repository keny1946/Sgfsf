<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\empleados;
use Faker\Generator as Faker;

$factory->define(empleados::class, function (Faker $faker) {
    return [
        'Nombres'=> $faker->firstname,
        'Apellidos'=>$faker->lastname,
        'NroDocumento'=>$faker->phoneNumber,
        'Email'=>$faker->unique()->safeEmail,
        'Telefono'=>$faker->phoneNumber,
        'Clave'=>$faker->password($minLength=6,$maxLength=20),
        'idTipoDocumento'=>$faker->int
    ];
});
