<?php

namespace App\Models\acadion;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property int $dmha_193
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_171 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_171';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'dmha_193', 'created_at', 'updated_at', 'deleted_at'];

    public $timestamps = false;

    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_171::where('id','=',$ID)
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

            $id_sekolah = dmha_87_user_id_check_col($AUTH_ID,'dmha_335');
            $id_tingkatan = dmha_335_id_check_col($id_sekolah,'dmha_193');

        // ------------------------------------------------------------------------- ACTION
            if(!empty($id_sekolah))
            {
                $isi = dmha_171::where('dmha_193','=', $id_tingkatan)
                    ->whereNull('deleted_at')
                    ->orderBy('nama','asc')
                    ->get();
            }
            else
            {
                $isi = dmha_171::whereNull('deleted_at')
                    ->orderBy('nama','asc')
                    ->get();

            }

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
            dmha_171::create($array_data);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_171::where('id','=', $id)
            ->update(
                [
                    'dmha_193'     => $array_data['dmha_193'],
                    'nama'     => $array_data['nama'],
                    'updated_at'     => now()
                ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function softdelete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_171::where('id','=', $id)
            ->update(
                [
                    'deleted_at' => now()
                ]);


        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_171::where('id','=', $id)
                ->delete();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

}
