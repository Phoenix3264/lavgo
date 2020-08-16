<?php

namespace App\Models\notarion;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $kabupaten_kota
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_267 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_267';

    /**
     * @var array
     */
    protected $fillable = ['kabupaten_kota', 'created_at', 'updated_at', 'deleted_at'];

    
    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_267::where('id','=',$ID)
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
            $isi = dmha_267::whereNull('deleted_at')
                ->orderBy('kabupaten_kota','asc')
                ->get();

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
            dmha_267::create($array_data);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_267::where('id','=', $id)
            ->update(
                [
                    'kabupaten_kota'     => $array_data['kabupaten_kota'],
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
            dmha_267::where('id','=', $id)
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
            dmha_267::where('id','=', $id)
                ->delete();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }
}