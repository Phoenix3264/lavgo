<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
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
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_120 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_120';

    /**
     * @var array
     */
    protected $fillable = ['nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'rt', 'rw', 'desa_kelurahan', 'kecamatan', 'kabupaten_kota', 'agama', 'status_perkawinan', 'pekerjaan', 'created_at', 'updated_at', 'deleted_at'];

}
