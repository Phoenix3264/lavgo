<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\acadion\dmha_330;

$factory->define(dmha_330::class, function (Faker $faker) {
    return [
        //
        'nip' => rand(1000000000,9999999999),
        'nama' => $faker->name
    ];
});
