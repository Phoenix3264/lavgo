<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wwform extends Controller
{
    //
    public function generate()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';            
            $ID    = $_GET['id'];

        // ------------------------------------------------------------------------- ACTION
            $isi = generate_pertanyaan_dmha($ID);

        // ------------------------------------------------------------------------- SEND
            die(json_encode(array(
                "isi" => $isi
            )));
        ////////////////////////////////////////////////////////////////////////////
    }
}
