<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wwdata extends Controller
{
    //
    public function generate()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';            
            $DMHA_1         = $_GET['id'];
            $AUTH_ID        = $_GET['ida'];

        // ------------------------------------------------------------------------- ACTION
            if($DMHA_1 == 1) { $isi .= dmha_1_data_table($AUTH_ID,$DMHA_1);}

        // ------------------------------------------------------------------------- SEND
            die(json_encode(array(
                "isi" => $isi
            )));
        ////////////////////////////////////////////////////////////////////////////
    }
}
