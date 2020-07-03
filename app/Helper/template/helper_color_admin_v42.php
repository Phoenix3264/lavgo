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

