<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $kecamatan_id
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
    protected $fillable = ['kecamatan_id', 'nama', 'keterangan', 'nomor_wilayah', 'kode_surat', 'nomor_surat', 'alamat', 'telepon', 'kodepos', 'berkas_data_id', 'nilai_tanah', 'created_at', 'updated_at', 'deleted_at'];

}
