<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\parasuhu\dmha_426;

$factory->define(dmha_426::class, function (Faker $faker) {

    $array_gender = array("Pria", "Wanita");
    
    $rand_gender = rand(0,1);
    $array_bulan = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
    $array_tanggal = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20");

    if($rand_gender == 0)
    {
        $nama_panggung  = $faker->titleMale.' '.$faker->name('male');
        $nama_lengkap   = $faker->name('male');
        $jenis_kelamin   = $array_gender[0];
    }
    elseif($rand_gender == 1)
    {
        $nama_panggung  = $faker->titleMale.' '.$faker->name('female');
        $nama_lengkap   = $faker->name('female');
        $jenis_kelamin   = $array_gender[1];
    }

    $facebook = null;
    if(rand(1,3) == 1)
    {
        $facebook = 'www.facebook.com/'.replace_to_underscore($nama_panggung);
    }

    $instagram = null;
    if(rand(1,3) == 1)
    {
        $instagram = 'www.instagram.com/'.replace_to_underscore($nama_panggung);
    }

    $linkedin = null;
    if(rand(1,5) == 1)
    {
        $linkedin = 'www.linkedin.com/'.replace_to_underscore($nama_panggung);
    }
    
    $twitter = null;
    if(rand(1,5) == 1)
    {
        $twitter = 'www.twitter.com/'.replace_to_underscore($nama_panggung);
    }

    $youtube = null;
    if(rand(1,4) == 1)
    {
        $youtube = 'www.youtube.com/'.replace_to_underscore($nama_panggung);
    }

    $verifikasi = null;
    if(rand(1,20) == 1)
    {
        $verifikasi = 1;
    }

    return [
        //
        'nama_panggung' => $nama_panggung,
        'nama_lengkap' => $nama_lengkap,
        'tanggal_lahir' => rand(1955,1995).'-'.$array_bulan[rand(0,11)].'-'.$array_tanggal[rand(0,19)],
        'jenis_kelamin' => $jenis_kelamin,
        'email' => $faker->email,
        'telepon' => $faker->e164PhoneNumber,
        'kota' => $faker->city,
        'negara' => $faker->country,

        'visi' => $faker->text(rand(100,120)),
        'misi' => $faker->text(rand(100,120)),
        'target_lima_tahun' => $faker->text(rand(100,120)),

        'profesi' => $faker->jobTitle,
        'kompetensi' => $faker->catchPhrase,

        'pengajaran' => $faker->name,
        'pengalaman' => rand(1,40),
        'audiens' => rand(1,1000000),
        'video' => rand(1,3000),

        'facebook' => $facebook,
        'instagram' => $instagram,
        'linkedin' => $linkedin,
        'twitter' => $twitter,
        'youtube' => $youtube,

        'verifikasi' => $verifikasi,
        'created_at' => '2020-10-'.rand(13,20),


    ];
});
