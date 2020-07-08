<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property string $created_at
 * @property string $update_at
 * @property string $deleted_at
 */
class dmha_47 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_47';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'created_at', 'update_at', 'deleted_at'];

}
