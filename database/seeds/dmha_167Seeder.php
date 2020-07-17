<?php

use Illuminate\Database\Seeder;

class dmha_167Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Orang Tua Wali        
        factory(App\dmha_167::class, 270)->create();
    }
}
