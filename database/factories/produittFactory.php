<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\produitt;
use Faker\Generator as Faker;

$factory->define(produitt::class, function (Faker $faker) {

    return [
        'nom' => $faker->word,
        'qte' => $faker->word,
        'prix' => $faker->word,
        'categorie_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
