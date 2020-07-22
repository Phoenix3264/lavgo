<?php

    function color_admin_material_v42_sidebar($AUTH_ID,$ID_DATA,$DMHA_1,$PARAM_2)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $model = dmha_1_let_me_generate_data_array($AUTH_ID,NULL,'sidebar_1');

        // ------------------------------------------------------------------------- ACTION
            foreach ($model as $row) 
            {
                $isi .= '
                    <li class="';

                    // has_sub?
                    if ($row->has_sub == 1) { $isi .= ' has-sub '; }

                    $isi .= rules_active_sidebar($DMHA_1,$row->id,'level1');
                    $isi .= '
                    ">
                        <a href="'.rules_link($row->link,$row->dmha_4,'NULL',$DMHA_1,'NULL').'">';
                        
                        // has_sub? caret
                        if ($row->has_sub == 1) { $isi .= '<b class="caret"></b>'; }
    
                            $isi .= '                            
                            <i class="'.dmha_5_id_check_col($row->dmha_5,'nama').'"></i> ';

                            $isi .= '   
                            <span>
                                '.dmha_5_id_check_col($row->dmha_5,'fa').'
                                '.$row->nama.'
                            </span>
                        </a>
                        '.color_admin_material_v42_sidebar2($AUTH_ID,$row->id,$DMHA_1,$PARAM_2).'
                    </li>                
                ';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function color_admin_material_v42_sidebar2($AUTH_ID,$ID_DATA,$DMHA_1,$PARAM_2)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $model = dmha_1_let_me_generate_data_array($AUTH_ID,$ID_DATA,'sidebar_2');

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<ul class="sub-menu">';
            foreach ($model as $row) 
            {
                $isi .= '
                    <li class="'.rules_active_sidebar($DMHA_1,$row->id,'level2').'">
                        <a href="'.rules_link($row->link,$row->dmha_4,'NULL',$DMHA_1,'NULL').'">
                            '.$row->nama.'
                        </a>
                    </li>                          
                ';
            }

            $isi .= '</ul>';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function color_admin_material_v42_dropdown($AUTH_ID,$ID_DATA,$DMHA_1,$PARAM_2)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $model = dmha_1_let_me_generate_data_array($AUTH_ID,$DMHA_1,'dropdown_table');

        // ------------------------------------------------------------------------- ACTION
                  
            $isi    .= '
            <ul class="sub-menu">
                <div class="btn-group ">
                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-white dropdown-toggle"></a>
                    <ul class="dropdown-menu">';
                    foreach($model as $row)
                    {
                        $isi .= '
                        <li><a href="'.rules_link($row->link,$row->dmha_4,$ID_DATA,$DMHA_1,$PARAM_2).'"
                        
                        '.rules_link_target_blank($row->dmha_4).'
                        >
                            '.dmha_5_id_check_col($row->dmha_5,'fa').' 
                            '.$row->nama.'
                            </a></li>';
                    }                        
                    $isi  .= '    
                    </ul>
                </div>
            </ul>';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function color_admin_material_v42_button($AUTH_ID,$ID_DATA,$DMHA_1,$PARAM_2)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'btn btn-white';

            $model = dmha_1_let_me_generate_data_array($AUTH_ID,$DMHA_1,'button');

            IF($ID_DATA != 'NULL')
            {
                $ID_DATA = 'NULL';
            }

        // ------------------------------------------------------------------------- ACTION
            $isi    .= '
            <div class="text-right m-b-15 m-bt-15">';
            foreach($model as $row)
            {
                $isi .= '
                <a href="'.rules_link($row->link,$row->dmha_4,$ID_DATA,$DMHA_1,$PARAM_2).'" 
                    class="'.$class.'" 
                    id="'.$row->nama.'-'.$row->id.'"


                    >
                    '.dmha_5_id_check_col($row->dmha_5,'fa').'
                    '.$row->nama.'
                </a>
                ';
            }
                
            $isi  .= ' 
            </div>
            ';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }  

    function color_admin_material_v42_form($AUTH_ID,$DMHA_1,$DMHA_9,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'form-control';

            $model = dmha_15_generate_daftar_pertanyaan($AUTH_ID,$DMHA_1,'default');

        // ------------------------------------------------------------------------- ACTION
            foreach($model as $row)
            {
                $isi .= '
                <div class="form-group row">
                    <label class="'.rules_for_label_form().' col-form-label">
                        '.dmha_13_id_check_col($row->dmha_13,'nama').'
                    </label>
                    <div class="col-md-'.dmha_13_id_check_col($row->dmha_13,'panjang').'">
                        '.dmha_13_generate_pertanyaan($row->dmha_13,$class,$DMHA_1,$DMHA_9,$ID).'
                    </div>
                </div>
                ';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }  

    function color_admin_material_v42_hidden($DMHA_1,$DMHA_9,$PARAM_2,$PARAM_3)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'form-control';

        // ------------------------------------------------------------------------- ACTION
            $isi .= dmha_14_generate_input_hidden($class, 'p', $DMHA_1);
            $isi .= dmha_14_generate_input_hidden($class, 'c', $DMHA_9);
            $isi .= dmha_14_generate_input_hidden($class, 'i', $PARAM_2);
            $isi .= dmha_14_generate_input_hidden($class, 'i2', $PARAM_3);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }  

    function color_admin_material_v42_submit($VALUE,$SUBMIT,$NAME,$LABEL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $CLASS  = 'btn btn-lg btn-block btn-success m-b-15';

        // ------------------------------------------------------------------------- ACTION
            $isi    .= ' 
            <div class="row">  
                <div class="col-md-8 offset-md-2">
                    '.button_submit_form($VALUE,$SUBMIT,$NAME,$LABEL,$CLASS).'
                </div>
            </div>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }    

    function color_admin_material_v42_open_form()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'form-horizontal form-bordered';

        // ------------------------------------------------------------------------- ACTION
            $isi    = open_form($class);
            
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function color_admin_material_v42_open_form_with_id($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'form-horizontal form-bordered';

        // ------------------------------------------------------------------------- ACTION
            $isi    = UI_FORM_open_form_with_id($class,$id);
            
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function color_admin_material_v42_open_form_enctype_with_id($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'form-horizontal form-bordered';

        // ------------------------------------------------------------------------- ACTION
            $isi    = UI_FORM_open_form_enctype($class,$id);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function color_admin_material_v42_open_table_with_id($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'table table-striped table-bordered';

        // ------------------------------------------------------------------------- ACTION
            $isi = UI_table_open_table_with_id($class,$id);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }  

    function color_admin_material_v42_modal_dialog_form($AUTH_ID,$id_dmha,$dmha_2,$id_modal)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'table table-striped table-bordered';

        // ------------------------------------------------------------------------- ACTION
            $isi = UI_modal_dialog_form($AUTH_ID,$id_dmha,$dmha_2,$id_modal);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }  