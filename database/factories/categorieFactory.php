<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\categorie;
use Faker\Generator as Faker;

$factory->define(categorie::class, function (Faker $faker) {

    return [
        'nom' => $faker->word,
        'description' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
