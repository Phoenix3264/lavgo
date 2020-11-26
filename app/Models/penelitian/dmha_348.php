<?php

namespace App\Models\penelitian;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $filename
 * @property string $latitude
 * @property string $longitude
 * @property int $dmha_364
 * @property int $dmha_372
 * @property int $jumlah
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_348 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_348';

    /**
     * @var array
     */
    protected $fillable = ['filename', 'latitude', 'longitude', 'dmha_364', 'dmha_372', 'jumlah', 'created_at', 'updated_at', 'deleted_at'];

    public $timestamps = false;

    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_348::where('id','=',$ID)
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
            $isi = dmha_348::
                selectRaw('
                    dmha_348.id,
                    dmha_348.filename,
                    dmha_364.nama as dmha_364,
                    dmha_372.nama as dmha_372,
                    dmha_348.jumlah,
                    dmha_348.latitude,
                    dmha_348.longitude,
                    dmha_348.created_at
                ')
                ->join('dmha_364', 'dmha_364.id', '=', 'dmha_348.dmha_364') 
                ->join('dmha_372', 'dmha_372.id', '=', 'dmha_348.dmha_372') 

                ->whereNull('dmha_348.deleted_at')
                ->orderBy('dmha_348.id','asc');

            if($TIPE == 'script'){
                $isi = dmha_348::
                    selectRaw('
                        dmha_348.id,
                        dmha_348.filename,
                        dmha_364.nama as dmha_364,
                        dmha_372.nama as dmha_372,
                        dmha_348.jumlah,
                        dmha_348.latitude,
                        dmha_348.longitude,
                        dmha_395.nama as maki
                    ')
                    ->join('dmha_364', 'dmha_364.id', '=', 'dmha_348.dmha_364') 
                    ->join('dmha_372', 'dmha_372.id', '=', 'dmha_348.dmha_372') 
                    ->join('dmha_395', 'dmha_395.id', '=', 'dmha_372.dmha_395') 

                    ->whereNull('dmha_348.deleted_at')
                    ->orderBy('dmha_348.id','asc')
                    ->get();
            }
        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function create_me($filename,$latitude,$longitude,$dmha_364,$dmha_372,$jumlah)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_348::insert(
                [
                    'filename'     => $filename,
                    'latitude'     => $latitude,
                    'longitude'     => $longitude,
                    'dmha_364'     => $dmha_364,
                    'dmha_372'     => $dmha_372,
                    'jumlah'     => $jumlah
                ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$filename,$latitude,$longitude,$dmha_364,$dmha_372,$jumlah)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION                
            if(!is_null($filename))
            {
                dmha_348::where('id','=', $id)
                ->update(
                    [
                        'filename'     => $filename,
                        'latitude'     => $latitude,
                        'longitude'     => $longitude,
                        'dmha_364'     => $dmha_364,
                        'dmha_372'     => $dmha_372,
                        'jumlah'     => $jumlah,
                        'updated_at'     => now()
                    ]);
            }
            else
            {
                dmha_348::where('id','=', $id)
                ->update(
                    [
                        'latitude'     => $latitude,
                        'longitude'     => $longitude,
                        'dmha_364'     => $dmha_364,
                        'dmha_372'     => $dmha_372,
                        'jumlah'     => $jumlah,
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
            dmha_348::where('id','=', $id)
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
            dmha_348::where('id','=', $id)
                ->delete();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

}
