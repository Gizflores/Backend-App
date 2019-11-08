<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\inventario;
use Faker\Generator as Faker;

$factory->define(inventario::class, function (Faker $faker) {
    return [
        'id_boutique' => rand(1, 15),
        'id_categoria' => rand(1, 15),
        'img_principal' => $faker->name,
        'nombre' => $faker->name,
        'descripcion' => Str::random(10),
        'precio' =>  rand(100, 1500),
        'disponibilidad' => rand(1, 105),
    ];
});
// id_boutique id_categoria img_principal nombre descripcion precio disponibilidad