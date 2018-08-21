<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'awards' => $faker->numberBetween(0,10),
        'release_date' => $faker->dateTime($max = 'now'),
        'length' => $faker->numberBetween(10,600),
        'genre_id' => $faker->numberBetween(1,12),
        'revenue' => $faker->numberBetween(0,10000),
        'rating' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 10),
        'director_id' => $faker->numberBetween(1,10)
    ];
});
