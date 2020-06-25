<?php

	use App\dmha_7;

    function dropdown_table($DMHA_2,$DMHA_7,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $model = dmha_7::let_me_generate_sidebar('dropdown_table',$DMHA_7);

        // ------------------------------------------------------------------------- ACTION
            if($DMHA_2 == 2)
            {
                $isi    .= '     
                <div class="btn-group ">
                    <a href="javascript:;" data-toggle="dropdown" class="btn btn-white dropdown-toggle"></a>
                    <ul class="dropdown-menu">';

                    foreach($model as $row)
                    {
                        $isi .= '
                        <li><a href="'.$row->link.'/'.$ID.'">'.$row->nama.'</a></li>';
                    }
                        
                $isi    .= '    
                    </ul>
                </div>';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
