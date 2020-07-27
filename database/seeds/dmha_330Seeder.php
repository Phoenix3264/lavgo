<?php

use Illuminate\Database\Seeder;
use App\Models\acadion\dmha_330;

class dmha_330Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(dmha_330::class, 8)->create();
    }
}
