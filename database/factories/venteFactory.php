<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\vente;
use Faker\Generator as Faker;

$factory->define(vente::class, function (Faker $faker) {

    return [
        'client_id' => $faker->randomDigitNotNull,
        'produit_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
