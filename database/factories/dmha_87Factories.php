<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\acadion\dmha_87;
use Illuminate\Support\Str;
$factory->define(dmha_87::class, function (Faker $faker) {
    return [
        //
        'nip' => rand(1000000000,9999999999),
        'nama' => $faker->name
    ];
});
