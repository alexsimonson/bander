<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'bio' => $faker->paragraph,
        'genre' => $faker->word,
        'image' => $faker->imageUrl(),
    ];
});
