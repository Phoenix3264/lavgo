<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Jenssegers\Agent\Agent;

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

    public function showLoginForm()
    {
        $PARAM_1 = 'login';
        
  		// Initialize
            // Define User agent                
                $agent = new Agent();
                $template_agent = 'browser';

            // We check your root and template
                $root           = dmha_2_id_check_col(dmha_1_link_check_col($PARAM_1,'dmha_2'),'root');
                $data['root']   = replace_to_underscore($root);
                $template           = dmha_2_id_check_col(dmha_1_link_check_col($PARAM_1,'dmha_2'),'nama');
                $data['template']   = replace_to_underscore($template);

            // We check your Page
                $page               = dmha_4_id_check_col(dmha_1_link_check_col($PARAM_1,'dmha_4'),'nama');
                $data['page']       = replace_to_underscore($page);
              
            // We check your Controller
                $controller         = dmha_3_id_check_col(dmha_1_link_check_col($PARAM_1,'dmha_3'),'nama');
                $data['controller'] = $controller;

            // We check your script
                $script             = dmha_4_id_check_col(dmha_1_link_check_col($PARAM_1,'dmha_4'),'nama');
                $data['script']     = replace_to_underscore($script);

        // Show View
            $final_view = rules_for_layout($PARAM_1,$template_agent);
            return view($final_view,$data);
    }
}
