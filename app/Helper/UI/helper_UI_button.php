<?php

	use App\dmha_7;

    function button_panel_header($DMHA_2,$DMHA_7)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $model = dmha_7::let_me_generate_sidebar('button_panel_header',$DMHA_7);

        // ------------------------------------------------------------------------- ACTION
            if($DMHA_2 == 2)
            {
                $isi    .= '            
                <div class="row m-b-10">     
                    <div class="col-md-12">
                ';
                
                foreach($model as $row)
                {
                    $isi .= '
                    <a href="'.$row->link.'" class="btn btn-primary pull-right text-right">'.$row->nama.'</a>';
                }
                $isi    .= ' 
                    </div>
                </div>
                ';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }


    function button_submit_form($VALUE,$SUBMIT,$NAME,$LABEL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    .= ' 
            <div class="row">  
                <div class="col-md-8 offset-md-2">
                
                    <button 
                    type="submit" 
                    class="btn btn-lg btn-block btn-success"
                    value="'.$VALUE.'"
                    id="'.$SUBMIT.'"
                    name="'.$NAME.'">
                        '.$LABEL.'
                    </button>
                    <button type="button" class="btn btn-success btn-lg btn-block">
                        Submit
                    </button>
                </div>
            </div>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }