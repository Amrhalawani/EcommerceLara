<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence,
        'desc'=> $faker->paragraph,
 'unit'=> $faker->randomElement(['kg','qty','m']),
 'price'=> $faker->randomFloat(2,10,500),
 'total'=> $faker->numberBetween(2,250),

        //
    ];
});
