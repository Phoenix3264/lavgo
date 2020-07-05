<?php

    function rules_for_layout($link)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            $template           = dmha_2_id_check_col(dmha_1_link_check_col($link,'dmha_2'),'nama');            
            $controller         = dmha_3_id_check_col(dmha_1_link_check_col($link,'dmha_3'),'nama');

        // ------------------------------------------------------------------------- ACTION
            $isi    .= $template.'.layout_'.$template.'_'.$controller;

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }

    function rules_link_sidebar($link,$ID=NULL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $isi    =  $link;

        // ------------------------------------------------------------------------- ACTION
            if($link != 'javascript:;')
            {
                $isi = url('/').'/'.$link;
                if(!is_null($ID)){$isi .= '/'.$ID;}
            }                

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }

    function rules_active_sidebar($ID,$ID_CHECK)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            if($ID == $ID_CHECK)
            {
                $isi = 'active';
            }    
            else
            {
                $temp_ID = dmha_1_id_check_col($ID,'dmha_1');

                if($temp_ID == $ID_CHECK)
                {
                    $isi = 'active';
                }
            }            

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }

    function dev_mode_show_page_detail($AUTH_ID,$DMHA_1)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

		// ------------------------------------------------------------------------- ACTION
            $isi .= 
            data_tabel_open_with_id('dev-mode-'.$DMHA_1).
            general_colgroup(7).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'
                    '.th_me('Nama', $class_th).'
                    '.th_me('Template', $class_th).'
                    '.th_me('Controller', $class_th).'
                    '.th_me('Page', $class_th).'
                    '.th_me('Icon', $class_th).'
                    '.th_me('Kategori', $class_th).'
                </tr>
            </thead>
            <tbody>
            ';     
                $isi .= '
                <tr>
                '.td_me($DMHA_1, 'text-center').'
                '.td_me(dmha_1_id_check_col($DMHA_1,'nama'), '').'
                '.td_me(dmha_2_id_check_col(dmha_1_id_check_col($DMHA_1,'dmha_2'),'nama'), '').'
                '.td_me(dmha_3_id_check_col(dmha_1_id_check_col($DMHA_1,'dmha_3'),'nama'), '').'
                '.td_me(dmha_4_id_check_col(dmha_1_id_check_col($DMHA_1,'dmha_4'),'nama'), '').'
                '.td_me(dmha_5_id_check_col(dmha_1_id_check_col($DMHA_1,'dmha_5'),'nama'), '').'
                '.td_me(dmha_9_id_check_col(dmha_1_id_check_col($DMHA_1,'dmha_9'),'nama'), '').'
                </tr>
                ';
                
            $isi .= '
            </tbody>'.
            UI_tabel_close();
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function rules_for_label_form()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            

        // ------------------------------------------------------------------------- ACTION
            $isi    .= 'col-md-4';

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }