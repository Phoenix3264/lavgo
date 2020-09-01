<?php

namespace App\Models\pendukung_pemberkasan;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $peta_bidang_tanah
 * @property int $luas_hasil_ukur
 * @property string $no_bidang
 * @property string $no_di_302
 * @property string $tanggal
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_259 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_259';

    /**
     * @var array
     */
    protected $fillable = ['peta_bidang_tanah', 'luas_hasil_ukur', 'no_bidang', 'no_di_302', 'tanggal', 'created_at', 'updated_at', 'deleted_at'];
  
    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_259::where('id','=',$ID)
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
            $isi = dmha_259::whereNull('deleted_at')
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
            dmha_259::create($array_data);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_259::where('id','=', $id)
            ->update(
                [
                    'peta_bidang_tanah'     => $array_data['peta_bidang_tanah'],
                    'luas_hasil_ukur'     => $array_data['luas_hasil_ukur'],
                    'no_bidang'     => $array_data['no_bidang'],
                    'no_di_302'     => $array_data['no_di_302'],
                    'tanggal'     => $array_data['tanggal'],
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
            dmha_259::where('id','=', $id)
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
            dmha_259::where('id','=', $id)
                ->delete();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }
}
