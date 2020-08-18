<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Session;

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

                $isi .= color_admin_apple_v42_hidden($AUTH_ID,$DMHA_1,$DMHA_271,$PARAM_2,$PARAM_3,$id_data);
                
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

        // ------------------------------------------------------------------------- SUBMITTING DATA
            //////////////////////////////////////////////////////////////////////////////////////////// SYSTEM
                if($DMHA_1 == 1) {   
                    if($DMHA_271 == 2) { dmha_1_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_1_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_1_delete_me($ID); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 2) {     
                    if($DMHA_271 == 2) { dmha_2_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_2_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 3) {     
                    if($DMHA_271 == 2) { dmha_3_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_3_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 4) {     
                    if($DMHA_271 == 2) { dmha_4_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_4_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 5) {                       
                    if($DMHA_271 == 2) { dmha_5_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_5_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 4) { dmha_5_softdelete_me($ID); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 8) {     
                    if($DMHA_271 == 2) { dmha_8_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_8_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 9) {     
                    if($DMHA_271 == 2) { DMHA_271_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { DMHA_271_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 13) {     
                    if($DMHA_271 == 2) { dmha_13_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_13_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 14) {     
                    if($DMHA_271 == 2) { dmha_14_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_14_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 15) {                     
                    dmha_15_delete_me($ID);
                    
                    for ($i=0; $i<count($_POST['urutan']); $i++)
                    {
                        $POST_dmha_13                   = $_POST['dmha_13'][$i];
                        $POST_urutan                    = $_POST['urutan'][$i];
                        
                        if(isset($_POST['urutan_tabel'][$i])){
                            $POST_urutan_tabel              = NULL;
                        }else{
                            $POST_urutan_tabel              = $_POST['urutan_tabel'][$i];
                        }


                        if($POST_urutan != '')
                        {
                            dmha_15_create_me($ID,$POST_dmha_13,$POST_urutan,$POST_urutan_tabel);
                        }
                    }

                    $FLASH_MESSAGE = 2;
                }
                elseif($DMHA_1 == 40) {     
                    if($DMHA_271 == 2) { dmha_40_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_40_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 112) {     
                    dmha_1_create_sub_fitur($request->nama);
                    $FLASH_MESSAGE = 2;
                }
                elseif($DMHA_1 == 113) {     
                    dmha_1_create_sub_fitur_complete($request->dmha_1, $request->nama);
                    $FLASH_MESSAGE = 2;
                }
                elseif($DMHA_1 == 118) {     
                    dmha_1_create_fitur_complete($request->nama);
                    $FLASH_MESSAGE = 2;
                }
                elseif($DMHA_1 == 271) {     
                    if($DMHA_271 == 2) { dmha_271_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_271_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }


            // System            
                elseif($DMHA_1 == 308) {     
                    dmha_1_create_fitur_complete_details($request->nama);
                    $FLASH_MESSAGE = 2;
                }       
                elseif($DMHA_1 == 309) {     
                    dmha_1_create_fitur_complete_sub_detail($request->nama);
                    $FLASH_MESSAGE = 2;
                }
                elseif($DMHA_1 == 322) {     
                    if($DMHA_271 == 2) { dmha_322_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_322_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 326) {     
                    if($DMHA_271 == 2) { dmha_326_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_326_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }


                elseif($DMHA_1 == 122) {     
                    if($DMHA_271 == 2) { dmha_122_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_122_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 126) {     
                    if($DMHA_271 == 2) { dmha_126_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_126_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 130) {     
                    if($DMHA_271 == 2) { dmha_130_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_130_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 134) {     
                    if($DMHA_271 == 2) { dmha_134_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_134_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 138) {     
                    if($DMHA_271 == 2) { dmha_138_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_138_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 144) {     
                    if($DMHA_271 == 2) { dmha_144_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_144_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
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
                    if($DMHA_271 == 2) { user_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { user_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
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


                // Additional
                elseif($DMHA_1 == 247) {     
                    if($DMHA_271 == 2) { dmha_247_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_247_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }

            //////////////////////////////////////////////////////////////////////////////////////////// acadion
                elseif($DMHA_1 == 87) {     
                    if($DMHA_271 == 2) { dmha_87_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_87_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
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

                    if($DMHA_271 == 2) { dmha_111_create_me($dmha_335,$dmha_171,$dmha_336,$filename); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_111_update_me($ID,$dmha_335,$dmha_171,$dmha_336,$filename); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 114) {     
                    if($DMHA_271 == 2) { dmha_114_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_114_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 171) {     
                    if($DMHA_271 == 2) { dmha_171_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_171_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 175) {     
                    if($DMHA_271 == 2) { dmha_175_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_175_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 193) {     
                    if($DMHA_271 == 2) { dmha_193_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_193_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 330) {     
                    if($DMHA_271 == 2) { dmha_330_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_330_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 335) {     
                    if($DMHA_271 == 2) { dmha_335_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_335_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 336) {     
                    if($DMHA_271 == 2) { dmha_336_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_336_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }


            //////////////////////////////////////////////////////////////////////////////////////////// Notarion
                elseif($DMHA_1 == 46) {     
                    if($DMHA_271 == 2) { dmha_46_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_46_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 47) {   
                    
                    if($DMHA_271 == 2) { dmha_47_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_47_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 9) { 
                        $temp = $request->autocomplete;
                        $exp_nama = explode("; ", $temp);

                        $dmha_46 = $PARAM_2;
                        $berkas_id = $PARAM_3;
                        $dmha = $ID;
                        $data_id = $exp_nama[0];

                        dmha_47_create_me($dmha_46,$berkas_id,$dmha,$data_id); 
                        
                        $FLASH_MESSAGE = 2; 
                    }
                }
                elseif($DMHA_1 == 55) {     
                    if($DMHA_271 == 2) { dmha_55_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_55_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 60) {     
                    if($DMHA_271 == 2) { dmha_60_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_60_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 60) {     
                    if($DMHA_271 == 2) { dmha_60_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_60_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 119 || $DMHA_1 == 152 || $DMHA_1 == 185) {     
                    if($DMHA_271 == 2) { dmha_119_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_119_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 148) {     
                    if($DMHA_271 == 2) { dmha_148_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_148_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 255) {     
                    if($DMHA_271 == 2) { dmha_255_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_255_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 259) {     
                    if($DMHA_271 == 2) { dmha_259_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_259_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 263) {     
                    if($DMHA_271 == 2) { dmha_263_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_263_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 267) {     
                    if($DMHA_271 == 2) { dmha_267_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_267_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 275) {     
                    if($DMHA_271 == 2) { dmha_275_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_275_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 279) {     
                    if($DMHA_271 == 2) { dmha_279_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_279_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 283) {     
                    if($DMHA_271 == 2) { dmha_283_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_283_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }


            // paperone
                elseif($DMHA_1 == 287) {     
                    if($DMHA_271 == 2) { dmha_287_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_287_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
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

                    if($DMHA_271 == 2) { dmha_288_create_me($dmha_292,$dmha_296,$dmha_287,$nama,$author,$publish,$keyword,$filename); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_288_update_me($ID,$dmha_292,$dmha_296,$dmha_287,$nama,$author,$publish,$keyword,$filename); $FLASH_MESSAGE = 2; }
                        
                }
                elseif($DMHA_1 == 292) {     
                    if($DMHA_271 == 2) { dmha_292_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_292_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 296) {     
                    if($DMHA_271 == 2) { dmha_296_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_296_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 310) {     
                    if($DMHA_271 == 2) { dmha_310_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_310_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 314) {     
                    if($DMHA_271 == 2) { dmha_314_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_314_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 318) {     
                    if($DMHA_271 == 2) { dmha_318_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_318_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
            
            //////////////////////////////////////////////////////////////////////////////////////////// Penelitian
                elseif($DMHA_1 == 344) {     
                    if($DMHA_271 == 2) { dmha_344_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_344_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 348) {     
                    if($DMHA_271 == 2) { dmha_348_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_348_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 352) {     
                    if($DMHA_271 == 2) { dmha_352_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_352_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }
                elseif($DMHA_1 == 356) {     
                    if($DMHA_271 == 2) { dmha_356_create_me($request->all()); $FLASH_MESSAGE = 2; }
                    elseif($DMHA_271 == 3) { dmha_356_update_me($ID,$request->all()); $FLASH_MESSAGE = 2; }
                }


        // ------------------------------------------------------------------------- SEND
            Session::flash('message',$FLASH_MESSAGE);

    }
}
