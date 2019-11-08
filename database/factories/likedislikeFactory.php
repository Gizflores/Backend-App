<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\likedislike;
use Faker\Generator as Faker;

$factory->define(likedislike::class, function (Faker $faker) {
    return [
        'id_product' => rand(1, 15),
        'id_user' => rand(1, 15),
        'type' => Str::random(5),
        'closed' => rand(1, 2),
    ];
});
