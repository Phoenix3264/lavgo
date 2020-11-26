<?php

namespace App\Models\data_pendukung;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property string $deskripsi
 * @property int $tahun
 * @property int $active
 * @property string $filename_exist_logo_instansi
 * @property string $filename_exist_logo_investor
 * @property string $deskripsi
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_373 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_373';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'deskripsi', 'tahun', 'active', 'filename_exist_logo_instansi', 'filename_exist_logo_investor', 'created_at', 'updated_at', 'deleted_at'];

    public $timestamps = false;

    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_373::where('id','=',$ID)
                ->whereNull('deleted_at')
                ->value($COL);

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }
    
    public static function what_is_my_penelitian($col)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_373::where('active','=',1)
                ->value($col);

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
            $isi = dmha_373::whereNull('deleted_at')
                ->orderBy('nama','asc');

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function create_me($peneliti,$nama,$deskripsi,$tahun,$filename_logo_instansi,$filename_logo_investor)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_373::insert(
                [
                    'nama'     => $peneliti,
                    'nama'     => $nama,
                    'deskripsi'     => $deskripsi,
                    'tahun'     => $tahun,
                    'filename_logo_instansi'     => $filename_logo_instansi,
                    'filename_logo_investor'     => $filename_logo_investor
                ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$peneliti,$nama,$deskripsi,$tahun,$filename_logo_instansi,$filename_logo_investor)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_373::where('id','=', $id)
            ->update(
                [
                    'nama'     => $peneliti,
                    'nama'     => $nama,
                    'deskripsi'     => $deskripsi,
                    'tahun'     => $tahun,
                    'filename_logo_instansi'     => $filename_logo_instansi,
                    'filename_logo_investor'     => $filename_logo_investor,
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
            dmha_373::where('id','=', $id)
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
            dmha_373::where('id','=', $id)
                ->delete();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

}
