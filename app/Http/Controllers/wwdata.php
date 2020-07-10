<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wwdata extends Controller
{
    //
    public function generate(Request $request,$param_1,$param_2)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';     
            $AUTH_ID = $param_1;  
            $DMHA_1 = $param_2;  
            $data = array();
            $data['AUTH_ID'] = $param_1;  
            $data['DMHA_1'] = $param_2;  
            
            $modify_datatable = false;

        // ------------------------------------------------------------------------- ACTION
            if($request->ajax())
            {
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
                elseif($DMHA_1 == 40) { $isi_model = dmha_40_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 47) { $isi_model = dmha_47_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 51) { $isi_model = dmha_51_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 56) { $isi_model = dmha_56_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 60) { $isi_model = dmha_60_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 64) { $isi_model = dmha_64_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 69) { $isi_model = dmha_69_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 73) { $isi_model = dmha_73_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 77) { $isi_model = dmha_77_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 81) { $isi_model = dmha_81_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 87) { $isi_model = dmha_87_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 91) { $isi_model = dmha_91_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 95) { $isi_model = dmha_95_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 99) { $isi_model = dmha_99_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 103) { $isi_model = dmha_103_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 107) { $isi_model = dmha_107_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
            }


        // ------------------------------------------------------------------------- SEND
            if($modify_datatable == false)
            {
                return datatables()
                    ->of($isi_model)
                    ->addColumn('action', function($data) use ($AUTH_ID, $DMHA_1){                        
                        $dropdown = color_admin_v42_dropdown($AUTH_ID,$DMHA_1,$data->id);
                        return $dropdown;
                    })
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    //->make(true);
                    ->toJson();
            }

        ////////////////////////////////////////////////////////////////////////////
    }
}
