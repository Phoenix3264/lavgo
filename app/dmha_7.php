<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property string $link
 * @property int $dmha_2
 * @property int $dmha_3
 * @property int $dmha_4
 * @property int $dmha_5
 * @property int $dmha_6
 * @property int $dmha_7
 * @property boolean $has_sub
 * @property boolean $additional_script
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_7 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_7';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'link', 'dmha_2', 'dmha_3', 'dmha_4', 'dmha_5', 'dmha_6', 'dmha_7', 'has_sub', 'additional_script', 'created_at', 'updated_at', 'deleted_at'];

    // -----------------------------------------------------------------------------------------------------------------------------
        public static function let_me_check_what_is_your_dmha_id($LINK)
        {
            // ------------------------------------------------------------------------- INITIALIZE
                $isi = '';

            // ------------------------------------------------------------------------- ACTION
                $isi = dmha_7::where('link','like',$LINK)->first();

            // ------------------------------------------------------------------------- SEND
                $words = $isi;
                return $words;
            ////////////////////////////////////////////////////////////////////////////
        }
        
        
        public static function let_me_generate_sidebar($TIPE,$ID)
        {
            // ------------------------------------------------------------------------- INITIALIZE
                $isi = '';

            // ------------------------------------------------------------------------- ACTION
                if($TIPE == 'level_1')
                {
                    $isi = dmha_7::whereNull('deleted_at')
                        ->whereNull('dmha_7')										
                        ->orderBy('id','asc')
                        ->get();
                }
                elseif($TIPE == 'level_2')
                {
                    $isi = dmha_7::whereNull('deleted_at')
                        ->where('dmha_7','=',$ID)										
                        ->orderBy('nama','asc')
                        ->get();
                }
                elseif($TIPE == 'button_panel_header')
                {
                    $isi = dmha_7::whereNull('deleted_at')
                        ->where('dmha_7','=',$ID)		
                        ->where('dmha_9','=',2)											
                        ->orderBy('nama','asc')
                        ->get();
                }
                elseif($TIPE == 'dropdown_table')
                {
                    $isi = dmha_7::whereNull('deleted_at')
                        ->where('dmha_7','=',$ID)		
                        ->where('dmha_9','=',3)											
                        ->orderBy('urutan','asc')
                        ->get();
                }
                
                /* 
                $isi = dmha_7::selectRaw('
                                                dmha_7.dmha_id,
                                                dmha_7.nama,
                                                dmha_7.has_sub,										
                                                dmha_7.link,										
                                                dmha_7.tipe_data,									
                                                dmha_7.urutan,										
                                                dmha_7.icon')
                                            ->join('app_list', 'app_list.dmha_id', '=', 'dmha_7.dmha_id')
                                            ->join('app_mode', 'app_mode.nama', '=', 'app_list.app_mode')
                                            ->whereNull('app_list.deleted_at')				
                                            ->whereNull('dmha_7.deleted_at')
                                            ->whereNull('app_list.deleted_at')										
                                            ->orderBy('dmha_7.urutan','asc')										
                                            ->orderBy('dmha_7.nama','asc')
                                            ->get();
                                            */

            // ------------------------------------------------------------------------- SEND
                $words = $isi;
                return $words;
            ////////////////////////////////////////////////////////////////////////////
        }
        
        public static function id_check_col($ID,$COL)
        {
            // ------------------------------------------------------------------------- INITIALIZE
                $isi = '';

            // ------------------------------------------------------------------------- ACTION
                $isi = dmha_7::where('id','=',$ID)
                                            ->whereNull('deleted_at')
                                            ->value($COL);

            // ------------------------------------------------------------------------- SEND
                $words = $isi;
                return $words;
            ////////////////////////////////////////////////////////////////////////////
        }

        public static function let_me_show_all()
        {
          // ------------------------------------------------------------------------- INITIALIZE
          $isi = '';
  
          // ------------------------------------------------------------------------- ACTION
            $isi = dmha_7::whereNull('deleted_at')
                          ->get();
  
          // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
          ////////////////////////////////////////////////////////////////////////////
        }
        
}
