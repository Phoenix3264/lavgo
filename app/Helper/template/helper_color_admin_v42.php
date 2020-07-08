<?php

    function color_admin_v42_sidebar($AUTH_ID,$PARAM_ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $model = dmha_1_let_me_generate_data_array($AUTH_ID,'sidebar_1',$PARAM_ID);

        // ------------------------------------------------------------------------- ACTION
            foreach ($model as $row) 
            {
                $isi .= '
                    <li class="';

                    // has_sub?
                    if ($row->has_sub == 1) { $isi .= ' has-sub '; }

                    $isi .= rules_active_sidebar($PARAM_ID,$row->id);
                    $isi .= '
                    ">
                        <a href="'.rules_link_sidebar($row->link).'">';
                        
                        // has_sub? caret
                        if ($row->has_sub == 1) { $isi .= '<b class="caret"></b>'; }
    
                            $isi .= '                            
                            <i class="'.dmha_5_id_check_col($row->dmha_5,'nama').'"></i> ';

                            $isi .= '   
                            <span>
                                '.$row->nama.'
                            </span>
                        </a>
                        '.color_admin_v42_sidebar2($AUTH_ID,$PARAM_ID,$row->id).'
                    </li>                
                ';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function color_admin_v42_sidebar2($AUTH_ID,$PARAM_ID,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $model = dmha_1_let_me_generate_data_array($AUTH_ID,'sidebar_2',$ID);

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<ul class="sub-menu">';
            foreach ($model as $row) 
            {
                $isi .= '
                    <li class="'.rules_active_sidebar($PARAM_ID,$row->id).'">
                        <a href="'.rules_link_sidebar($row->link).'">
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

    function color_admin_v42_dropdown($AUTH_ID,$DMHA_1,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $model = dmha_1_let_me_generate_data_array($AUTH_ID,'dropdown_table',$DMHA_1);

        // ------------------------------------------------------------------------- ACTION
                  
            $isi    .= '
            <ul class="sub-menu">
                <div class="btn-group ">
                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-white dropdown-toggle"></a>
                    <ul class="dropdown-menu">';
                    foreach($model as $row)
                    {
                        $isi .= '
                        <li><a href="'.rules_link_sidebar($row->link,$ID).'">'.$row->nama.'</a></li>';
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

    function color_admin_v42_button($AUTH_ID,$DMHA_1)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'btn btn-info';

            $model = dmha_1_let_me_generate_data_array($AUTH_ID,'button',$DMHA_1);

        // ------------------------------------------------------------------------- ACTION
            $isi    .= '
            <div class="text-right m-b-15 m-bt-15">';
            foreach($model as $row)
            {
                $isi .= '
                <a href="'.rules_link_sidebar($row->link,NULL).'" 
                    class="'.$class.'" 
                    id="'.$row->nama.'-'.$row->id.'">
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

    function color_admin_v42_form($AUTH_ID,$DMHA_1)
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
                        '.dmha_13_generate_pertanyaan($row->dmha_13,$class).'
                    </div>
                </div>
                ';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }  

    function color_admin_v42_hidden($AUTH_ID,$DMHA_1)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'form-control';

        // ------------------------------------------------------------------------- ACTION
            $isi .= dmha_14_generate_input_hidden($class, 'ida', $AUTH_ID);
            $isi .= dmha_14_generate_input_hidden($class, 'id', $DMHA_1);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }  

    function color_admin_v42_submit($VALUE,$SUBMIT,$NAME,$LABEL)
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

    function color_admin_v42_open_form()
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

    function color_admin_v42_open_table_with_id($id)
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

    function color_admin_v42_modal_dialog_form($AUTH_ID,$id_dmha,$dmha_2,$id_modal)
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