<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\dmha_167;
use Faker\Generator as Faker;

$factory->define(dmha_167::class, function (Faker $faker) {
    return [
        //
        'nama' => $faker->name,
        'alamat' => $faker->name,
        'rt' => $faker->name,
        'rw' => $faker->name,
        'kabupaten_kota' => $faker->name,
        'kecamatan' => $faker->name,
        'desa_kelurahan' => $faker->name,
        'nomor_telepon' => $faker->name,
        'pekerjaan' => $faker->name,
        'status_dalam_keluarga' => $faker->name,
    ];
});
