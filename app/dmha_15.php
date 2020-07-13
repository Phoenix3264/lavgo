<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $dmha_1
 * @property int $dmha_13
 * @property string $created_at
 * @property string $update_at
 * @property string $deleted_at
 */
class dmha_15 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_15';

    /**
     * @var array 
     */
    protected $fillable = ['dmha_1', 'dmha_13', 'created_at', 'update_at', 'deleted_at'];

    public $timestamps = false;

    // CUSTOMIZED

    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_15::where('id','=',$ID)
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
            if($TIPE == 'default')
            {
                $isi = dmha_15::where('dmha_1','=',$ID)
                    ->whereNull('deleted_at')
                    ->orderBy('id','asc')
                    ->get();
            }
            elseif($TIPE == 'joined')
            {

                $isi = dmha_15::selectRaw('
                    dmha_13.name
                    ')
                    ->join('dmha_13', 'dmha_13.id', '=', 'dmha_15.dmha_13')    
                    ->where('dmha_15.dmha_1','=',$ID)                                 
                    ->orderBy('dmha_15.id','asc')
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
            dmha_15::create($array_data);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_15::where('id','=', $id)
                ->update(
                    [
                        'dmha_1'     => $array_data['dmha_1'],
                        'dmha_13'     => $array_data['dmha_13']
                    ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_15::where('id','=', $id)
                ->softDeletes();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }
}
