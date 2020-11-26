<?php

use Illuminate\Database\Seeder;
use App\Models\parasuhu\dmha_426;


class dmha_426Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(dmha_426::class, 40000)->create();
    }
}
