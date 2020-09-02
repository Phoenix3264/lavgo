<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'user22',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $timestamps = false;

    public static function id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            $isi = user::where('id','=',$ID)
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
            $dmha_8 = dmha_8_what_is_my_app_mode_id();

        // ------------------------------------------------------------------------- ACTION
                $isi = user::
                    selectRaw('
                        users.id,
                        users.name,
                        users.email,
                        dmha_122.nama as dmha_122
                    ')
                ->join('dmha_122', 'dmha_122.id', '=', 'users.dmha_122')    
                ->join('dmha_8', 'dmha_8.id', '=', 'dmha_122.dmha_8')   

                ->where('dmha_122.dmha_8','=',$dmha_8)
                ->orWhere('users.dmha_122','=',2)

                ->orderBy('users.id','desc')
                ->get();

                
                $isi2 = user::
                    selectRaw('
                        users.id,
                        users.name,
                        users.email,
                        dmha_122.nama as dmha_122
                    ')
                ->join('dmha_122', 'dmha_122.id', '=', 'users.dmha_122')  

                ->orWhere('users.dmha_122','=',2)

                ->orderBy('users.id','desc')
                ->get();

        // ------------------------------------------------------------------------- SEND
            $words = $isi->merge($isi2)->all();
            //$words = $isi2;
            return $words;
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function create_me($array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            user::create($array_data);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            user::where('id','=', $id)
            ->update(
                [
                    'dmha_122'     => $array_data['dmha_122']
                ]);

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }

    public static function delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi = '';

        // ------------------------------------------------------------------------- ACTION
            user::where('id','=', $id)
                ->softDeletes();

        // ------------------------------------------------------------------------- SEND
        ////////////////////////////////////////////////////////////////////////////
    }
}
