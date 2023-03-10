<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'role' => $faker->randomElement(['admin', 'Ar1', 'Ar2', 'basic'])
    ];
});
