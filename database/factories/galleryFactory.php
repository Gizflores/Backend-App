<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\gallery;
use Faker\Generator as Faker;

$factory->define(gallery::class, function (Faker $faker) {

    
    return [
        'id_product' => rand(1, 15),
        'url' => $faker->imageUrl($width = 411, $height = 823,'fashion'),
        
    ];
});
