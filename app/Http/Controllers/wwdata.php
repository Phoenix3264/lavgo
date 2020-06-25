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
            $ID    = $_GET['id'];

            $DMHA_2 = id_check_col_dmha_7($ID,'dmha_2');

        // ------------------------------------------------------------------------- ACTION
            if($ID == 2) { $isi .= data_table_dmha_2($DMHA_2,$ID);}
            elseif($ID == 3) { $isi .= data_table_dmha_3($DMHA_2,$ID);}
            elseif($ID == 4) { $isi .= data_table_dmha_4($DMHA_2,$ID);}
            elseif($ID == 5) { $isi .= data_table_dmha_5($DMHA_2,$ID);}
            elseif($ID == 6) { $isi .= data_table_dmha_6($DMHA_2,$ID);}
            elseif($ID == 7) { $isi .= data_table_dmha_7($DMHA_2,$ID);}
            elseif($ID == 9) { $isi .= data_table_dmha_9($DMHA_2,$ID);}
            elseif($ID == 28) { $isi .= data_table_dmha_28($DMHA_2,$ID);}
            elseif($ID == 32) { $isi .= data_table_dmha_32($DMHA_2,$ID);}
            elseif($ID == 36) { $isi .= data_table_dmha_36($DMHA_2,$ID);}

        // ------------------------------------------------------------------------- SEND
            die(json_encode(array(
                "isi" => $isi
            )));
        ////////////////////////////////////////////////////////////////////////////
    }
}
