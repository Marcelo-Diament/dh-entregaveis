<?php

use Faker\Generator as Faker;

$factory->define(App\Actor::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstNameMale,
        'last_name' => $faker->lastName,
        'awards' => $faker->numberBetween(0,10),
        'favorite_movie_id' => $faker->numberBetween(1,10),
        'rating' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 10),
        'picture_url' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 10),
    ];
});
