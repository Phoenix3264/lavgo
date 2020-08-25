<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\penelitian\dmha_378;

$factory->define(dmha_378::class, function (Faker $faker) {

    $rand_pesan = rand(10,60);
    $pesan = date('Y-m-d H:i:s',strtotime('+'.$rand_pesan.' minutes',strtotime(date('Y-m-d H:i:s'))));

    $rand_tiba = rand(10,60);
    $tiba = date('Y-m-d H:i:s',strtotime('+'.$rand_tiba.' minutes',strtotime($pesan)));

    $rand_keluar = rand(10,60);
    $keluar = date('Y-m-d H:i:s',strtotime('+'.$rand_keluar.' minutes',strtotime($tiba)));

    return [
        //
        'nama' => $faker->name,
        'nopol' => str::random(1).' '.rand(1000,9999).' '.str::random(2),
        'dmha_352' => rand(1,60),
        'pesan' => $pesan,
        'tiba' => $tiba,
        'keluar' => $keluar,
        'created_at' => $pesan,


    ];
});
