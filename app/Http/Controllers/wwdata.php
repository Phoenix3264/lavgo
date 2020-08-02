<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wwdata extends Controller
{
    //
    public function generate(Request $request,$param_1,$param_2,$param_3)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';     
            $AUTH_ID = $param_1;  
            $DMHA_1 = $param_2;  
            $PARAM_2 = $param_3;  
            
            $modify_datatable = false;

            $isi_model = array();

        // ------------------------------------------------------------------------- ACTION
            if($request->ajax())
            {
                ////////////////////////////////////////////////////////////////////////////////////////////////////////// SYSTEM
                    if($DMHA_1 == 1) { $isi_model = dmha_1_let_me_generate_data_array($AUTH_ID, $DMHA_1,'data_table'); }
                    elseif($DMHA_1 == 2) { $isi_model = dmha_2_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 3) { $isi_model = dmha_3_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 4) { $isi_model = dmha_4_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 5) { $isi_model = dmha_5_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 8) { $isi_model = dmha_8_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 9) { $isi_model = dmha_9_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 13) { $isi_model = dmha_13_let_me_generate_data_array($AUTH_ID, $DMHA_1,'joined'); }
                    elseif($DMHA_1 == 14) { $isi_model = dmha_14_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 15) { $isi_model = dmha_15_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 271) { $isi_model = dmha_271_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 322) { $isi_model = dmha_322_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 326) { $isi_model = dmha_326_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    
                elseif($DMHA_1 == 40) { $isi_model = dmha_40_let_me_generate_data_array($AUTH_ID, $DMHA_1); }

                elseif($DMHA_1 == 91) { $isi_model = dmha_91_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 95) { $isi_model = dmha_95_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 99) { $isi_model = dmha_99_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 103) { $isi_model = dmha_103_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 107) { $isi_model = dmha_107_let_me_generate_data_array($AUTH_ID, $DMHA_1); }                
                elseif($DMHA_1 == 122) { $isi_model = dmha_122_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 126) { $isi_model = dmha_126_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 130) { $isi_model = dmha_130_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 134) { $isi_model = dmha_134_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 138) { $isi_model = dmha_138_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 144) { $isi_model = dmha_144_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 158) { $isi_model = user_let_me_generate_data_array($AUTH_ID, $DMHA_1); }

                // additional
                elseif($DMHA_1 == 247) { $isi_model = dmha_247_let_me_generate_data_array($AUTH_ID, $DMHA_1); } // status dalam keluarga
                
                elseif($DMHA_1 == 69) { $isi_model = dmha_69_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 73) { $isi_model = dmha_73_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 77) { $isi_model = dmha_77_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 81) { $isi_model = dmha_81_let_me_generate_data_array($AUTH_ID, $DMHA_1); }


                ////////////////////////////////////////////////////////////////////////////////////////////////////////// ACADION     
                    elseif($DMHA_1 == 87) { $isi_model = dmha_87_let_me_generate_data_array($AUTH_ID, $DMHA_1); }     
                    elseif($DMHA_1 == 111) { $isi_model = dmha_111_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 114) { $isi_model = dmha_114_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 167) { $isi_model = dmha_167_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 171) { $isi_model = dmha_171_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 175) { $isi_model = dmha_175_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 203) { $isi_model = dmha_203_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 330) { $isi_model = dmha_330_let_me_generate_data_array($AUTH_ID, $DMHA_1); }

                ////////////////////////////////////////////////////////////////////////////////////////////////////////// Notarion
                    elseif($DMHA_1 == 46) { $isi_model = dmha_46_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 47) { $isi_model = dmha_47_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 55) { $isi_model = dmha_55_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 60) { $isi_model = dmha_60_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 119) { $isi_model = dmha_119_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 148) { $isi_model = dmha_148_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 152) { $isi_model = dmha_152_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 255) { $isi_model = dmha_255_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 259) { $isi_model = dmha_259_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 263) { $isi_model = dmha_263_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 267) { $isi_model = dmha_267_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 275) { $isi_model = dmha_275_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 279) { $isi_model = dmha_279_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 283) { $isi_model = dmha_283_let_me_generate_data_array($AUTH_ID, $DMHA_1); }

                ////////////////////////////////////////////////////////////////////////////////////////////////////////// PAPERONE
                    elseif($DMHA_1 == 287) { $isi_model = dmha_287_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 288) { $isi_model = dmha_288_let_me_generate_data_array($AUTH_ID, $DMHA_1, $PARAM_2); }
                    elseif($DMHA_1 == 292) { $isi_model = dmha_292_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 296) { $isi_model = dmha_296_let_me_generate_data_array($AUTH_ID, $DMHA_1); }

                    elseif($DMHA_1 == 310) { $isi_model = dmha_310_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 314) { $isi_model = dmha_314_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 318) { $isi_model = dmha_318_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                //////////////////////////////////////////////////////////////////////////////////////////////////////////
            }


        // ------------------------------------------------------------------------- SEND
            if($modify_datatable == false)
            {
                return datatables()
                    ->of($isi_model)
                    ->addColumn('action', function($data) use ($AUTH_ID, $DMHA_1, $PARAM_2){                        
                        $dropdown = color_admin_apple_v42_dropdown($AUTH_ID,$data->id,$DMHA_1,$PARAM_2);
                        return $dropdown;
                    })
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->toJson();
            }

        ////////////////////////////////////////////////////////////////////////////
    }
}
