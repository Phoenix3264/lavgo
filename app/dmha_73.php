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

}
