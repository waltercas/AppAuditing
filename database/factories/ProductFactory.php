<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
       'name' => $faker->unique()->word(),
       'description'=>	$faker->text(100),
       'price'=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1000),
    ];
});


