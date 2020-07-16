<?php

namespace App\Http\Controllers;

use App\dmha_8;
use App\dmha_13;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class wwform extends Controller
{
    //
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function generate()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';            
            $AUTH_ID    = $_GET['a'];
            $DMHA_1     = $_GET['p'];
            $DMHA_9     = $_GET['c'];
            $ID         = $_GET['i'];

            $dmha_2  = dmha_1_id_check_col($DMHA_1,'dmha_2');
        // ------------------------------------------------------------------------- ACTION

            if($dmha_2 == 1)
            {
                $isi .= color_admin_v42_hidden($AUTH_ID,$DMHA_1);
                $isi .= color_admin_v42_form($AUTH_ID,$DMHA_1);
            }
            elseif($dmha_2 == 2)
            {
                $isi .= color_admin_material_v42_hidden($DMHA_1,$DMHA_9,$ID);
                $isi .= color_admin_material_v42_form($AUTH_ID,$DMHA_1,$DMHA_9,$ID);
            }
            
            //$isi .= $DMHA_1;
        // ------------------------------------------------------------------------- SEND
            die(json_encode(array(
                "isi" => $isi
            )));
        ////////////////////////////////////////////////////////////////////////////
    }
    
    public function postdata(Request $request)
    {       
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

            $DMHA_1 = $request->p;
            $DMHA_9 = $request->c;
            $ID = $request->i;

        // ------------------------------------------------------------------------- SUBMITTING DATA
            if($DMHA_1 == 1) {     
                if($DMHA_9 == 2) { dmha_1_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_1_update_me($ID,$request->all()); }
            }
            elseif($DMHA_1 == 2) {     
                if($DMHA_9 == 2) { dmha_2_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_2_update_me($ID,$request->all()); }
            }
            elseif($DMHA_1 == 3) {     
                if($DMHA_9 == 2) { dmha_3_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_3_update_me($ID,$request->all()); }
            }
            elseif($DMHA_1 == 4) {     
                if($DMHA_9 == 2) { dmha_4_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_4_update_me($ID,$request->all()); }
            }
            elseif($DMHA_1 == 5) {     
                if($DMHA_9 == 2) { dmha_5_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_5_update_me($ID,$request->all()); }
            }
            elseif($DMHA_1 == 8) {     
                if($DMHA_9 == 2) { dmha_8_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_8_update_me($ID,$request->all()); }
            }
            elseif($DMHA_1 == 9) {     
                if($DMHA_9 == 2) { dmha_9_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_9_update_me($ID,$request->all()); }
            }
            elseif($DMHA_1 == 13) {     
                if($DMHA_9 == 2) { dmha_13_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_13_update_me($ID,$request->all()); }
            }
            elseif($DMHA_1 == 14) {     
                if($DMHA_9 == 2) { dmha_14_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_14_update_me($ID,$request->all()); }
            }
            elseif($DMHA_1 == 112) {     
                dmha_1_create_sub_fitur($request->nama);
            }
            elseif($DMHA_1 == 113) {     
                dmha_1_create_sub_fitur_complete($request->nama);
            }
            elseif($DMHA_1 == 118) {     
                dmha_1_create_fitur_complete($request->nama);
            }
            elseif($DMHA_1 == 122) {     
                if($DMHA_9 == 2) { dmha_122_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_122_update_me($ID,$request->all()); }
            }
            elseif($DMHA_1 == 126) {     
                if($DMHA_9 == 2) { dmha_126_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_126_update_me($ID,$request->all()); }
            }
            elseif($DMHA_1 == 130) {     
                if($DMHA_9 == 2) { dmha_130_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_130_update_me($ID,$request->all()); }
            }
            elseif($DMHA_1 == 134) {     
                if($DMHA_9 == 2) { dmha_134_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_134_update_me($ID,$request->all()); }
            }
            elseif($DMHA_1 == 138) {     
                if($DMHA_9 == 2) { dmha_138_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_138_update_me($ID,$request->all()); }
            }
            elseif($DMHA_1 == 144) {     
                if($DMHA_9 == 2) { dmha_144_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_144_update_me($ID,$request->all()); }
            }
            elseif($DMHA_1 == 157) {     
                dmha_157_delete_me($ID);
                for ($i=0; $i<count($_POST['dmha_1']); $i++)
                {
                    $POST_dmha_1           = $_POST['dmha_1'][$i];
                    dmha_157_create_me($ID,$POST_dmha_1);
                }
            }
            elseif($DMHA_1 == 158) {     
                if($DMHA_9 == 2) { user_create_me($request->all()); }
                elseif($DMHA_9 == 3) { user_update_me($ID,$request->all()); }
            }
            elseif($DMHA_1 == 162) {     
                dmha_162_delete_me($ID);
                for ($i=0; $i<count($_POST['dmha_1']); $i++)
                {
                    $POST_dmha_1           = $_POST['dmha_1'][$i];
                    dmha_162_create_me($ID,$POST_dmha_1);
                }
            }


            // Additional
            elseif($DMHA_1 == 247) {     
                if($DMHA_9 == 2) { dmha_247_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_247_update_me($ID,$request->all()); }
            }

            // acadion
            elseif($DMHA_1 == 171) {     
                if($DMHA_9 == 2) { dmha_171_create_me($request->all()); }
                elseif($DMHA_9 == 3) { dmha_171_update_me($ID,$request->all()); }
            }

        // ------------------------------------------------------------------------- SEND

    }
}
