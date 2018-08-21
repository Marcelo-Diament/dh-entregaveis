<?php

use Faker\Generator as Faker;

$factory->define(App\Actor::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstNameMale,
        'last_name' => $faker->lastName,
        'favorite_movie_id' => $faker->numberBetween(1,10),
        'rating' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 10),
        'picture_url' => 'https://us.123rf.com/450wm/berkut2011/berkut20111506/berkut2011150600452/41143316-stock-vector-man-in-suit-secret-service-agent-icon.jpg?ver=6',
    ];
});
