<?php

namespace App\Models\notarion;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property string $created_at
 * @property string $updated_at
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
    protected $fillable = ['nama', 'created_at', 'updated_at', 'deleted_at'];

    
    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_47::where('id','=',$ID)
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
            $isi = dmha_47::whereNull('deleted_at')
                ->orderBy('berkas_id','asc');

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function let_me_generate_data($dmha_46,$berkas_id,$dmha)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_47::where('dmha_46','=',$dmha_46)
                ->where('berkas_id','=',$berkas_id)
                ->where('dmha','=',$dmha)
                ->whereNull('deleted_at')
                ->get();

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function create_me($dmha_46,$berkas_id,$dmha,$data_id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

            if(is_null($berkas_id))
            {
                $temp_berkas_id = dmha_47::where('dmha_46','=',$dmha_46)
                    ->max('berkas_id');

                $berkas_id = $temp_berkas_id + 1;
            }

        // ------------------------------------------------------------------------- ACTION
            dmha_47::insert(
                [
                    'dmha_46'     => $dmha_46,
                    'berkas_id'     => $berkas_id,
                    'dmha'     => $dmha,
                    'data_id'     => $data_id

                ]);


        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_47::where('id','=', $id)
            ->update(
                [
                    'nama'     => $array_data['nama'],
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
            dmha_47::where('id','=', $id)
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
            dmha_47::where('id','=', $id)
                ->delete();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }
}
