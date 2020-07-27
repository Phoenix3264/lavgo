<?php 

    function helper_unify_v263_link_header($ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class = 'nav-link g-color-primary--hover g-font-size-15 g-font-size-17--xl g-px-15--lg g-py-10 g-py-30--lg';


            $nama = dmha_1_id_check_col($ID,'nama');
            $link = dmha_1_id_check_col($ID,'link');

        // ------------------------------------------------------------------------- ACTION
            $isi = '
            <li class="nav-item">
                <a class="'.$class.'" href="'.url('/').'/'.$link.'">
                    '.$nama.'
                </a>
            </li>
            ';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
        //////////////////////////////////////////////////////////////////////////// 		
    }  