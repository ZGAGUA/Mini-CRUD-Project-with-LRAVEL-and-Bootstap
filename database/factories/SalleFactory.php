<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Salle;
use Faker\Generator as Faker;

$factory->define(Salle::class, function (Faker $faker) {
    return [

        'nomSalle' => $faker->word(),
        'typeSalle' => $faker->word(),
        'capaciteSalle' => $faker->unique()->numberBetween(45, 70)

    ];
});
