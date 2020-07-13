<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property string $name
 * @property int $dmha_14
 * @property string $panjang
 * @property string $created_at
 * @property string $update_at
 * @property string $deleted_at
 */
class dmha_13 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_13';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'name', 'dmha_14','panjang', 'created_at', 'update_at', 'deleted_at'];

    public $timestamps = false;

    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_13::where('id','=',$ID)
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
            $isi = dmha_13::whereNull('deleted_at')
                ->orderBy('id','asc')
                ->get();

            if($TIPE == 'default')
            {
                $isi = dmha_13::where('dmha_1','=',$ID)
                    ->whereNull('deleted_at')
                    ->orderBy('id','asc')
                    ->get();
            }
            elseif($TIPE == 'joined')
            {

                $isi = dmha_13::selectRaw('
                    dmha_13.id,
                    dmha_13.nama,
                    dmha_13.name,
                    dmha_14.nama as dmha_14,
                    dmha_13.panjang
                    ')
                    ->join('dmha_14', 'dmha_14.id', '=', 'dmha_13.dmha_14')                    
                    ->orderBy('dmha_14.id','asc')
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
            dmha_13::create($array_data);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_13::where('id','=', $id)
                ->update(
                    [
                        'nama'     => $array_data['nama'],
                        'name'     => $array_data['name'],
                        'dmha_14'     => $array_data['dmha_14'],
                        'panjang'     => $array_data['panjang']
                    ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_13::where('id','=', $id)
                ->softDeletes();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }
}
