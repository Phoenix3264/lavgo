<?php

namespace App\Models\system;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property int $dmha_8
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_122 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_122';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'dmha_8', 'created_at', 'updated_at', 'deleted_at'];

    public $timestamps = false;

    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_122::where('id','=',$ID)
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
            $dmha_8 = dmha_8_what_is_my_app_mode_id();

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_122::
                selectRaw('
                    dmha_122.id,
                    dmha_122.nama,
                    dmha_8.nama as dmha_8
                ')
                ->where('dmha_122.dmha_8','=',$dmha_8)

            
                ->join('dmha_8', 'dmha_8.id', '=', 'dmha_122.dmha_8') // daftar role
                ->whereNull('dmha_122.deleted_at')
                ->orderBy('dmha_122.nama','asc');

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function create_me($array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_122::create($array_data);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_122::where('id','=', $id)
            ->update(
                [
                    'nama'     => $array_data['nama'],
                    'dmha_8'     => $array_data['dmha_8']
                ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_122::where('id','=', $id)
                ->softDeletes();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

}
