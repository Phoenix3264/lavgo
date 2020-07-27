<?php

namespace App\Models\paperone;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $dmha_292
 * @property int $dmha_296
 * @property int $dmha_287
 * @property string $nama
 * @property string $author
 * @property string $publish
 * @property string $keyword
 * @property string $filename
 * @property string $created_at
 * @property string $updated_at
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
    protected $fillable = ['dmha_292', 'dmha_296', 'dmha_287', 'nama', 'author', 'publish', 'keyword', 'filename', 'created_at', 'updated_at', 'deleted_at'];

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

    public static function let_me_generate_data_array($AUTH_ID,$ID,$PARAM_2)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
                
            $isi = dmha_288::
                    selectRaw('
                        dmha_288.id,
                        dmha_288.publish,
                        dmha_288.nama,
                        dmha_288.keyword,
                        dmha_292.nama as dmha_292,
                        dmha_296.nama as dmha_296
                    ')

                ->join('dmha_292', 'dmha_292.id', '=', 'dmha_288.dmha_292')       
                ->join('dmha_296', 'dmha_296.id', '=', 'dmha_288.dmha_296')           
                ->where('dmha_288.dmha_287', '=', $PARAM_2)	          
                ->whereNull('dmha_288.deleted_at')	
                ->orderBy('dmha_288.id','asc')

                ->get();
        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function create_me($dmha_292,$dmha_296,$dmha_287,$nama,$author,$publish,$keyword,$filename)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_288::insert([
                'dmha_292' => $dmha_292, 
                'dmha_296' => $dmha_296, 
                'dmha_287' => $dmha_287, 
                'nama' => $nama, 
                'author' => $author, 
                'publish' => $publish, 
                'keyword' => $keyword, 
                'filename' => $filename, 
            ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$dmha_292,$dmha_296,$dmha_287,$nama,$author,$publish,$keyword,$filename)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_288::where('id','=', $id)
            ->update(
                [
                    'dmha_292' => $dmha_292, 
                    'dmha_296' => $dmha_296, 
                    'dmha_287' => $dmha_287, 
                    'nama' => $nama, 
                    'author' => $author, 
                    'publish' => $publish, 
                    'keyword' => $keyword, 
                    'filename' => $filename, 
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
