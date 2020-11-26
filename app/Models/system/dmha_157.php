<?php

namespace App\Models\system;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $dmha_8
 * @property int $dmha_1
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_157 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_157';

    /**
     * @var array
     */
    protected $fillable = ['dmha_8', 'dmha_1', 'created_at', 'updated_at', 'deleted_at'];

    public $timestamps = false;
    
    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_157::where('dmha_8','=',$ID)
                ->value($COL);

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    
    public static function id_check($dmha_8,$dmha_1)
    {        
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = false;

        // ------------------------------------------------------------------------- ACTION
            $temp = dmha_157::where('dmha_8','=',$dmha_8)
                ->where('dmha_1','=',$dmha_1)
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
            $isi = dmha_157::whereNull('deleted_at')
                ->orderBy('nama','asc');

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function create_me($dmha_8,$dmha_1)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
                dmha_157::create([
                    'dmha_8' => $dmha_8, 
                    'dmha_1' => $dmha_1
                ]);

            

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_157::create($array_data);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_157::where('dmha_8','=', $id)
                ->delete();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

}
