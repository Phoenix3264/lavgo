<?php

use Illuminate\Database\Seeder;
use App\Models\acadion\dmha_87;

class dmha_87Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(dmha_87::class, 50)->create();
    }
}
