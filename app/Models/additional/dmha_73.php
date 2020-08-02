<?php

namespace App\Models\additional;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $kode_provinsi
 * @property string $kode_kabupaten_kota
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
     * @var array
     */
    protected $fillable = ['kode_provinsi', 'kode_kabupaten_kota', 'nama', 'keterangan', 'status', 'set_wilayah', 'dihapus', 'created_at', 'updated_at', 'deleted_at'];

    
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
                ->orderBy('nama','asc')
                ->get();

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }
    
    public static function generate_data($COL,$CUSTOM_ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_73::where('kode_provinsi','like',$CUSTOM_ID)
                ->whereNull('deleted_at')
                ->inRandomOrder()
                ->first();

        // ------------------------------------------------------------------------- SEND
            $words = $isi[$COL];
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_73::where('id','=', $id)
            ->update(
                [
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
            dmha_73::where('id','=', $id)
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
            dmha_73::where('id','=', $id)
                ->delete();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }
}
