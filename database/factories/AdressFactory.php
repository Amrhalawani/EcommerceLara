<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;


/*
 *  $table->string('street_name');
            $table->string('street_num');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('post_code');
 *
 * */
$factory->define(Address::class, function (Faker $faker) {
    return [
        'street_name' => $faker->streetName,
        'street_num' => $faker->streetSuffix,
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,
        'post_code' => $faker->postcode,

    ];
});
