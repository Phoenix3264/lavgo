<?php

namespace App\Models\paperone;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $dmha_292
 * @property int $dmha_296
 * @property string $nama
 * @property string $author
 * @property string $publish
 * @property string $keyword
 * @property string $filename
 * @property string $created_at
 * @property string $update_at
 * @property string $deleted_at
 */
class dmha_288 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_288';

    /**
     * @var array
     */
    protected $fillable = ['dmha_292', 'dmha_296', 'nama', 'author', 'publish', 'keyword', 'filename', 'created_at', 'update_at', 'deleted_at'];

    public $timestamps = false;

    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_288::where('id','=',$ID)
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
            $isi = dmha_288::whereNull('deleted_at')
                ->orderBy('id','asc')
                ->get();

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function create_me($dmha_292,$dmha_296,$nama,$author,$publish,$keyword,$filename)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_288::insert([
                'dmha_292' => $dmha_292, 
                'dmha_296' => $dmha_296, 
                'nama' => $nama, 
                'author' => $author, 
                'publish' => $publish, 
                'keyword' => $keyword, 
                'filename' => $filename, 
            ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_288::where('id','=', $id)
            ->update(
                [
                    'nama'     => $array_data['nama']
                ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_288::where('id','=', $id)
                ->softDeletes();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

}
