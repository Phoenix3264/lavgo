<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\dmha_163;
use Faker\Generator as Faker;

$factory->define(dmha_163::class, function (Faker $faker) {
        
        $kode_provinsi = dmha_69_generate_data('kode_provinsi');
        $kode_kabupaten_kota = dmha_73_generate_data('kode_kabupaten_kota',$kode_provinsi);    
        $kode_kecamatan = dmha_77_generate_data('kode_kecamatan',$kode_kabupaten_kota);
        $kode_desa_kelurahan = dmha_81_generate_data('kode_desa_kelurahan',$kode_kecamatan);
                
        $kode_provinsi = dmha_69_generate_data('kode_provinsi');
        $nama_kabupaten_kota = dmha_73_generate_data('nama',$kode_provinsi); 

        
        $kode_provinsi = dmha_69_generate_data('kode_provinsi');
            $kota_sekolah = dmha_73_generate_data('nama',$kode_provinsi); 

        
        $chance_ortu = rand(1,100);        
            if($chance_ortu >= 95)
            {
                $id_ayah = NULL;
                $id_ibu = NULL;
                $id_wali = rand(1621,1890);
            }
            elseif($chance_ortu >= 90)
            {
                $id_ayah = rand(1,810);
                $id_ibu = NULL;
                $id_wali = NULL;
            }
            elseif($chance_ortu >= 85)
            {
                $id_ayah = NULL;
                $id_ibu = rand(811,1620);
                $id_wali = NULL;
            }
            elseif($chance_ortu >= 0)
            {
                $id_ayah = rand(1,810);
                $id_ibu = rand(811,1620);
                $id_wali = NULL;
            }

        $chance_agama = rand(1,100);   
            if($chance_agama >= 97) { $agama = 5; }
            elseif($chance_agama >= 94) { $agama = 4; }
            elseif($chance_agama >= 84) { $agama = 3; }
            elseif($chance_agama >= 74) { $agama = 2; }
            elseif($chance_agama >= 1) { $agama = 1; }
    
    return [
        //

        'nomor_induk' => rand(10000,99999),
        'nisn' => rand(1000000000,9999999999), 
        'kelas' => 271, 
        'nama' => $faker->name(),
        'tempat_lahir' => $nama_kabupaten_kota, 
        'tanggal_lahir' => '2000-'.$faker->month().'-'.$faker->dayOfMonth(), 
        'jenis_kelamin' => rand(1,2), 
        'alamat' => $faker->streetAddress,
        'rt' => $faker->randomElement(['001', '002', '003', '004', '005', '006', '007', '008', '009']),
        'rw' => $faker->randomElement(['001', '002', '003', '004', '005', '006', '007', '008', '009']),
        'kabupaten_kota' => $kode_kabupaten_kota,
        'kecamatan' => $kode_kecamatan,
        'desa_kelurahan' => $kode_desa_kelurahan,
        'agama' => $agama,  
        'status_dalam_keluarga'  => 3,  
        'anak_ke' => rand(1,6), 
        'sekolah_asal' => 'SMPN '.rand(1,100), 
        'kota_sekolah' => $kota_sekolah, 
        'id_ayah'=> $id_ayah, 
        'id_ibu'=> $id_ibu,
        'id_wali'=> $id_wali,



    ];
});
