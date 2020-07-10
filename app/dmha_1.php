<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property string $link
 * @property int $dmha_1
 * @property int $dmha_2
 * @property int $dmha_3
 * @property int $dmha_4
 * @property string $has_sub
 * @property string $created_at
 * @property string $update_at
 * @property string $deleted_at
 */
class dmha_1 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_1';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'link', 'dmha_1', 'dmha_2', 'dmha_3', 'dmha_4', 'has_sub', 'created_at', 'update_at', 'deleted_at'];

    public static function link_check_col($LINK,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_1::where('link','like',$LINK)
                        ->whereNull('deleted_at')
                        ->value($COL);

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
            $isi    = dmha_1::where('id','=',$ID)
                        ->whereNull('deleted_at')
                        ->value($COL);

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function let_me_generate_data_array($AUTH_ID,$ID,$TIPE)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            if($TIPE == 'sidebar_1')
            {
                $isi = dmha_1::whereNull('deleted_at')
                    ->whereNull('dmha_1')										
                    ->orderBy('id','asc')
                    ->get();
            }
            elseif($TIPE == 'sidebar_2')
            {
                $isi = dmha_1::whereNull('deleted_at')
                    ->where('dmha_1','=',$ID)										
                    ->orderBy('nama','asc')
                    ->get();
            }
            elseif($TIPE == 'data_table')
            {
                    
                $isi = dmha_1::
                    selectRaw('
                        dmha_1.id,
                        dmha_1.nama,
                        dmha_1.link,
                        dmha_1.urutan,
                        dmha_1.has_sub,
                        dmha_2.nama as dmha_2,
                        dmha_3.nama as dmha_3,
                        dmha_4.nama as dmha_4,
                        dmha_5.nama as dmha_5,
                        dmha_9.nama as dmha_9

                    ')
                ->join('dmha_2', 'dmha_2.id', '=', 'dmha_1.dmha_2')   
                ->join('dmha_3', 'dmha_3.id', '=', 'dmha_1.dmha_3')   
                ->join('dmha_4', 'dmha_4.id', '=', 'dmha_1.dmha_4')   
                ->join('dmha_5', 'dmha_5.id', '=', 'dmha_1.dmha_5')   
                ->join('dmha_9', 'dmha_9.id', '=', 'dmha_1.dmha_9')        
                ->whereNull('dmha_1.deleted_at')	            
                ->orderBy('dmha_1.id','asc')
                ->get();
            }
            elseif($TIPE == 'button_panel_header')
            {
                $isi = dmha_1::whereNull('deleted_at')
                    ->where('dmha_1','=',$ID)		
                    ->where('dmha_9','=',2)											
                    ->orderBy('nama','asc')
                    ->get();
            }
            elseif($TIPE == 'dropdown_table')
            {
                $isi = dmha_1::whereNull('deleted_at')
                    ->where('dmha_1','=',$ID)		
                    ->where('dmha_9','=',3)											
                    ->orderBy('urutan','asc')
                    ->get();
            }
            elseif($TIPE == 'button')
            {
                $isi = dmha_1::whereNull('deleted_at')
                    ->where('dmha_1','=',$ID)		
                    ->where('dmha_9','=',2)												
                    ->orderBy('urutan','asc')
                    ->get();
            }

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }
}
