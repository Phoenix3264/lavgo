<?php

    function UI_breadcrumb($class,$id,$nama,$link)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $gabungan = '';

        // ------------------------------------------------------------------------- ACTION
            if(!is_null($id) && $link != 'javascript:;')
            {
                if(is_null($link)){
                    $isi = '<li class="'.$class.' active">'.$nama.'</li>';

                }else{
                    $isi = '<li class="'.$class.'"><a href="'.url('/').'/'.$link.'">'.$nama.'</a></li>';
                }

                
                $dmha_1 = dmha_1_id_check_col($id,'dmha_1');
                $nama   = dmha_1_id_check_col($dmha_1,'nama');
                $link   = dmha_1_id_check_col($dmha_1,'link');


                $gabungan = UI_breadcrumb($class,$dmha_1,$nama,$link).$isi;
            }

        // ------------------------------------------------------------------------- SEND
            $word = $gabungan;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
