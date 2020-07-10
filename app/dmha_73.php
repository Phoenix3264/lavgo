<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $provinsi_id
 * @property string $nama
 * @property string $keterangan
 * @property string $status
 * @property boolean $set_wilayah
 * @property boolean $dihapus
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_73 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_73';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['provinsi_id', 'nama', 'keterangan', 'status', 'set_wilayah', 'dihapus', 'created_at', 'updated_at', 'deleted_at'];

    
    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_73::where('id','=',$ID)
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
            $isi = dmha_73::whereNull('deleted_at')
                ->orderBy('id','asc')
                ->get();

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }
}
