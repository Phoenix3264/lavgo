<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WwdataController extends Controller
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
                    elseif($DMHA_1 == 360) { $isi_model = dmha_360_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    
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
                    elseif($DMHA_1 == 193) { $isi_model = dmha_193_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 203) { $isi_model = dmha_203_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 330) { $isi_model = dmha_330_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 335) { $isi_model = dmha_335_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 336) { $isi_model = dmha_336_let_me_generate_data_array($AUTH_ID, $DMHA_1); }

                ////////////////////////////////////////////////////////////////////////////////////////////////////////// Notarion
                    elseif($DMHA_1 == 46) { $isi_model = dmha_46_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 47) { $isi_model = dmha_47_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 55) { $isi_model = dmha_55_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 60) { $isi_model = dmha_60_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 119) { $isi_model = dmha_119_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 148) { $isi_model = dmha_148_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 152) { $isi_model = dmha_119_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 185) { $isi_model = dmha_119_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
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

                ////////////////////////////////////////////////////////////////////////////////////////////////////////// PENELITIAN
                    elseif($DMHA_1 == 344) { $isi_model = dmha_344_let_me_generate_data_array($AUTH_ID, $DMHA_1); $modify_datatable = 'picture_date'; }
                    elseif($DMHA_1 == 348) { $isi_model = dmha_348_let_me_generate_data_array($AUTH_ID, $DMHA_1,null); $modify_datatable = 'picture_date'; }
                    elseif($DMHA_1 == 352) { $isi_model = dmha_352_let_me_generate_data_array($AUTH_ID, $DMHA_1); $modify_datatable = 'picture_date'; }
                    elseif($DMHA_1 == 364) { $isi_model = dmha_364_let_me_generate_data_array($AUTH_ID, $DMHA_1); $modify_datatable = 'picture_date'; }
                    elseif($DMHA_1 == 378) { $isi_model = dmha_378_let_me_generate_data_array($AUTH_ID, $DMHA_1); }

                ////////////////////////////////////////////////////////////////////////////////////////////////////////// Data PEndukung
                    elseif($DMHA_1 == 356) { $isi_model = dmha_356_let_me_generate_data_array($AUTH_ID, $DMHA_1); $modify_datatable = 'date'; }
                    elseif($DMHA_1 == 372) { $isi_model = dmha_372_let_me_generate_data_array($AUTH_ID, $DMHA_1); $modify_datatable = 'date'; }
                    elseif($DMHA_1 == 373) { $isi_model = dmha_373_let_me_generate_data_array($AUTH_ID, $DMHA_1); }
                    elseif($DMHA_1 == 382) { $isi_model = dmha_382_let_me_generate_data_array($AUTH_ID, $DMHA_1); $modify_datatable = 'date'; }
                    elseif($DMHA_1 == 386) { $isi_model = dmha_386_let_me_generate_data_array($AUTH_ID, $DMHA_1); $modify_datatable = 'date'; }
                    elseif($DMHA_1 == 390) { $isi_model = dmha_390_let_me_generate_data_array($AUTH_ID, $DMHA_1); $modify_datatable = 'date'; }
                    elseif($DMHA_1 == 395) { $isi_model = dmha_395_let_me_generate_data_array($AUTH_ID, $DMHA_1); }



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
            elseif($modify_datatable == 'picture')
            {
                $DMHA_4 = 'pictures';
                $link = dmha_1_id_check_col($DMHA_1,'link');

                return datatables()
                    ->of($isi_model)
                    ->addColumn('filename', function($data) use ($link,$DMHA_4,$DMHA_1){                        
                        $image = general_image($link,$DMHA_4,$data->id,$DMHA_1,null,'150px');
                        return $image;
                    })
                    ->addColumn('action', function($data) use ($AUTH_ID, $DMHA_1, $PARAM_2){                        
                        $dropdown = color_admin_apple_v42_dropdown($AUTH_ID,$data->id,$DMHA_1,$PARAM_2);
                        return $dropdown;
                    })
                    ->rawColumns(['filename','action'])
                    ->addIndexColumn()
                    ->toJson();
            }
            elseif($modify_datatable == 'picture_date')
            {
                $DMHA_4 = 'pictures';
                $link = dmha_1_id_check_col($DMHA_1,'link');

                return datatables()
                    ->of($isi_model)
                    ->addColumn('filename', function($data) use ($link,$DMHA_4,$DMHA_1){                        
                        $image = general_image($link,$DMHA_4,$data->id,$DMHA_1,null,'150px');
                        return $image;
                    })
                    ->addColumn('created_at', function($data) use ($link,$DMHA_4,$DMHA_1){                        
                        $tanggal = date("d-m-Y", strtotime($data->created_at));
                        return $tanggal;
                    })
                    ->addColumn('action', function($data) use ($AUTH_ID, $DMHA_1, $PARAM_2){                        
                        $dropdown = color_admin_apple_v42_dropdown($AUTH_ID,$data->id,$DMHA_1,$PARAM_2);
                        return $dropdown;
                    })
                    ->rawColumns(['filename','created_at','action'])
                    ->addIndexColumn()
                    ->toJson();
            }
            elseif($modify_datatable == 'date')
            {
                $DMHA_4 = 'pictures';
                $link = dmha_1_id_check_col($DMHA_1,'link');

                return datatables()
                    ->of($isi_model)
                    ->addColumn('created_at', function($data) use ($link,$DMHA_4,$DMHA_1){                        
                        $tanggal = date("d-m-Y", strtotime($data->created_at));
                        return $tanggal;
                    })
                    ->addColumn('action', function($data) use ($AUTH_ID, $DMHA_1, $PARAM_2){                        
                        $dropdown = color_admin_apple_v42_dropdown($AUTH_ID,$data->id,$DMHA_1,$PARAM_2);
                        return $dropdown;
                    })
                    ->rawColumns(['created_at','action'])
                    ->addIndexColumn()
                    ->toJson();
            }

        ////////////////////////////////////////////////////////////////////////////
    }

    
    public function accordion()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';            
            $AUTH_ID    = $_GET['a'];
            $DMHA_1     = $_GET['p'];
            $DMHA_271     = $_GET['t'];
            $PARAM_2         = $_GET['p2'];
            $PARAM_3         = $_GET['p3'];
            $id_data         = $_GET['di'];

            $dmha_2  = dmha_1_id_check_col($DMHA_1,'dmha_2');
        // ------------------------------------------------------------------------- ACTION

            if($dmha_2 == 1)
            {
                $isi .= color_admin_v42_hidden($AUTH_ID,$DMHA_1);
                $isi .= color_admin_v42_form($AUTH_ID,$DMHA_1);
            }
            elseif($dmha_2 == 2)
            {
                $isi .= color_admin_material_v42_hidden($DMHA_1,$DMHA_271,$PARAM_2,$id_data);
                
                $isi .= color_admin_material_v42_form($AUTH_ID,$DMHA_1,$DMHA_271,$id_data);
            }
            elseif($dmha_2 == 4)
            {
                if($DMHA_271 == 4)
                {
                    $isi .= color_admin_apple_v42_flash_message(dmha_40_id_check_col(3,'status'),dmha_40_id_check_col(3,'nama'));
                }

                //$isi .= color_admin_apple_v42_hidden($AUTH_ID,$DMHA_1,$DMHA_271,$PARAM_2,$PARAM_3,$id_data);
                
                //$isi .= color_admin_apple_v42_form($AUTH_ID,$DMHA_1,$DMHA_271,$id_data);


                ////////////////////////////////////////////////////////////////////////////////////////////////////////// ACADION     
                    if($DMHA_1 == 251) { $isi_model = dmha_251_let_me_generate_data_array($AUTH_ID, $DMHA_1); }     
                $isi .= '
                <div class="card">
                    <div class="card-header bg-black text-white pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false">
                        Collapsible Group Item #1
                    </div>
                    <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 
                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                ';


            }
            
        // ------------------------------------------------------------------------- SEND
            die(json_encode(array(
                "isi" => $isi
            )));
        ////////////////////////////////////////////////////////////////////////////
    }

    public function autocomplete(Request $request)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $output = '';

            if($request->ajax()) {

        // ------------------------------------------------------------------------- ACTION
                if($request->id == 22 )
                { $data = dmha_81_let_me_generate_data_array(NULL,$request->autocomplete,'autocomplete'); }
                elseif($request->id == 119 ) // Pemohon
                { $data = dmha_119_let_me_generate_data_array_by_nik(NULL,$request->autocomplete); }
                elseif($request->id == 263 ) // SPPT
                { $data = dmha_263_let_me_generate_data_array_by_nop(NULL,$request->autocomplete); }
               
                if (count($data)>0) {
                  
                    $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
                  
                    foreach ($data as $row)
                    {
                        if($request->id == 22 )
                        { $output .= '<li class="list-group-item" id="'.$request->id.'" >'.$row->id.'; '.$row->nama.';</li>'; }
                        elseif($request->id == 119 ) // Pemohon
                        { $output .= '<li class="list-group-item" id="'.$request->id.'" >'.$row->nik.'; '.$row->nama.';</li>'; }
                        elseif($request->id == 263 ) // SPPT
                        { $output .= '<li class="list-group-item" id="'.$request->id.'" >'.$row->nop.'; '.$row->nama.';</li>'; }
                    }
                  
                    $output .= '</ul>';
                }
                else {
                 
                    $output .= '<li class="list-group-item">'.'No results'.'</li>';
                }
               

        // ------------------------------------------------------------------------- SEND
                return $output;
            }
		//////////////////////////////////////////////////////////////////////////// 	
        
        
    }

    public function autocompletez(Request $request,$param_1)
    {

            $isi_model = dmha_81_let_me_generate_data_array(NULL,$request->autocomplete,'autocomplete');
            //return $isi_model;

            return response()->json($isi_model);
        
    }

}
