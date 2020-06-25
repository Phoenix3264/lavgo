<?php

    use App\dmha_28;

    function general_input_type($DMHA_28)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class  = 'form-control';

            $DMHA_32    = dmha_28::id_check_col($DMHA_28,'dmha_32');
            $name       = dmha_28::id_check_col($DMHA_28,'name');

        // ------------------------------------------------------------------------- ACTION
            if($DMHA_32 == 1)
            {
                $isi .= '<input 
                type="text" 
                class="'.$class.'"
                name="form-control"
                >';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
