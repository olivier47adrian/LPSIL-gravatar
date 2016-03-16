<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->defineAs(App\User::class, 'admin', function ($faker) {
    return [
        'email' => "admin@gravatar.com",
        'password' => bcrypt("admin"),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Avatar::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->email,
        'srcImage' => "http://lorempixel.com/100/100",
        'user_id' => "1"
    ];
});



