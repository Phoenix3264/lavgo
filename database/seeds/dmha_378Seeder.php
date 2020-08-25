<?php

use Illuminate\Database\Seeder;
use App\Models\penelitian\dmha_378;


class dmha_378Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(dmha_378::class, 100)->create();
    }
}
