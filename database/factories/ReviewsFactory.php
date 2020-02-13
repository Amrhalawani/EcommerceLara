<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    //'user_id','product_id','stars','review'
    return [
        'user_id'=> $faker->numberBetween(1,200),
        'product_id'=> $faker->numberBetween(1,500),
        'stars'=> $faker->numberBetween(1,5),
        'review'=> $faker->paragraph(1),

    ];
});
