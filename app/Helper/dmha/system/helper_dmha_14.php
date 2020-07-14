<?php

	use App\dmha_14;

    function dmha_14_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_14::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_let_me_generate_data_array($AUTH_ID,$PARAM_ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_14::let_me_generate_data_array($AUTH_ID,$PARAM_ID);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_data_table()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

        // ------------------------------------------------------------------------- ACTION
            $isi .= 
            general_colgroup(3).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'
                    '.th_me('Nama', $class_th).'
                    '.th_me('Action', $class_th).'
                </tr>
            </thead>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_value($dmha_14,$name,$DMHA_1,$DMHA_9,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            if($DMHA_9 == 3)
            {
                if($DMHA_1 == 1) { $isi .= ' value="'.dmha_1_id_check_col($ID,$name).'" ';  }  
                elseif($DMHA_1 == 2) { $isi .= ' value="'.dmha_2_id_check_col($ID,$name).'" ';  }  
                elseif($DMHA_1 == 3) { $isi .= ' value="'.dmha_3_id_check_col($ID,$name).'" ';  }  
                elseif($DMHA_1 == 4) { $isi .= ' value="'.dmha_4_id_check_col($ID,$name).'" ';  }  
                elseif($DMHA_1 == 5) { $isi .= ' value="'.dmha_5_id_check_col($ID,$name).'" ';  }  
                elseif($DMHA_1 == 8) { $isi .= ' value="'.dmha_8_id_check_col($ID,$name).'" ';  }  
                elseif($DMHA_1 == 9) { $isi .= ' value="'.dmha_9_id_check_col($ID,$name).'" ';  }  
                elseif($DMHA_1 == 13) { $isi .= ' value="'.dmha_13_id_check_col($ID,$name).'" ';  }  
                elseif($DMHA_1 == 14) { $isi .= ' value="'.dmha_14_id_check_col($ID,$name).'" ';  }  
                else{ $isi .= ' value="please set dmha_14_generate_value" '; }
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_value_selected($VALUE,$DMHA_1,$ID,$name)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $COL = '';

        // ------------------------------------------------------------------------- ACTION
            if($DMHA_1 == 1) { $COL = dmha_1_id_check_col($ID,$name);  }  
            elseif($DMHA_1 == 2) { $COL = dmha_2_id_check_col($ID,$name);  }  
            elseif($DMHA_1 == 3) { $COL = dmha_3_id_check_col($ID,$name);  }  
            elseif($DMHA_1 == 4) { $COL = dmha_4_id_check_col($ID,$name);  }  
            elseif($DMHA_1 == 5) { $COL = dmha_5_id_check_col($ID,$name);  }  
            elseif($DMHA_1 == 8) { $COL = dmha_8_id_check_col($ID,$name);  }  
            elseif($DMHA_1 == 9) { $COL = dmha_9_id_check_col($ID,$name);  }  
            elseif($DMHA_1 == 13) { $COL = dmha_13_id_check_col($ID,$name);  }  
            
            if($VALUE == $COL)
            {
                $isi .= 'selected';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_value_checked($VALUE,$DMHA_1,$ID,$name)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $COL = '';

        // ------------------------------------------------------------------------- ACTION
            if($DMHA_1 == 1) { $COL = dmha_1_id_check_col($ID,$name);  }  
            
            if($VALUE == $COL)
            {
                $isi .= 'checked';
            }

            //$isi .= $ID.'--'.$name.'---'.$COL.'----'.$DMHA_1;
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_create_me($array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_14::create_me($array_data);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_14::update_me($id,$array_data);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_14::delete_me($id);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_input_type($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_9,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = ''; 
            $is_foreach = true;

        // ------------------------------------------------------------------------- ACTION
            if($dmha_14 == 1) { $isi .= dmha_14_generate_input_text($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_9,$ID); }  
            elseif($dmha_14 == 2) { $isi .= dmha_14_generate_input_number($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_9,$ID); }  
            elseif($dmha_14 == 3) { $isi .= dmha_14_generate_select($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_9,$ID); }  
            elseif($dmha_14 == 4) { $isi .= dmha_14_generate_radio_horizontal($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_9,$ID); }  
            elseif($dmha_14 == 5) { $isi .= dmha_14_generate_input_select($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_9,$ID); }  
            elseif($dmha_14 == 6) { $isi .= dmha_14_generate_switcher($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_9,$ID); }  
            elseif($dmha_14 == 7) { $isi .= dmha_14_generate_input_select($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_9,$ID); }  

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_input_hidden($class,$name,$value)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            // $type = 'type';
             $type = 'hidden';

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="'.$type.'" class="'.$class.'"  name="'.$name.'"  value="'.$value.'"  >';       

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_input_text($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_9,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="text" class="'.$class.'" id="form-'.$dmha_13.'" name="'.$name.'" '.dmha_14_generate_value($dmha_14,$name,$DMHA_1,$DMHA_9,$ID).' >';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_input_number($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_9,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $type = 'type';
            // $type = 'hidden';

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="number" class="'.$class.'" id="form-'.$dmha_13.'" name="'.$name.'" '.dmha_14_generate_value($dmha_14,$name,$DMHA_1,$DMHA_9,$ID).' >';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_select($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_9,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $type = 'type';
            // $type = 'hidden';

        // ------------------------------------------------------------------------- ACTION
            $isi .= '
                <select class="'.$class.'"  id="form-'.$dmha_13.'"  name="'.$name.'">';

                if($dmha_13 == 3) { $isi_model = dmha_14_let_me_generate_data_array(null,null); }
                elseif($dmha_13 == 8) { $isi_model = dmha_2_let_me_generate_data_array(null,null); }
                elseif($dmha_13 == 8) { $isi_model = dmha_2_let_me_generate_data_array(null,null); }
                elseif($dmha_13 == 9) { $isi_model = dmha_3_let_me_generate_data_array(null,null); }
                elseif($dmha_13 == 10) { $isi_model = dmha_4_let_me_generate_data_array(null,null); }
                elseif($dmha_13 == 12) { $isi_model = dmha_9_let_me_generate_data_array(null,null); }

                
                elseif($dmha_13 == 18) { $isi_model = dmha_144_let_me_generate_data_array(null,null); }
                elseif($dmha_13 == 22) { $isi_model = dmha_9_let_me_generate_data_array(null,null); }
                elseif($dmha_13 == 23) { $isi_model = dmha_9_let_me_generate_data_array(null,null); }
                elseif($dmha_13 == 24) { $isi_model = dmha_9_let_me_generate_data_array(null,null); }
                elseif($dmha_13 == 25) { $isi_model = dmha_126_let_me_generate_data_array(null,null); }
                elseif($dmha_13 == 26) { $isi_model = dmha_130_let_me_generate_data_array(null,null); }
                elseif($dmha_13 == 27) { $isi_model = dmha_134_let_me_generate_data_array(null,null); }
                elseif($dmha_13 == 28) { $isi_model = dmha_138_let_me_generate_data_array(null,null); }

                $isi .= '<option value="">Pilihan '.dmha_13_id_check_col($dmha_13,'nama').'</option>';

                foreach ($isi_model as $row) { $isi .= '<option value="'.$row->id.'" '.dmha_14_generate_value_selected($row->id,$DMHA_1,$ID,$name).'>'.$row->nama.'</option>'; }

            $isi .= '
                </select>'; 
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_radio_horizontal($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_9,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

            if($dmha_13 == 11) { $isi_model = dmha_5_let_me_generate_data_array(null,null); }

        // ------------------------------------------------------------------------- ACTION
            foreach ($isi_model as $row) {
            $isi .= '            
            <div class="radio radio-css radio-inline">
                <input type="radio" name="'.$name.'" id="form'.$dmha_13.$row->id.'" value="'.$row->id.'" checked="'.dmha_14_generate_value_checked($row->id,$DMHA_1,$ID,$name).'" '.dmha_14_generate_value_checked($row->id,$DMHA_1,$ID,$name).'>
                <label for="inlineCssRadio1">'.$row->fa.'</label>
            </div>';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_radio_vertical($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_9,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $type = 'type';
            // $type = 'hidden';

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input type="number" class="'.$class.'" id="form-'.$dmha_13.'" name="'.$name.'" '.dmha_14_generate_value($dmha_14,$name,$DMHA_1,$DMHA_9,$ID).' >';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_switcher($dmha_14,$class,$dmha_13,$name,$DMHA_1,$DMHA_9,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $type = 'type';
            // $type = 'hidden';

        // ------------------------------------------------------------------------- ACTION
            $isi .= '
            <div class="col-md-9 p-t-3">
                <div class="switcher">
                    <input type="checkbox" name="switcher_checkbox_1" id="switcher_checkbox_1" checked="" value="1">
                    <label for="switcher_checkbox_1"></label>
                </div>
            </div>
            ';      

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

