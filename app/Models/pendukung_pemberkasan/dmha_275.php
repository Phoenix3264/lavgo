<?php

namespace App\Models\pendukung_pemberkasan;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $luas_pengajuan
 * @property int $penggunaan
 * @property string $batas_utara
 * @property string $batas_timur
 * @property string $batas_selatan
 * @property string $batas_barat
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_275 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_275';

    /**
     * @var array
     */
    protected $fillable = ['luas_pengajuan', 'penggunaan', 'batas_utara', 'batas_timur', 'batas_selatan', 'batas_barat', 'created_at', 'updated_at', 'deleted_at'];
  
    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_275::where('id','=',$ID)
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
            $isi = dmha_275::whereNull('deleted_at')
                ->orderBy('id','asc')
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
            dmha_275::create($array_data);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_275::where('id','=', $id)
            ->update(
                [
                    'luas_pengajuan'     => $array_data['luas_pengajuan'],
                    'penggunaan'     => $array_data['penggunaan'],
                    'batas_utara'     => $array_data['batas_utara'],
                    'batas_timur'     => $array_data['batas_timur'],
                    'batas_selatan'     => $array_data['batas_selatan'],
                    'batas_barat'     => $array_data['batas_barat'],
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
            dmha_275::where('id','=', $id)
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
            dmha_275::where('id','=', $id)
                ->delete();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }
}
