<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property string $created_at
 * @property string $update_at
 * @property string $deleted_at
 */
class dmha_5 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_5';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'created_at', 'update_at', 'deleted_at'];

    public $timestamps = false;
    
    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_5::where('id','=',$ID)
                ->whereNull('deleted_at')
                ->value($COL);

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function let_me_generate_data_array($AUTH_ID,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_5::whereNull('deleted_at')
                ->orderBy('id','asc')
                ->get();

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

}
