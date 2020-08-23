<?php

namespace App\Models\penelitian;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $filename
 * @property string $latitude
 * @property string $longitude
 * @property string $jalan
 * @property string $lebar
 * @property string $tebal
 * @property int $dmha_356
 * @property int $dmha_382
 * @property int $dmha_386
 * @property int $dmha_390
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_344 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_344';

    /**
     * @var array
     */
    protected $fillable = ['filename', 'latitude', 'longitude', 'jalan', 'lebar', 'tebal', 'dmha_356', 'dmha_382', 'dmha_386', 'dmha_390', 'created_at', 'updated_at', 'deleted_at'];

    public $timestamps = false;

    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_344::where('id','=',$ID)
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
            $isi = dmha_344::whereNull('deleted_at')
                ->orderBy('id','asc')
                ->get();

                
            $isi = dmha_344::
            selectRaw('
                dmha_344.id,
                dmha_344.filename,
                dmha_344.jalan,
                dmha_344.lebar,
                dmha_344.tebal,
                dmha_356.nama as dmha_356,
                dmha_382.nama as dmha_382,
                dmha_386.nama as dmha_386,
                dmha_390.nama as dmha_390,
                dmha_344.latitude,
                dmha_344.longitude
            ')
            ->join('dmha_356', 'dmha_356.id', '=', 'dmha_344.dmha_356') 
            ->join('dmha_382', 'dmha_382.id', '=', 'dmha_344.dmha_382') 
            ->join('dmha_386', 'dmha_386.id', '=', 'dmha_344.dmha_386') 
            ->join('dmha_390', 'dmha_390.id', '=', 'dmha_344.dmha_390') 

            ->whereNull('dmha_344.deleted_at')
            ->orderBy('dmha_344.id','asc')
            ->get();

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function create_me($filename,$latitude,$longitude,$jalan,$lebar,$tebal,$dmha_356,$dmha_382,$dmha_386)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_344::insert(
                [
                    'filename'     => $filename,
                    'latitude'     => $latitude,
                    'longitude'     => $longitude,
                    'jalan'     => $jalan,
                    'lebar'     => $lebar,
                    'tebal'     => $tebal,
                    'dmha_356'     => $dmha_356,
                    'dmha_382'     => $dmha_382,
                    'dmha_386'     => $dmha_386
                ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$filename,$latitude,$longitude,$jalan,$lebar,$tebal,$dmha_356,$dmha_382,$dmha_386)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_344::where('id','=', $id)
            ->update(
                [
                    'filename'     => $filename,
                    'latitude'     => $latitude,
                    'longitude'     => $longitude,
                    'jalan'     => $jalan,
                    'lebar'     => $lebar,
                    'tebal'     => $tebal,
                    'dmha_356'     => $dmha_356,
                    'dmha_382'     => $dmha_382,
                    'dmha_386'     => $dmha_386,
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
            dmha_344::where('id','=', $id)
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
            dmha_344::where('id','=', $id)
                ->delete();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

}
