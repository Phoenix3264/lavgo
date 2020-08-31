<?php

namespace App\Models\system;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $dmha_8
 * @property int $dmha_122
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_401 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_401';

    /**
     * @var array
     */
    protected $fillable = ['dmha_8', 'dmha_122', 'created_at', 'updated_at', 'deleted_at'];

    public $timestamps = false;
    
    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_401::where('dmha_8','=',$ID)
                ->value($COL);

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    
    public static function id_check($dmha_8,$dmha_122)
    {        
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = false;

        // ------------------------------------------------------------------------- ACTION
            $temp = dmha_401::where('dmha_8','=',$dmha_8)
                ->where('dmha_122','=',$dmha_122)
                ->first();
            
            if(!empty($temp))
            {
                $isi = 1;
            }

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
            $isi = dmha_401::whereNull('deleted_at')
                ->orderBy('nama','asc')
                ->get();

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function create_me($dmha_8,$dmha_122)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
                dmha_401::create([
                    'dmha_8' => $dmha_8, 
                    'dmha_122' => $dmha_122
                ]);

            

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_401::create($array_data);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_401::where('dmha_8','=', $id)
                ->delete();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

}