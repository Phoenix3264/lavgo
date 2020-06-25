<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $dmha_7
 * @property int $dmha_28
 * @property int $urutan
 * @property string $created_at
 * @property string $update_at
 * @property string $deleted_at
 */
class dmha_36 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_36';

    /**
     * @var array
     */
    protected $fillable = ['dmha_7', 'dmha_28', 'urutan', 'created_at', 'update_at', 'deleted_at'];

    // ---------------------------------------------------------------------------------------------------
        public static function let_me_show_all()
        {
            // ------------------------------------------------------------------------- INITIALIZE
                $isi = '';

            // ------------------------------------------------------------------------- ACTION
                $isi = dmha_36::whereNull('deleted_at')
                        ->get();

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
                $isi = dmha_36::where('id','=',$ID)
                        ->whereNull('deleted_at')
                        ->value($COL);

            // ------------------------------------------------------------------------- SEND
                $words = $isi;
                return $words;
            ////////////////////////////////////////////////////////////////////////////
        }
        
        public static function we_get_it($DMHA_7)
        {
            // ------------------------------------------------------------------------- INITIALIZE
                $isi = '';

            // ------------------------------------------------------------------------- ACTION
                $isi = dmha_36::whereNull('deleted_at')
                        ->where('dmha_7','=',$DMHA_7)
                        ->get();

            // ------------------------------------------------------------------------- SEND
                $words = $isi;
                return $words;
            ////////////////////////////////////////////////////////////////////////////
        }
}
