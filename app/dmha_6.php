<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property string $fa
 * @property string $created_at
 * @property string $update_at
 * @property string $deleted_at
 */
class dmha_6 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_6';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'fa', 'created_at', 'update_at', 'deleted_at'];

    public static function let_me_check_your_details($ID)
    {
    	// ------------------------------------------------------------------------- INITIALIZE
			$isi = '';

		// ------------------------------------------------------------------------- ACTION
			$isi = dmha_6::where('id','=',$ID)
                    ->whereNull('deleted_at')
                    ->first();

		// ------------------------------------------------------------------------- SEND
			$words = $isi;
			return $words;
		////////////////////////////////////////////////////////////////////////////
    }

    public static function let_me_show_all()
    {
      // ------------------------------------------------------------------------- INITIALIZE
      $isi = '';

      // ------------------------------------------------------------------------- ACTION
        $isi = dmha_6::whereNull('deleted_at')
                      ->get();

      // ------------------------------------------------------------------------- SEND
        $words = $isi;
        return $words;
      ////////////////////////////////////////////////////////////////////////////
    }

    public static function id_check_col($ID,$COL)
    {
    	// ------------------------------------------------------------------------- INITIALIZE
			$isi = '';

		// ------------------------------------------------------------------------- ACTION
			$isi = dmha_6::where('id','=',$ID)
                    ->whereNull('deleted_at')
                    ->value($COL);

		// ------------------------------------------------------------------------- SEND
			$words = $isi;
			return $words;
		////////////////////////////////////////////////////////////////////////////
    }
}
