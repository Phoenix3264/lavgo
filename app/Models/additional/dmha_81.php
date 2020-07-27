<?php

namespace App\Models\additional;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $kode_kecamatan
 * @property string $kode_desa_kelurahan
 * @property string $nama
 * @property string $keterangan
 * @property integer $nomor_wilayah
 * @property boolean $kode_surat
 * @property string $nomor_surat
 * @property string $alamat
 * @property string $telepon
 * @property int $kodepos
 * @property int $berkas_data_id
 * @property int $nilai_tanah
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_81 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_81';

    /**
     * @var array
     */
    protected $fillable = ['kode_kecamatan', 'kode_desa_kelurahan', 'nama', 'keterangan', 'nomor_wilayah', 'kode_surat', 'nomor_surat', 'alamat', 'telepon', 'kodepos', 'berkas_data_id', 'nilai_tanah', 'created_at', 'updated_at', 'deleted_at'];
    
    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_81::where('id','=',$ID)
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
            $isi = dmha_81::whereNull('deleted_at')
                ->orderBy('id','asc')
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
            $isi = dmha_81::where('kode_kecamatan','like',$CUSTOM_ID)
                ->whereNull('deleted_at')
                ->inRandomOrder()
                ->first();

        // ------------------------------------------------------------------------- SEND
            $words = $isi[$COL];
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }
}
