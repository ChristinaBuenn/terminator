<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vista;
use Faker\Generator as Faker;

$factory->define(Vista::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'date' => $faker->date(),
        'hash' => substr(uniqid(), -7)
    ];
});
