<?php

namespace App\Models\parasuhu;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama_lengkap
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class dmha_426 extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dmha_426';

    /**
     * @var array
     */
    protected $fillable = [
        'nama_panggung', 
        'nama_lengkap', 
        'tanggal_lahir', 
        'jenis_kelamin', 
        'email', 
        'telepon', 
        'kota', 
        'negara', 

        'visi', 
        'misi', 
        'target_lima_tahun', 

        'profesi', 
        'kompetensi', 
        
        'pengajaran', 
        'pengalaman', 
        'audiens', 
        'video', 
        'facebook', 
        'instagram', 
        'linkedin', 
        'twitter', 
        'youtube', 
        'created_at', 'updated_at', 'deleted_at'];

    public $timestamps = false;

    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = dmha_426::where('id','=',$ID)
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
                $isi = dmha_426::whereNull('deleted_at')
                    ->orderBy('created_at','desc');
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
            dmha_426::create($array_data);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_426::where('id','=', $id)
            ->update(
                [
                    'nama_lengkap'      => $array_data['nama_lengkap'],
                    'nama_panggung'     => $array_data['nama_panggung'],
                    'email'             => $array_data['email'],
                    'telepon'           => $array_data['telepon'],
                    'kota'              => $array_data['kota'],
                    'negara'            => $array_data['negara'],
                    'profesi'           => $array_data['profesi'], 
                    'kompetensi'        => $array_data['kompetensi'], 
                    'pengajaran'        => $array_data['pengajaran'], 
                    'pengalaman'        => $array_data['pengalaman'], 
                    'audiens'           => $array_data['audiens'], 
                    'video'             => $array_data['video'], 
                    'visi'              => $array_data['visi'], 
                    'misi'              => $array_data['misi'], 
                    'target_lima_tahun' => $array_data['target_lima_tahun'], 
                    'facebook'          => $array_data['facebook'], 
                    'instagram'         => $array_data['instagram'], 
                    'linkedin'          => $array_data['linkedin'], 
                    'twitter'           => $array_data['twitter'], 
                    'youtube'           => $array_data['youtube'], 
                    'updated_at'        => now()
                ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function softdelete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            dmha_426::where('id','=', $id)
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
            dmha_426::where('id','=', $id)
                ->delete();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }
}
