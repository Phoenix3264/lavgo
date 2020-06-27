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
