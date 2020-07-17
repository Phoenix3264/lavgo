<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\dmha_167;
use Faker\Generator as Faker;

$factory->define(dmha_167::class, function (Faker $faker) {
    
    $kode_provinsi = dmha_69_generate_data('kode_provinsi');
    $kode_kabupaten_kota = dmha_73_generate_data('kode_kabupaten_kota',$kode_provinsi);    
    $kode_kecamatan = dmha_77_generate_data('kode_kecamatan',$kode_kabupaten_kota);
    $kode_desa_kelurahan = dmha_81_generate_data('kode_desa_kelurahan',$kode_kecamatan);

    $pekerjaan = dmha_134_generate_data('nama');

    // php artisan db:seed --class=dmha_167Seeder

    return [
        //
        /* Suami
        'nama' => $faker->name('male'),
        'alamat' => $faker->streetAddress,
        'rt' => $faker->randomElement(['001', '002', '003', '004', '005', '006', '007', '008', '009']),
        'rw' => $faker->randomElement(['001', '002', '003', '004', '005', '006', '007', '008', '009']),
        'kabupaten_kota' => $kode_kabupaten_kota,
        'kecamatan' => $kode_kecamatan,
        'desa_kelurahan' => $kode_desa_kelurahan,
        'nomor_telepon' => $faker->tollFreePhoneNumber,
        'pekerjaan' => $pekerjaan,
        'status_dalam_keluarga' => 1,
        */
        
        /*
        'nama' => $faker->name('female'),
        'alamat' => $faker->streetAddress,
        'rt' => $faker->randomElement(['001', '002', '003', '004', '005', '006', '007', '008', '009']),
        'rw' => $faker->randomElement(['001', '002', '003', '004', '005', '006', '007', '008', '009']),
        'kabupaten_kota' => $kode_kabupaten_kota,
        'kecamatan' => $kode_kecamatan,
        'desa_kelurahan' => $kode_desa_kelurahan,
        'nomor_telepon' => $faker->tollFreePhoneNumber,
        'pekerjaan' => $pekerjaan,
        'status_dalam_keluarga' => 2,
        */

        
        'nama' => $faker->name(),
        'alamat' => $faker->streetAddress,
        'rt' => $faker->randomElement(['001', '002', '003', '004', '005', '006', '007', '008', '009']),
        'rw' => $faker->randomElement(['001', '002', '003', '004', '005', '006', '007', '008', '009']),
        'kabupaten_kota' => $kode_kabupaten_kota,
        'kecamatan' => $kode_kecamatan,
        'desa_kelurahan' => $kode_desa_kelurahan,
        'nomor_telepon' => $faker->tollFreePhoneNumber,
        'pekerjaan' => $pekerjaan,
        'status_dalam_keluarga' => 4,
    ];
});
