<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Agent\Agent;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        
  		// Initialize
  			// lets start the array
                $data = array();

            // Your PARAM 1 is
                $PARAM_1 = 'register';

            // Define User agent                
                $agent = new Agent();
                $data['agent']      = $agent;
                $template_agent = 'browser';

            // Whats ur name, again            
                // no auth this controller
                
            // then, we check your link                
                $id                 = dmha_1_link_check_col($PARAM_1,'id');
                $data['id']         = $id;

                $data['nama']         = dmha_1_link_check_col($PARAM_1,'nama');

                $dmha_1             = dmha_1_link_check_col($PARAM_1,'dmha_1');
                    $data['dmha_1']     = $dmha_1;

                $data['dmha_2']     = dmha_1_link_check_col($PARAM_1,'dmha_2');
                $data['dmha_3']     = dmha_1_link_check_col($PARAM_1,'dmha_3');
                $data['dmha_4']     = dmha_1_link_check_col($PARAM_1,'dmha_4');
                $data['dmha_5']     = dmha_1_link_check_col($PARAM_1,'dmha_5');
                $data['dmha_9']     = dmha_1_link_check_col($PARAM_1,'dmha_9');

                $dmha_271           = dmha_1_link_check_col($PARAM_1,'dmha_271');
                $data['dmha_271']   = $dmha_271;

                $dmha_300           = dmha_1_link_check_col($PARAM_1,'dmha_300');
                    $data['dmha_300']   = $dmha_300;

            // identify data id.
                $data['id_data'] = NULL;

                $key_id_data = array(3, 4, 5, 6);                    
                if(in_array($dmha_271, $key_id_data) && $PARAM_2 != '')
                {
                    $data['id_data'] = $PARAM_2;
                }

            // Flash Message  
                // no flash message
                
            // We check your root and template
                $root           = dmha_2_id_check_col(dmha_1_link_check_col($PARAM_1,'dmha_2'),'root');
                $data['root']   = replace_to_underscore($root);
                $template           = dmha_2_id_check_col(dmha_1_link_check_col($PARAM_1,'dmha_2'),'nama');
                $data['template']   = 'template_'.replace_to_underscore($template);
            
            // We check your Controller
                $controller         = dmha_3_id_check_col(dmha_1_link_check_col($PARAM_1,'dmha_3'),'nama');
                $data['controller'] = $controller;

            // We check your Page
                $page               = dmha_4_id_check_col(dmha_1_link_check_col($PARAM_1,'dmha_4'),'nama');
                $data['page']       = replace_to_underscore($page);

            // We check your script
                $script             = dmha_4_id_check_col(dmha_1_link_check_col($PARAM_1,'dmha_4'),'nama');
                $data['script']     = replace_to_underscore($script);

            // Transform ID
                $data['transform_ID'] = rules_transform_ID($id,$dmha_300);
            
            // Login View
                $data['app_mode'] = replace_to_underscore(dmha_8_what_is_my_app_mode());
                $data['dev_mode'] = replace_to_underscore(dmha_8_is_it_dev_mode());

        // Show View
            $final_view = rules_for_layout($PARAM_1,$template_agent);
            return view($final_view,$data);
    }
}
