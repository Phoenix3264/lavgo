<?php

namespace App\Models\pendukung_pemberkasan;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nop
 * @property string $nama
 * @property string $alamat
 * @property string $rt
 * @property string $rw
 * @property string $kabupaten_kota
 * @property string $kecamatan
 * @property string $desa_kelurahan
 * @property int $luas_bumi
 * @property int $njop_bumi
 * @property int $luas_bangunan
 * @property int $njop_bangunan
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_263 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_263';

    /**
     * @var array
     */
    protected $fillable = ['nop', 'nama', 'alamat', 'rt', 'rw', 'kabupaten_kota', 'kecamatan', 'desa_kelurahan', 'luas_bumi', 'njop_bumi', 'luas_bangunan', 'njop_bangunan', 'created_at', 'updated_at', 'deleted_at'];

    
    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_263::where('id','=',$ID)
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
            $isi = dmha_263::whereNull('deleted_at')
                ->orderBy('id','asc')
                ->get();

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function let_me_generate_data_array_by_nop($AUTH_ID,$NOP)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_263::where('nop','like', $NOP.'%')
                ->whereNull('deleted_at')
                ->orderBy('nama','asc')
                ->get();

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
            dmha_263::create($array_data);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_263::where('id','=', $id)
            ->update(
                [
                    'nop'     => $array_data['nop'],
                    'nama'     => $array_data['nama'],
                    'alamat'     => $array_data['alamat'],
                    'rt'     => $array_data['rt'],
                    'rw'     => $array_data['rw'],
                    'kabupaten_kota'     => $array_data['kabupaten_kota'],
                    'kecamatan'     => $array_data['kecamatan'],
                    'desa_kelurahan'     => $array_data['desa_kelurahan'],
                    'luas_bumi'     => $array_data['luas_bumi'],
                    'njop_bumi'     => $array_data['njop_bumi'],
                    'luas_bangunan'     => $array_data['luas_bangunan'],
                    'njop_bangunan'     => $array_data['njop_bangunan'],
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
            dmha_263::where('id','=', $id)
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
            dmha_263::where('id','=', $id)
                ->delete();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }
}
