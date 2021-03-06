<?php

namespace App\Models\data_pendukung;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property int $kapasitas
 * @property string $latitude
 * @property string $longitude
 * @property int $icon
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_364 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_364';

    /**
     * @var array
     */
    protected $fillable = ['filename', 'nama', 'kapasitas', 'latitude', 'longitude', 'icon', 'created_at', 'updated_at', 'deleted_at'];

    public $timestamps = false;

    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_364::where('id','=',$ID)
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
            $isi = dmha_364::whereNull('deleted_at')
                ->orderBy('nama','asc');

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function create_me($filename,$latitude,$longitude,$nama,$kapasitas)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_364::insert(
                [
                    'filename'     => $filename,
                    'latitude'     => $latitude,
                    'longitude'     => $longitude,
                    'nama'     => $nama,
                    'kapasitas'     => $kapasitas
                ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$filename,$latitude,$longitude,$nama,$kapasitas)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            if(!is_null($filename))
            {
                dmha_364::where('id','=', $id)
                ->update(
                    [
                        'filename'     => $filename,
                        'latitude'     => $latitude,
                        'longitude'     => $longitude,
                        'nama'     => $nama,
                        'kapasitas'     => $kapasitas,
                        'updated_at'     => now()
                    ]);
            }
            else
            {
                dmha_364::where('id','=', $id)
                ->update(
                    [
                        'latitude'     => $latitude,
                        'longitude'     => $longitude,
                        'nama'     => $nama,
                        'kapasitas'     => $kapasitas,
                        'updated_at'     => now()
                    ]);
            }

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function softdelete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_364::where('id','=', $id)
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
            dmha_364::where('id','=', $id)
                ->delete();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

}
