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
            elseif($DMHA_1 == 2) { $isi .= dmha_2_data_table($AUTH_ID,$DMHA_1);}
            elseif($DMHA_1 == 3) { $isi .= dmha_3_data_table($AUTH_ID,$DMHA_1);}
            elseif($DMHA_1 == 4) { $isi .= dmha_4_data_table($AUTH_ID,$DMHA_1);}
            elseif($DMHA_1 == 5) { $isi .= dmha_5_data_table($AUTH_ID,$DMHA_1);}
            elseif($DMHA_1 == 9) { $isi .= dmha_9_data_table($AUTH_ID,$DMHA_1);}
            elseif($DMHA_1 == 13) { $isi .= dmha_13_data_table($AUTH_ID,$DMHA_1);}
            elseif($DMHA_1 == 14) { $isi .= dmha_14_data_table($AUTH_ID,$DMHA_1);}
            elseif($DMHA_1 == 15) { $isi .= dmha_15_data_table($AUTH_ID,$DMHA_1);}
            
            elseif($DMHA_1 == 13) { $isi .= dmha_1_data_table($AUTH_ID,$DMHA_1);}

        // ------------------------------------------------------------------------- SEND
            die(json_encode(array(
                "isi" => $isi
            )));
        ////////////////////////////////////////////////////////////////////////////
    }
}
