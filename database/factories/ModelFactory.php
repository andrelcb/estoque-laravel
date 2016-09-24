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
use App\User;

$factory->define(User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'username' => $faker->unique()->username,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

use App\Cliente;

$factory->define(Cliente::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->nome,
    ];
});

use App\Produto;

$factory->define(Produto::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->nome,
    ];
});
