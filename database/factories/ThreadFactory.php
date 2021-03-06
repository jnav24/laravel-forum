<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Thread;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'user_id' => fn () => factory('App\User')->create()->id,
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
    ];
});
