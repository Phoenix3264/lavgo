<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;

class WwformController extends Controller
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
            $DMHA_271     = $_GET['t'];
            $PARAM_2         = $_GET['p2'];
            $PARAM_3         = $_GET['p3'];
            $id_data         = $_GET['di'];

            $dmha_2  = dmha_1_id_check_col($DMHA_1,'dmha_2');
            
            $check = dmha_8_is_it_dev_mode();
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

                // $isi.= $check;
                if($check == ' Development')
                {
                    $isi .= color_admin_apple_v42_hidden($AUTH_ID,$DMHA_1,$DMHA_271,$PARAM_2,$PARAM_3,$id_data);
                }

                
                $isi .= color_admin_apple_v42_form($AUTH_ID,$DMHA_1,$DMHA_271,$id_data);
            }
            
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

            $FLASH_MESSAGE = 1;

            $DMHA_1 = $request->p;
            $DMHA_271 = $request->t;
            $PARAM_2 = $request->p2;
            $PARAM_3 = $request->p3;
            $ID = $request->di;
            $AUTH_ID = $request->a;
            
        // ------------------------------------------------------------------------- ISSUE 1
            /* Flash data tidak selalu muncul 
                Hipotesis : proses ajax terlalu cepat
                Solusi : Flash Message ditaruh diawal crud data
            */

        // ------------------------------------------------------------------------- SUBMITTING DATA
            //////////////////////////////////////////////////////////////////////////////////////////// SYSTEM
                if($DMHA_1 == 1) {   
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_1_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_1_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_1_delete_me($ID); }
                }
                elseif($DMHA_1 == 2) {  $FLASH_MESSAGE = 2;     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_2_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_2_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_2_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 3) {  $FLASH_MESSAGE = 2;     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_3_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_3_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_3_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 4) {  $FLASH_MESSAGE = 4;     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_4_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_4_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_4_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 5) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_5_create_me($request->all());  }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_5_update_me($ID,$request->all());  }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_5_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 8) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_8_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_8_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_8_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 9) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; DMHA_271_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; DMHA_271_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_271_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 13) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_13_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_13_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_13_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 14) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_14_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_14_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_14_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 15) {                     
                    dmha_15_delete_me($ID);
                    $FLASH_MESSAGE = 4;

                    for ($i=0; $i<count($_POST['urutan']); $i++)
                    {
                        $POST_dmha_13                   = $_POST['dmha_13'][$i];
                        $POST_urutan                    = $_POST['urutan'][$i];
                        
                        // if(isset($_POST['urutan'][$i])){
                        //     $POST_urutan_tabel              = NULL;
                        //     $POST_urutan_tabel_mobile              = NULL;
                        // }else{
                            $POST_urutan_tabel              = $_POST['urutan_tabel'][$i];
                            $POST_urutan_tabel_mobile       = $_POST['urutan_tabel_mobile'][$i];
                        //}


                        if($POST_urutan != '')
                        {
                            dmha_15_create_me($ID,$POST_dmha_13,$POST_urutan,$POST_urutan_tabel,$POST_urutan_tabel_mobile);
                        }
                    }
                }
                elseif($DMHA_1 == 40) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_40_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_40_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_40_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 112) {     
                    dmha_1_create_sub_fitur($request->nama);
                }
                elseif($DMHA_1 == 113) {     
                    dmha_1_create_sub_fitur_complete($request->dmha_1, $request->nama);
                }
                elseif($DMHA_1 == 118) {     
                    dmha_1_create_fitur_complete($request->nama);
                    $FLASH_MESSAGE = 2;
                }
                elseif($DMHA_1 == 271) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_271_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_271_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_271_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 360) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_360_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_360_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_360_softdelete_me($ID); }
                }


            // System            
                elseif($DMHA_1 == 308) {     
                    dmha_1_create_fitur_complete_details($request->nama);
                }       
                elseif($DMHA_1 == 309) {     
                    dmha_1_create_fitur_complete_sub_detail($request->nama);
                }
                elseif($DMHA_1 == 322) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_322_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_322_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_322_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 326) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_326_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_326_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_326_softdelete_me($ID); }
                }


                elseif($DMHA_1 == 122) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_122_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_122_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_122_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 157) {     
                    dmha_157_delete_me($ID);
                    for ($i=0; $i<count($_POST['dmha_1']); $i++)
                    {
                        $POST_dmha_1           = $_POST['dmha_1'][$i];
                        dmha_157_create_me($ID,$POST_dmha_1);
                    }
                    $FLASH_MESSAGE = 2;
                }
                elseif($DMHA_1 == 158) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; user_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; user_update_me($ID,$request->all()); }
                }
                elseif($DMHA_1 == 162) {     
                    dmha_162_delete_me($ID);
                    for ($i=0; $i<count($_POST['dmha_1']); $i++)
                    {
                        $POST_dmha_1           = $_POST['dmha_1'][$i];
                        dmha_162_create_me($ID,$POST_dmha_1);
                    }
                    $FLASH_MESSAGE = 2;
                }
                elseif($DMHA_1 == 401) {     
                    dmha_401_delete_me($ID);
                    for ($i=0; $i<count($_POST['dmha_122']); $i++)
                    {
                        $POST_dmha_122           = $_POST['dmha_122'][$i];
                        dmha_401_create_me($ID,$POST_dmha_122);
                    }
                    $FLASH_MESSAGE = 2;
                }


                // Additional

            //////////////////////////////////////////////////////////////////////////////////////////// acadion
                elseif($DMHA_1 == 87) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_87_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_87_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_87_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 111) {     
                    
                    $dmha_335 = dmha_87_user_id_check_col($AUTH_ID,'dmha_335');

                    $dmha_171 = $request->dmha_171;

                    $dmha_336 = $request->dmha_336;
                        $nama = dmha_336_id_check_col($dmha_336,'nama');
                        $pra_nama = preg_replace("/[^a-zA-Z0-9\s]/", " ", $nama);

                    $filename = replace_to_underscore($pra_nama).'_'.$dmha_335.'_'.$dmha_171.'.'.$request->filename->getClientOriginalExtension();

                    $storage_files = 'public/storage/dmha_111/';
                    $filename_exist  = public_path($storage_files).$filename;

                    if (Storage::exists($filename_exist)) {
                        Storage::delete($filename_exist);
                    }     

                    if (!is_null($filename_exist)) {
                        $request->filename->storeAs($storage_files,$filename);    
                    }  

                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_111_create_me($dmha_335,$dmha_171,$dmha_336,$filename); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_111_update_me($ID,$dmha_335,$dmha_171,$dmha_336,$filename); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_111_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 114) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_114_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_114_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_114_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 171) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_171_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_171_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_171_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 175) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_175_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_175_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_175_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 193) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_193_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_193_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_193_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 330) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_330_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_330_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_330_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 335) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_335_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_335_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_335_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 336) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_336_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_336_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_336_softdelete_me($ID); }
                }


            //////////////////////////////////////////////////////////////////////////////////////////// Notarion
                elseif($DMHA_1 == 46) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_46_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_46_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_46_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 47) {   
                    
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_47_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_47_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 9) { 
                        $temp = $request->autocomplete;
                        $exp_nama = explode("; ", $temp);

                        $dmha_46 = $PARAM_2;
                        $berkas_id = $PARAM_3;
                        $dmha = $ID;
                        $data_id = $exp_nama[0];

                        dmha_47_create_me($dmha_46,$berkas_id,$dmha,$data_id);                         
                    }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_47_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 55) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_55_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_55_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_55_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 60) {     
                    $nama = $request->nama;

                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_60_create_me($PARAM_2,$nama); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_60_update_me($ID,$PARAM_2,$nama); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_60_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 148) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_148_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_148_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_148_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 188) {     
                    $nama = $request->nama;
                    $link = replace_to_underscore($nama);

                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_188_create_me($PARAM_3,$nama,$link); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_188_update_me($ID,$PARAM_3,$nama,$link); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_188_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 267) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_267_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_267_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_267_softdelete_me($ID); }
                }
            
            ////////////////////////////////////////////////////////////////////////////////////////////////////////// Pihak Pemberkasan
                elseif($DMHA_1 == 119 || $DMHA_1 == 148 || $DMHA_1 == 152 || $DMHA_1 == 334) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_119_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_119_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_119_softdelete_me($ID); }
                }

            ////////////////////////////////////////////////////////////////////////////////////////////////////////// Pendukung Pemberkasan
                elseif($DMHA_1 == 259) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_259_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_259_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_259_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 263) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_263_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_263_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_263_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 275) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_275_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_275_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_275_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 279) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_279_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_279_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_279_softdelete_me($ID); }
                }

            ////////////////////////////////////////////////////////////////////////////////////////////////////////// Data Pendukung KTP
                elseif($DMHA_1 == 126) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_126_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_126_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_126_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 130) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_130_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_130_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_130_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 134) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_134_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_134_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_134_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 138) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_138_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_138_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_138_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 144) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_144_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_144_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_144_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 247) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_247_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_247_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_247_softdelete_me($ID); }
                }

            ////////////////////////////////////////////////////////////////////////////////////////////////////////// Alas Hak
                elseif($DMHA_1 == 255) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_255_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_255_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_255_softdelete_me($ID); }
                }   
                elseif($DMHA_1 == 283) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_283_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_283_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_283_softdelete_me($ID); }
                }

            ////////////////////////////////////////////////////////////////////////////////////////////////////////// Wilayah

            // paperone
                elseif($DMHA_1 == 287) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_287_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_287_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_287_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 288) { // Detail Library   
                    $dmha_292 = $request->dmha_292;
                    $dmha_296 = $request->dmha_296;

                    $dmha_287 = $PARAM_2;

                    $nama = $request->nama;
                    $author = $request->author;
                    $publish = $request->publish;
                    $keyword = $request->keyword;

                    $exp_nama = explode(' ',$author);

                    $pra_nama = preg_replace("/[^a-zA-Z0-9\s]/", " ", $nama);

                    $filename = $exp_nama[0].'_'.$publish.'_-_'.replace_to_underscore($pra_nama).'.'.$request->filename->getClientOriginalExtension();
                    
                    $storage_files = 'public/storage/dmha_288/'.$PARAM_2;

                    $filename_exist  = public_path($storage_files).$filename;
                    if (Storage::exists($filename_exist)) {
                        Storage::delete($filename_exist);
                    }                
                    $request->filename->storeAs($storage_files,$filename);

                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_288_create_me($dmha_292,$dmha_296,$dmha_287,$nama,$author,$publish,$keyword,$filename); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_288_update_me($ID,$dmha_292,$dmha_296,$dmha_287,$nama,$author,$publish,$keyword,$filename); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_288_softdelete_me($ID); }
                        
                }
                elseif($DMHA_1 == 292) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_292_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_292_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_292_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 296) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_296_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_296_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_296_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 310) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_310_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_310_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_310_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 314) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_314_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_314_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_314_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 318) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_318_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_318_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_318_softdelete_me($ID); }
                }
            
            //////////////////////////////////////////////////////////////////////////////////////////// Penelitian
                elseif($DMHA_1 == 344) {     
                    
                    $latitude = $request->latitude;
                    $longitude = $request->longitude;
                    $jalan = $request->jalan;
                    $kota = $request->kota;
                    $lebar = $request->lebar;
                    $tebal = $request->tebal;
                    $dmha_356 = $request->dmha_356;
                    $dmha_382 = $request->dmha_382;
                    $dmha_386 = $request->dmha_386;
                    $dmha_390 = $request->dmha_390;


                    $filename = null;
                    if(isset($request->filename))
                    {
                        $filename = Str::random(15).'.'.$request->filename->getClientOriginalExtension();
                        $storage_files = 'public/storage/dmha_344/';
                        $filename_exist  = public_path($storage_files).$filename;

                        if (Storage::exists($filename_exist)) {
                            Storage::delete($filename_exist);
                        }     

                        if (!is_null($filename_exist)) {
                            $request->filename->storeAs($storage_files,$filename);    
                        }  
                    }

                    

                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_344_create_me($filename,$latitude,$longitude,$jalan,$kota,$lebar,$tebal,$dmha_356,$dmha_382,$dmha_386,$dmha_390); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_344_update_me($ID,$filename,$latitude,$longitude,$jalan,$kota,$lebar,$tebal,$dmha_356,$dmha_382,$dmha_386,$dmha_390); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_344_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 348) {   
                    
                    $latitude = $request->latitude;
                    $longitude = $request->longitude;
                    $dmha_364 = $request->dmha_364;
                    $dmha_372 = $request->dmha_372;
                    $jumlah = $request->jumlah;
                    
                    $filename = null;
                    if(isset($request->filename))
                    {
                        $filename = Str::random(15).'.'.$request->filename->getClientOriginalExtension();
                        $storage_files = 'public/storage/dmha_348/';
                        $filename_exist  = public_path($storage_files).$filename;

                        if (Storage::exists($filename_exist)) {
                            Storage::delete($filename_exist);
                        }     

                        if (!is_null($filename_exist)) {
                            $request->filename->storeAs($storage_files,$filename);    
                        }  
                    }

                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_348_create_me($filename,$latitude,$longitude,$dmha_364,$dmha_372,$jumlah); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_348_update_me($ID,$filename,$latitude,$longitude,$dmha_364,$dmha_372,$jumlah); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_348_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 352) {   

                    $latitude = $request->latitude;
                    $longitude = $request->longitude;
                    $dmha_364 = $request->dmha_364;
                    
                    $filename = null;
                    if(isset($request->filename))
                    {
                        $filename = Str::random(15).'.'.$request->filename->getClientOriginalExtension();
                        $storage_files = 'public/storage/dmha_352/';
                        $filename_exist  = public_path($storage_files).$filename;

                        if (Storage::exists($filename_exist)) {
                            Storage::delete($filename_exist);
                        }     

                        if (!is_null($filename_exist)) {
                            $request->filename->storeAs($storage_files,$filename);    
                        }  
                    }

                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_352_create_me($filename,$latitude,$longitude,$dmha_364); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_352_update_me($ID,$filename,$latitude,$longitude,$dmha_364); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_352_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 378) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_378_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_378_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_378_softdelete_me($ID); }
                }

                
            //////////////////////////////////////////////////////////////////////////////////////////// Data PEndukung
                elseif($DMHA_1 == 356) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_356_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_356_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_356_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 364) {    

                    $latitude = $request->latitude;
                    $longitude = $request->longitude;
                    $nama = $request->nama;
                    $kapasitas = $request->kapasitas;

                    $filename = null;
                    if(isset($request->filename))
                    {
                        $filename = Str::random(15).'.'.$request->filename->getClientOriginalExtension();
                        $storage_files = 'public/storage/dmha_364/';
                        $filename_exist  = public_path($storage_files).$filename;

                        if (Storage::exists($filename_exist)) {
                            Storage::delete($filename_exist);
                        }     

                        if (!is_null($filename_exist)) {
                            $request->filename->storeAs($storage_files,$filename);    
                        }  
                    }  
                    
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_364_create_me($filename,$latitude,$longitude,$nama,$kapasitas); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_364_update_me($ID,$filename,$latitude,$longitude,$nama,$kapasitas); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_364_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 372) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_372_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_372_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_372_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 373) {     

                    $peneliti = $request->peneliti;
                    $nama = $request->nama;
                    $deskripsi = $request->deskripsi;
                    $tahun = $request->tahun;

                    $filename_logo_instansi = Str::random(15).'.'.$request->logo_instansi->getClientOriginalExtension();
                    $filename_logo_investor = Str::random(15).'.'.$request->logo_investor->getClientOriginalExtension();

                    $storage_files = 'public/storage/dmha_373/';
                    $filename_exist_logo_instansi  = public_path($storage_files).$filename_logo_instansi;
                    $filename_exist_logo_investor  = public_path($storage_files).$filename_logo_investor;

                    if (Storage::exists($filename_exist_logo_instansi)) {
                        Storage::delete($filename_exist_logo_instansi);
                    }     
                    if (Storage::exists($filename_exist_logo_investor)) {
                        Storage::delete($filename_exist_logo_investor);
                    }    

                    if (!is_null($filename_exist_logo_instansi)) {
                        $request->filename->storeAs($storage_files,$filename_logo_instansi);    
                    }   
                    if (!is_null($filename_exist_logo_investor)) {
                        $request->filename->storeAs($storage_files,$filename_logo_investor);    
                    }   

                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_373_create_me($peneliti,$nama,$deskripsi,$tahun,$filename_logo_instansi,$filename_logo_investor); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_373_update_me($ID,$peneliti,$nama,$deskripsi,$tahun,$filename_logo_instansi,$filename_logo_investor); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_373_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 382) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_382_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_382_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_382_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 386) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_386_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_386_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_386_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 390) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_390_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_390_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_390_softdelete_me($ID); }
                }
                elseif($DMHA_1 == 395) {     
                    if($DMHA_271 == 2) {  $FLASH_MESSAGE = 2; dmha_395_create_me($request->all()); }
                    elseif($DMHA_271 == 3) {  $FLASH_MESSAGE = 2; dmha_395_update_me($ID,$request->all()); }
                    elseif($DMHA_271 == 4) {  $FLASH_MESSAGE = 4; dmha_395_softdelete_me($ID); }
                }


        // ------------------------------------------------------------------------- SEND
            Session::flash('message',$FLASH_MESSAGE);
            return redirect(rules_link_after_post($DMHA_1,null,$PARAM_2,$PARAM_3,$DMHA_271));
            //return back();
    }
}
