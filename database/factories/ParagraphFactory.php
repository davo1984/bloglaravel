<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Paragraph;
use Faker\Generator as Faker;

$factory->define(Paragraph::class, function (Faker $faker) {
    return [
        'post_id' => $faker->num,
        'body' => $faker->paragraph
    ];
});
