<?php

	use App\dmha_87;

    function dmha_87_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_87::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_87_let_me_generate_data_array($AUTH_ID,$PARAM_ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_87::let_me_generate_data_array($AUTH_ID,$PARAM_ID);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_87_data_table()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

        // ------------------------------------------------------------------------- ACTION
            $isi .= 
            general_colgroup(3).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'
                    '.th_me('Nama', $class_th).'
                    '.th_me('Action', $class_th).'
                </tr>
            </thead>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
	}