<?php

namespace App\Http\Controllers;

use App\dmha_5;

use Illuminate\Http\Request;

class wwform extends Controller
{
    //
    public function generate()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';            
            $DMHA_1         = $_GET['id'];
            $AUTH_ID        = $_GET['ida'];

            $dmha_2  = dmha_1_id_check_col($DMHA_1,'dmha_2');
        // ------------------------------------------------------------------------- ACTION
            if($dmha_2 == 1)
            {
                $isi = color_admin_v42_form($AUTH_ID,$DMHA_1);
            }
            
            $isi .= $DMHA_1;
        // ------------------------------------------------------------------------- SEND
            die(json_encode(array(
                "isi" => $isi
            )));
        ////////////////////////////////////////////////////////////////////////////
    }
    
    public function post(Request $request)
    {
        dmha_5::create($request->all());
        

        $isi = 'OKEEEEEEEEEEE';
        
        die(json_encode(array(
            "isi" => $isi
        )));

    }
}
