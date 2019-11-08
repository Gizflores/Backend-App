<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\boutique;
use Faker\Generator as Faker;

$factory->define(boutique::class, function (Faker $faker) {
    return [
                
        'nombre' => $faker->name,
        'direccion' => $faker->streetName,
        'email' => $faker->unique()->safeEmail,
        'telefono' => Str::random(10),
    ];
});
