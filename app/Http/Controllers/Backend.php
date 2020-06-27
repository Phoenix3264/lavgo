<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    use App\dmha_1;
    use App\dmha_2;
    use App\dmha_3;
    use App\dmha_4;

class Backend extends Controller
{
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
                  
  			// then, we check your link
                $data['id']         = dmha_1::link_check_col($PARAM_1,'id');
                $data['dmha_1']     = dmha_1::link_check_col($PARAM_1,'dmha_1');
                $data['dmha_2']     = dmha_1::link_check_col($PARAM_1,'dmha_2');
                $data['dmha_3']     = dmha_1::link_check_col($PARAM_1,'dmha_3');
                $data['dmha_4']     = dmha_1::link_check_col($PARAM_1,'dmha_4');

  			// We check your Template
                $template           = dmha_2::id_check_col(dmha_1::link_check_col($PARAM_1,'dmha_2'),'nama');
                $data['template']   = replace_to_underscore($template);
              
  			// We check your Controller
                $controller         = dmha_3::id_check_col(dmha_1::link_check_col($PARAM_1,'dmha_3'),'nama');
                $data['controller'] = $controller;

  			// We check your Page
                $page               = dmha_4::id_check_col(dmha_1::link_check_col($PARAM_1,'dmha_3'),'nama');
                $data['page']       = replace_to_underscore($page);

            // We check your script
                $script             = dmha_4::id_check_col(dmha_1::link_check_col($PARAM_1,'dmha_3'),'nama');
                $data['script']     = replace_to_underscore($script);

  			// Let me help you generate sidebar
                $data['sidebar_data'] = dmha_1::let_me_generate_sidebar('level_1',NULL);

        // Show View
            $final_view = rules_for_layout($PARAM_1);$template.'.layout_'.$template.'_'.$controller;
	        return view($final_view,$data);

    }
}
