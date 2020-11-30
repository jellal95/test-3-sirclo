<?php

/** @var Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(\App\Models\Weight::class, function (Faker $faker) {
    return [
        'date' => $faker->dateTimeThisYear(),
        'max' => $max = $faker->numberBetween('40', '80'),
        'min' => $min = $faker->numberBetween($max - 3, $max + 5),
        'different' => $max - $min
    ];
});
