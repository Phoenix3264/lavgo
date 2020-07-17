<?php

use Illuminate\Database\Seeder;

class dmha_163Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Siswa
        factory(App\dmha_163::class, 30)->create();
    }
}
