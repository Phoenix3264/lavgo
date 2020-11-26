<?php

use App\Models\system\dmha_1;

function color_admin_apple_v42_sidebar($AUTH_ID,$ID_DATA,$DMHA_1,$PARAM_2,$PARAM_3)
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
                        <a href="'.rules_link($row->link,$row->dmha_4,'NULL',$DMHA_1,'NULL','NULL').'">';
                        
                        // has_sub? caret
                        if ($row->has_sub == 1) { $isi .= '<b class="caret"></b>'; }
                            $icon = dmha_5_id_check_col($row->dmha_5,'fa') ;
                            $bg_color = dmha_322_id_check_col($row->dmha_322,'nama') ;
                            $isi .= '   
                            <span>
                                <i class="'.$icon.' '.$bg_color.'"></i> 
                                '.$row->nama.'
                            </span>
                        </a>
                        '.color_admin_apple_v42_sidebar2($AUTH_ID,$row->id,$DMHA_1,$PARAM_2,$PARAM_3).'
                    </li>                
                ';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function color_admin_apple_v42_sidebar2($AUTH_ID,$ID_DATA,$DMHA_1,$PARAM_2,$PARAM_3)
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
                        <a href="'.rules_link($row->link,$row->dmha_4,'NULL',$DMHA_1,'NULL','NULL').'">
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

    function color_admin_apple_v42_dropdown($AUTH_ID,$ID_DATA,$DMHA_1,$PARAM_2,$PARAM_3)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $model = dmha_1_let_me_generate_data_array($AUTH_ID,$DMHA_1,'dropdown_table');

        // ------------------------------------------------------------------------- ACTION
            if(count($model)>0)    
            {  
                $isi    .= '
                <div class="sub-menu">
                    <div class="">
                        <a href="javascript:;" data-toggle="dropdown" class="btn btn-white"> <i class="fas fa-caret-down"></i> </a>
                        <ul class="dropdown-menu">';
                        foreach($model as $row)
                        {
                            $isi .= '
                            <li><a href="'.rules_link($row->link,$row->dmha_4,$ID_DATA,$DMHA_1,$PARAM_2,$PARAM_3).'"                            
                            '.rules_link_target_blank($row->dmha_4).'
                            >
                                <i class="  '.dmha_5_id_check_col($row->dmha_5,'fa').'"></i> 
                                '.$row->nama.'
                                </a></li>';
                        }                        
                        $isi  .= '    
                        </ul>
                    </div>
                </div>';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function color_admin_apple_v42_button($AUTH_ID,$ID_DATA,$DMHA_1,$PARAM_2,$PARAM_3)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'btn btn-white';

            $model = dmha_1_let_me_generate_data_array($AUTH_ID,$DMHA_1,'button');

            IF($ID_DATA != 'NULL')
            {
                $ID_DATA = 'NULL';
            }

            // rules_link($link,$DMHA_4,$ID_DATA,$DMHA_1,$PARAM_2,$PARAM_3)
        // ------------------------------------------------------------------------- ACTION
            $isi    .= '
            <div class="text-right m-b-15 m-bt-15">';
            foreach($model as $row)
            {
                $isi .= '
                <a href="'.rules_link($row->link,$row->dmha_4,$ID_DATA,$DMHA_1,$PARAM_2,$PARAM_3).'" 
                    class="'.$class.'" 
                    id="'.$row->nama.'-'.$row->id.'"


                    >
                    <i class="'.dmha_5_id_check_col($row->dmha_5,'fa').'"></i> 
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


    function color_admin_apple_v42_singlebutton($AUTH_ID,$ID_DATA,$DMHA_1,$PARAM_2,$PARAM_3)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'btn btn-white';

            $model = dmha_1_let_me_generate_data_array($AUTH_ID,$DMHA_1,'singlebutton');

            IF($ID_DATA != 'NULL')
            {
                $ID_DATA = 'NULL';
            }

            $link = dmha_1_id_check_col($DMHA_1,'link');
            $dmha_4 = dmha_1_id_check_col($DMHA_1,'dmha_4');
            $id = $ID_DATA;
            $dmha_5 = dmha_1_id_check_col($DMHA_1,'dmha_5');
            $nama = dmha_1_id_check_col($DMHA_1,'nama');

        // ------------------------------------------------------------------------- ACTION
            $isi    .= '
            <div class="text-right m-b-15 m-bt-15">
                <a href="'.rules_link($link,$dmha_4,$ID_DATA,$DMHA_1,$PARAM_2,$PARAM_3).'" class="'.$class.'" id="'.$nama.'-'.$id.'">                    
                    <i class="'.dmha_5_id_check_col($dmha_5,'fa').'"></i> 
                    '.$nama.'
                </a>                 
            </div>
            ';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }  

    function color_admin_apple_v42_generate_button_modal($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'btn btn-white';

            $nama = replace_to_underscore(dmha_1_id_check_col($id,'nama'));

        // ------------------------------------------------------------------------- ACTION
            $isi    .= '
            <div class="text-right m-b-15 m-bt-15">   
                <a href="#'.$nama.'" class="btn btn-white" data-toggle="modal">
                    <i class="fas fa-plus"></i> 
                    Create
                </a>                    
            </div>
            ';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }  

    function color_admin_apple_v42_form($AUTH_ID,$DMHA_1,$DMHA_271,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'form-control';

            $model = dmha_15_generate_daftar_pertanyaan($AUTH_ID,$DMHA_1,'pertanyaan',null);

        // ------------------------------------------------------------------------- ACTION
            foreach($model as $row)
            {
                $isi .= '
                <div class="form-group row">
                    <label class="'.rules_for_label_form().' col-form-label">
                        '.dmha_13_id_check_col($row->dmha_13,'nama').'
                    </label>
                    <div class="col-md-'.dmha_13_id_check_col($row->dmha_13,'panjang').'">
                        '.dmha_13_generate_pertanyaan($row->dmha_13,$class,$DMHA_1,$DMHA_271,$ID,$AUTH_ID).'
                    </div>
                </div>
                ';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }  


    function color_admin_apple_v42_form_wizard($DMHA_1)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'form-control';
            // $AUTH_ID,$DMHA_1,$DMHA_271,$ID
            $DMHA_271 = dmha_1_id_check_col($DMHA_1,'dmha_271');
            $ID = $AUTH_ID = null;

            $model = dmha_15_generate_daftar_pertanyaan_form_wizard(NULL,$DMHA_1,'pertanyaan',null);
            $model2 = dmha_15_generate_daftar_pertanyaan(NULL,$DMHA_1,'pertanyaan',null);

        // ------------------------------------------------------------------------- ACTION
            $counter = 0;
            $isi .= '<ul>';
            foreach ($model as $row) 
            {
                $counter ++;
                $isi .= 
                '
                <li class="col-md-2 col-sm-4 col-6">
                    <a href="#step-'.$counter.'">
                        <span class="number">'.$row->dmha_431.'</span> 
                        <span class="info text-ellipsis">
                            '.dmha_431_id_check_col($row->dmha_431,'nama').'
                            <small class="text-ellipsis">
                            '.dmha_431_id_check_col($row->dmha_431,'deskripsi').'
                            </small>
                        </span>
                    </a>
                </li>
                ';
            }


                $isi .= 
                '
                <li class="col-md-4 col-sm-4 col-6">
                    <a href="#step-5">
                        <span class="number">5</span> 
                        <span class="info text-ellipsis">
                            Finish Regristration
                            <small class="text-ellipsis">
                                Submit data anda
                            </small>

                        </span>
                    </a>
                </li>
                ';
            $isi .= '</ul>';

            $counter = 0;
            $isi .= '<div>';
            foreach ($model as $row) 
            {
                $counter ++;
                $isi .= 
                '
                <div id="step-'.$counter.'">
                    <fieldset>
                        <div class="row">
                            <div class="col-md-10 offset-md-1">    
                                <h2 class="text-inverse">'.dmha_431_id_check_col($row->dmha_431,'nama').'</h2>        
                                ';    

                            foreach ($model2 as $row2) 
                            {
                                if($row2->dmha_431 == $row->dmha_431)
                                {
                                    $isi .= 
                                    '
                                    <div class="form-group row m-b-10">
                                        <label class="col-md-3 text-md-right col-form-label">                                    
                                            '.dmha_13_id_check_col($row2->dmha_13,'nama').'
                                        </label>
                                        <div class="col-md-'.(dmha_13_id_check_col($row2->dmha_13,'panjang')+2).'">
                                            '.dmha_13_generate_pertanyaan($row2->dmha_13,$class,$DMHA_1,$DMHA_271,$ID,$AUTH_ID).'
                                        </div>
                                    </div>
                                    ';
                                }
                            }
                                $isi .= 
                                '
                            </div>
                        </div>
                    </fieldset>
                </div>
                ';
            }

            
                $isi .= 
                '
                <div id="step-5">
                    <fieldset>
                        <div class="row">
                            <div class="col-md-10 offset-md-1">  
                                <div class="card">
                                    <div class="card-block">
                                        <blockquote class="card-blockquote">
                                            <p>
                                                Semoga kita bersama tumbuh semakin berwenang untuk mendampingi upaya sesama mencapai keindahan dari impian-impian mereka.
                                            </p>
                                            <footer class="text-muted f-s-12">
                                                <cite title="Source Title">
                                                    Mario Teguh
                                                </cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                                '.color_admin_apple_v42_submit('submit','submit','submit','Daftar',$DMHA_271).'
                            </div>
                        </div>
                    </fieldset>
                </div>
                ';
            $isi .= '</div>';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }  
    function color_admin_apple_v42_hidden($AUTH_ID,$DMHA_1,$DMHA_9,$PARAM_2,$PARAM_3,$id_data)
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

    function color_admin_apple_v42_submit($VALUE,$SUBMIT,$NAME,$LABEL,$DMHA_271)
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

    function color_admin_apple_v42_open_form_with_id($id)
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

    function color_admin_apple_v42_open_form_with_id_and_class($id,$class)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = UI_FORM_open_form_with_id($class,$id);
            
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function color_admin_apple_v42_open_form_enctype_with_id($id)
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

    function color_admin_apple_v42_open_table_with_id($id)
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

    function color_admin_apple_v42_modal_dialog_form($AUTH_ID,$DMHA_ID,$DMHA_271,$ID_DATA)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            //dmha_263_modal_form($AUTH_ID,$DMHA_ID,$DMHA_271,$ID_DATA)

            
            $class  = 'modal modal-message fade';
            $nama = dmha_1_id_check_col($DMHA_ID,'nama');
        // ------------------------------------------------------------------------- ACTION
            $isi = UI_modal_dialog_form($AUTH_ID,$DMHA_ID,$DMHA_271,$ID_DATA,$nama,$class);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }  

    function color_admin_apple_v42_breadcrumb($id,$yang_ke)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class = ' breadcrumb-item ';

            $nama = dmha_1_id_check_col($id,'nama');
            $link = NULL;

        // ------------------------------------------------------------------------- ACTION
            if($id != 6)
            {
                $isi    = UI_breadcrumb($class,$id,$nama,$link);
            }
            
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function color_admin_apple_v42_flash_message($status,$message)
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

    function color_admin_apple_v42_generate_autocomplete($ID_FORM,$DMHA_1,$DMHA_271,$PARAM_2,$PARAM_3,$id_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi .= color_admin_apple_v42_open_form_with_id($id_data);
            $isi .= csrf_field();
            $isi .= color_admin_apple_v42_hidden($DMHA_1,$DMHA_271,$PARAM_2,$PARAM_3,$id_data);
            $isi    .= '
            <div class="form-group row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control autocomplete autocomplete_'.$id_data.' "  name="autocomplete" id="'.$id_data.'" autocomplete="off">   
                </div>
                <div class="col-md-2">
                    '.color_admin_apple_v42_submit('submit',$id_data,'submit','SUBMIT',$DMHA_271).'
                </div>
            </div>
            </form>
            ';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function color_admin_apple_v42_page_container($agent)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
        // ------------------------------------------------------------------------- ACTION
            if($agent->isDesktop() == 1){
                $isi .= '<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">';
            }
            elseif($agent->isMobile() == 1){
                $isi .= '<div id="page-container" class="fade page-sidebar-fixed show page-with-wide-sidebar">';
            }
            
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }


    function color_admin_apple_v42_page_container_without_sidebar($agent)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
        // ------------------------------------------------------------------------- ACTION
            if($agent->isDesktop() == 1){
                $isi .= '<div id="page-container" class="fade page-without-sidebar page-header-fixed">';
            }
            elseif($agent->isMobile() == 1){
                $isi .= '<div id="page-container" class="fade page-without-sidebar page-header-fixed">';
            }
            
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function color_admin_apple_v42_card($agent,$link,$id_data,$dmha,$nama,$detail)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
        // ------------------------------------------------------------------------- ACTION
            if($agent->isDesktop() == 1){
                // $isi .= '<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">';
            }
            elseif($agent->isMobile() == 1){
                // $isi .= '<div id="page-container" class="fade page-sidebar-fixed show page-with-wide-sidebar">';
            }

            $isi .= '
            
            <a href="'.url('/').'/'.$link.'/'.$id_data.'" class="card-block col-md-3">
                <div class="card">
                    <img class="card-img-top" width="100%" src="'.url('/').Storage::url('app/public/storage/dmha_'.$dmha.'/'.dmha_14_generate_value(3,$dmha,$id_data,'filename')).'" alt="">
                    <div class="card-block">
                        <h4 class="card-title m-t-0 m-b-10">'.$nama.'</h4>
                        <p class="card-text">'.$detail.'</p>
                    </div>
                </div>
            </a>
            
            ';
            
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function color_admin_apple_v42_header_scroll($link,$nama,$class,$attr)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            
        // ------------------------------------------------------------------------- ACTION
            $isi .= '            
            <li class="">
                <a class=" '.$class.'" href="'.$link.'" data-click="scroll-to-target" '.$attr.'>
                    '.$nama.'
                </a>
            </li>            
            ';
            
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    
    function color_admin_apple_v42_ahref_small($link,$nama,$id,$attr,$class)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';


            $class  = 'btn btn-sm btn-white m-b-10 text-right '.$class;


        // ------------------------------------------------------------------------- ACTION
            $isi    .= '
            <a class="'.$class.'" href="'.$link.'" id="'.$id.'" '.$attr.'>'.$nama.'</a>
            ';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }  

    function color_admin_apple_v42_button_small($link,$nama,$id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'btn btn-sm btn-white m-b-10 text-right';


        // ------------------------------------------------------------------------- ACTION
            $isi    .= '
            <button type="button" class="'.$class.'" href="'.$link.'" id="'.$id.'">'.$nama.'</button>
            ';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }  