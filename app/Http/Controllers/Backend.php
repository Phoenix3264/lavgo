<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    use App\dmha_2;
    use App\dmha_3;
    use App\dmha_4;
    use App\dmha_5;
    use App\dmha_7;

class Backend extends Controller
{
    //
    public function index($PARAM_1=NULL,$PARAM_2=NULL)
  	{
        // Set Rules
            // Timezone
                date_default_timezone_set('Asia/Jakarta');

  		// Initialize
  			// lets start the array
                $data = array();
                  
  			// then, we check your link
                $INIT_param_1 = dmha_7::let_me_check_what_is_your_dmha_id($PARAM_1);
                    $data['id']            = $INIT_param_1['id'];
                    $ID_for_dmha_2      = $INIT_param_1['dmha_2'];
                        $data['dmha_2']            = $ID_for_dmha_2;
                    $ID_for_dmha_3      = $INIT_param_1['dmha_3'];
                    $ID_for_dmha_4      = $INIT_param_1['dmha_4'];
                        $data['dmha_4']            = $ID_for_dmha_4;
                    $ID_for_dmha_5      = $INIT_param_1['dmha_5'];
                        $data['dmha_5']            = $ID_for_dmha_5; 
                    $ID_for_dmha_7      = $INIT_param_1['dmha_7'];   
                        $data['dmha_7']            = $ID_for_dmha_7;    
                    $data['has_sub']            = $INIT_param_1['has_sub'];
                    $data['additional_script']  = $INIT_param_1['additional_script'];

  			// We check your Template
                $temp = dmha_2::let_me_check_your_details($ID_for_dmha_2);
                $template           = $temp['nama'];
                $data['template']   = $template;
              
  			// We check your Controller
                $temp = dmha_3::let_me_check_your_details($ID_for_dmha_3);
                $controller = $temp['nama'];
                $data['controller']   = $controller;

  			// We check your Page
                $temp = dmha_4::let_me_check_your_details($ID_for_dmha_4);
                $page           = str_replace(' ','_',$temp['nama']);
                $data['page']   = $page;

  			// We check your Script
                $temp = dmha_5::let_me_check_your_details($ID_for_dmha_5);
                $script           = str_replace(' ','_',$temp['nama']);
                $data['script']   = $script;

  			// Let me help you generate sidebar
                $temp_7 = dmha_7::let_me_generate_sidebar('level_1',NULL);
                $data['sidebar_data']   = $temp_7;

        // Show View
            $final_view = $template.'.layout_'.$template.'_'.$controller;
	        return view($final_view,$data);

    }
}
