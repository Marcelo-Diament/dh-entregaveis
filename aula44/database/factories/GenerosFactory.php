<?php

use Faker\Generator as Faker;

$factory->define(App\Genre::class, function (Faker $faker) {

        return [
            'name' => $faker->word,
            'ranking' => $faker->unique()->numberBetween(30,99),
            'active' => $faker->boolean($chanceOfGettingTrue = 80),
        ];

});
