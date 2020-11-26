<?php

namespace App\Models\penelitian;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $filename
 * @property string $latitude
 * @property string $longitude
 * @property int $dmha_352
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_352 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_352';

    /**
     * @var array
     */
    protected $fillable = ['filename', 'latitude', 'longitude', 'dmha_352', 'created_at', 'updated_at', 'deleted_at'];

    public $timestamps = false;

    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_352::where('id','=',$ID)
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
            $isi = dmha_352::
                selectRaw('
                    dmha_352.id,
                    dmha_352.filename,
                    dmha_364.nama as dmha_364,
                    dmha_352.latitude,
                    dmha_352.longitude,
                    dmha_352.created_at
                ')
                ->join('dmha_364', 'dmha_364.id', '=', 'dmha_352.dmha_364') 
    
                ->whereNull('dmha_352.deleted_at')
                ->orderBy('dmha_352.id','asc');
        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function create_me($filename,$latitude,$longitude,$dmha_364)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_352::insert(
                [
                    'filename'     => $filename,
                    'latitude'     => $latitude,
                    'longitude'     => $longitude,
                    'dmha_364'     => $dmha_364,
                    'updated_at'     => now()
                ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$filename,$latitude,$longitude,$dmha_364)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_352::where('id','=', $id)
            ->update(
                [
                    'filename'     => $filename,
                    'latitude'     => $latitude,
                    'longitude'     => $longitude,
                    'dmha_364'     => $dmha_364,
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
            dmha_352::where('id','=', $id)
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
            dmha_352::where('id','=', $id)
                ->delete();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

}
