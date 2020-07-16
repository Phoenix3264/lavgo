<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\dmha_163;
use Faker\Generator as Faker;

$factory->define(dmha_163::class, function (Faker $faker) {
    return [
        //
        'nama' => $faker->name,
        'tanggal_lahir' => '2003'.$faker->month.'-'.$faker->dayOfMonth,
        'tempat_lahir' => $faker->name,
        'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
        'alamat' => $faker->secondaryAddress,
        'rt' => $faker->name,
        'rw' => $faker->name,
        'desa_kelurahan' => $faker->name,
        'kecamatan' => $faker->name,
        'kabupaten_kota' => $faker->name,
        'agama' => $faker->name,




    ];
});
