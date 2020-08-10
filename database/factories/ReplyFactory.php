<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reply;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'thread_id' => fn () => factory('App\Thread')->create()->id,
        'user_id' => fn () => factory('App\User')->create()->id,
        'body' => $faker->paragraph,
    ];
});
