<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Jenssegers\Agent\Agent;
use Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    
    protected function authenticated(Request $request, $user)
    {
        Session::flash('message',1);
        return redirect()->intended($this->redirectPath());
    }


    public function showLoginForm()
    {
        
  		// Initialize
  			// lets start the array
                $data = array();

            // Your PARAM 1 is
                $PARAM_1 = 'login';

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
