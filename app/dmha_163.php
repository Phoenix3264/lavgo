<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $nomor_induk
 * @property int $kelas
 * @property string $nisn
 * @property string $nik
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property string $rt
 * @property string $rw
 * @property string $desa_kelurahan
 * @property string $kecamatan
 * @property string $kabupaten_kota
 * @property string $agama
 * @property string $status_perkawinan
 * @property string $pekerjaan
 * @property string $kewarganegaraan
 * @property boolean $status_dalam_keluarga
 * @property boolean $anak_ke
 * @property string $sekolah_asal
 * @property string $kota_sekolah
 * @property string $diterima_pada_kelas
 * @property string $diterima_pada_tanggal
 * @property int $id_ayah
 * @property int $id_ibu
 * @property int $id_wali
 * @property string $foto_siswa
 * @property string $created_at
 * @property string $update_at
 * @property string $deleted_at
 */
class dmha_163 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_163';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'nomor_induk', 'kelas', 'nisn', 'nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'rt', 'rw', 'desa_kelurahan', 'kecamatan', 'kabupaten_kota', 'agama', 'status_perkawinan', 'pekerjaan', 'kewarganegaraan', 'status_dalam_keluarga', 'anak_ke', 'sekolah_asal', 'kota_sekolah', 'diterima_pada_kelas', 'diterima_pada_tanggal', 'id_ayah', 'id_ibu', 'id_wali', 'foto_siswa', 'created_at', 'update_at', 'deleted_at'];

    public $timestamps = false;

    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_163::where('id','=',$ID)
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
            if($TIPE == 'default')
            {
                $isi = dmha_163::whereNull('deleted_at')
                    ->orderBy('id','asc')
                    ->get();
            }
            else
            {
                $isi = dmha_163::where('kelas','=',$TIPE)
                    ->whereNull('deleted_at')
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
            dmha_163::create($array_data);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_163::where('id','=', $id)
            ->update(
                [
                    'nama'     => $array_data['nama']
                ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_163::where('id','=', $id)
                ->softDeletes();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }
}
