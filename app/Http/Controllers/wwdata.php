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

                elseif($DMHA_1 == 87) { $isi_model = dmha_87_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
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

                // acadion
                elseif($DMHA_1 == 167) { $isi_model = dmha_167_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 171) { $isi_model = dmha_1_let_me_generate_data_array($AUTH_ID, $DMHA_1,'kelas'); }

                elseif($DMHA_1 == 175) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,175); } // Kelas X1
                elseif($DMHA_1 == 179) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,179); } // Kelas X2
                elseif($DMHA_1 == 183) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,183); } // Kelas X3
                elseif($DMHA_1 == 187) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,187); } // Kelas X4
                elseif($DMHA_1 == 191) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,191); } // Kelas X5
                elseif($DMHA_1 == 195) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,195); } // Kelas X6
                elseif($DMHA_1 == 199) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,199); } // Kelas X7
                elseif($DMHA_1 == 203) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,203); } // Kelas X8
                elseif($DMHA_1 == 207) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,207); } // Kelas X9

                elseif($DMHA_1 == 211) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,211); } // Kelas XI MIPA 1
                elseif($DMHA_1 == 215) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,215); } // Kelas XI MIPA 2
                elseif($DMHA_1 == 219) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,219); } // Kelas XI MIPA 3

                elseif($DMHA_1 == 223) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,223); } // Kelas XI IIS 1
                elseif($DMHA_1 == 227) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,227); } // Kelas XI IIS 2
                elseif($DMHA_1 == 231) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,231); } // Kelas XI IIS 3

                elseif($DMHA_1 == 235) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,235); } // Kelas XI IBB 1
                elseif($DMHA_1 == 239) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,239); } // Kelas XI IBB 2
                elseif($DMHA_1 == 243) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,243); } // Kelas XI IBB 3
            
                elseif($DMHA_1 == 251) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,251); } // Kelas XII MIPA 1
                elseif($DMHA_1 == 255) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,255); } // Kelas XII MIPA 2
                elseif($DMHA_1 == 259) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,259); } // Kelas XII MIPA 3

                elseif($DMHA_1 == 263) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,263); } // Kelas XII IIS 1
                elseif($DMHA_1 == 267) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,267); } // Kelas XII IIS 2
                elseif($DMHA_1 == 271) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,271); } // Kelas XII IIS 3

                elseif($DMHA_1 == 275) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,275); } // Kelas XII IBB 1
                elseif($DMHA_1 == 279) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,279); } // Kelas XII IBB 2
                elseif($DMHA_1 == 283) { $isi_model = dmha_163_let_me_generate_data_array($AUTH_ID, $DMHA_1,283); } // Kelas XII IBB 3

                // paperone
                elseif($DMHA_1 == 287) { $isi_model = dmha_287_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 288) { $isi_model = dmha_288_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 292) { $isi_model = dmha_292_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 296) { $isi_model = dmha_296_let_me_generate_data_array($AUTH_ID, $DMHA_1); }

                elseif($DMHA_1 == 310) { $isi_model = dmha_310_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 314) { $isi_model = dmha_314_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                elseif($DMHA_1 == 318) { $isi_model = dmha_318_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
            }


        // ------------------------------------------------------------------------- SEND
            if($modify_datatable == false)
            {
                return datatables()
                    ->of($isi_model)
                    ->addColumn('action', function($data) use ($AUTH_ID, $DMHA_1, $PARAM_2){                        
                        $dropdown = color_admin_material_v42_dropdown($AUTH_ID,$data->id,$DMHA_1,$PARAM_2);
                        return $dropdown;
                    })
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->toJson();
            }

        ////////////////////////////////////////////////////////////////////////////
    }
}
