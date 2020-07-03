<?php

	use App\dmha_7;

    function sidebar_level_2($DMHA_2,$DMHA_7,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $model = dmha_7::let_me_generate_sidebar('level_2',$DMHA_7);

        // ------------------------------------------------------------------------- ACTION
            if($DMHA_2 == 2)
            {
                $isi    .= '            
                <ul class="sub-menu">';                
                    foreach($model as $row)
                    {
                        $isi .= '
                        <li class="'.check_active($row->id,$ID,'level_2').'"><a href="'.url('/').'/'.$row->link.'">'.$row->nama.'</a></li>';
                    }
                $isi    .= ' 
                </ul>
                ';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function check_active($SIDEBAR_ID,$ID,$STATUS)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            if(intval($SIDEBAR_ID) == intval($ID))
            {
                $isi =  ' active ';
            }
            else
            {
                if($STATUS == 'level_2')
                {
                    $model = id_check_col_dmha_7($SIDEBAR_ID,'dmha_7');

                    if($model == $ID)
                    { 
                        $isi = ' active '; 
                    }
                    else
                    {
                        $isi = check_active($SIDEBAR_ID,$model,'level_2');
                    }
                }
                elseif($STATUS == 'level_1')
                {
                    $model = id_check_col_dmha_7($ID,'dmha_7');

                    if($model == $SIDEBAR_ID)
                    { 
                        $isi = ' active ';
                    }
                    else
                    {
                        $isi = check_active($model,$ID,'level_1');
                    }
                }

                if($model == $ID){ $isi = ' active '; }
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
