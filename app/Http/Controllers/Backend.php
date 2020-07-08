<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Jenssegers\Agent\Agent;

class Backend extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    //
    public function index($PARAM_1=NULL,$PARAM_2=NULL)
  	{
        // Set Rules
            // Unknown Param, Redirect to
                if($PARAM_1 == ''){return redirect('dashboard');}
            // Timezone
                date_default_timezone_set('Asia/Jakarta');

  		// Initialize
  			// lets start the array
                $data = array();

            // Define User agent                
                $agent = new Agent();
                $template_agent = 'browser';

  			// Whats ur name, again            
    		    $data['AUTH_NAME']      = Auth::user()->name;
    		    $data['AUTH_ID']        = Auth::user()->id;
                  
  			// then, we check your link
    		    $data['PARAM_1']    = $PARAM_1;
                $data['id']         = dmha_1_link_check_col($PARAM_1,'id');
                $data['dmha_1']     = dmha_1_link_check_col($PARAM_1,'dmha_1');
                $data['dmha_2']     = dmha_1_link_check_col($PARAM_1,'dmha_2');
                $data['dmha_3']     = dmha_1_link_check_col($PARAM_1,'dmha_3');
                $data['dmha_4']     = dmha_1_link_check_col($PARAM_1,'dmha_4');

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


        // Show View
            $final_view = rules_for_layout($PARAM_1,$template_agent);
	        return view($final_view,$data);

    }
}
