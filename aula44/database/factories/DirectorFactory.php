<?php

use Faker\Generator as Faker;

$factory->define(App\Director::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstNameMale,
        'last_name' => $faker->lastName,
        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
