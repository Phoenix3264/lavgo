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

    function unify_v263_open_form_with_id($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'g-py-15';

        // ------------------------------------------------------------------------- ACTION
            $isi    = UI_FORM_open_form_with_id($class,$id);
            
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    

    function unify_v263_submit($VALUE,$SUBMIT,$NAME,$LABEL,$DMHA_271)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $CLASS  = 'btn btn-lg btn-block btn-primary m-b-15';
            if($DMHA_271 == 4)
            {
                $CLASS  = 'btn btn-lg btn-block btn-danger m-b-15';
            }            
            elseif($DMHA_271 == 9)
            {
                $CLASS  = 'btn btn-md btn-primary m-b-15';
            }

            

        // ------------------------------------------------------------------------- ACTION        
            if($DMHA_271 == 9)
            {
                $isi  .= button_submit_form($VALUE,$SUBMIT,$NAME,$LABEL,$CLASS);
            }
            else
            {
                $isi    .= ' 
                <div class="row">  
                    <div class="col-md-8 offset-md-2">
                        '.button_submit_form($VALUE,$SUBMIT,$NAME,$LABEL,$CLASS).'
                    </div>
                </div>';
            }
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }   
    
    function unify_v263_flash_message($status,$message)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
            //$isi    .= ' $("#form'.$FORM_NAME_ID.'").html(data.isi); ' ;

        // ------------------------------------------------------------------------- ACTION
            $isi = '
            <div class="alert '.$status.' fade show col-md-8 offset-md-2 text-center">
                <span class="close" data-dismiss="alert">×</span>
                '.$message.'
            </div>
            ';
            
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function unify_v263_hidden($AUTH_ID,$DMHA_1,$DMHA_9,$PARAM_2,$PARAM_3,$id_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'form-control';

        // ------------------------------------------------------------------------- ACTION
            $isi .= dmha_14_generate_input_hidden($class, 'a', $AUTH_ID);
            $isi .= dmha_14_generate_input_hidden($class, 'p', $DMHA_1);
            $isi .= dmha_14_generate_input_hidden($class, 't', $DMHA_9);
            $isi .= dmha_14_generate_input_hidden($class, 'p2', $PARAM_2);
            $isi .= dmha_14_generate_input_hidden($class, 'di', $id_data);
            $isi .= dmha_14_generate_input_hidden($class, 'p3', $PARAM_3);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }  

    function unify_v263_form($AUTH_ID,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15';

            $model = dmha_15_generate_daftar_pertanyaan($AUTH_ID,$DMHA_1,'pertanyaan',null);

        // ------------------------------------------------------------------------- ACTION
            foreach($model as $row)
            {
                $isi .= '
                
                <div class="mb-4">
                <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13 ">                        
                    '.dmha_13_id_check_col($row->dmha_13,'nama').'
                </label> 
                '.dmha_13_generate_pertanyaan($row->dmha_13,$class,$DMHA_1,$DMHA_271,$ID,$AUTH_ID).'
                </div>
                ';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }  