<?php

	use App\dmha_3;

    function dmha_3_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_3::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_3_data_table($AUTH_ID,$dmha_1)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';
            $model = dmha_3::let_me_generate_data_array($AUTH_ID,NULL);

		// ------------------------------------------------------------------------- ACTION
            $isi .= 
            general_colgroup(3).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'
                    '.th_me('Nama', $class_th).'
                    '.th_me('Action', $class_th).'
                </tr>
            </thead>
            <tbody>
            ';            
            foreach($model as $row)
            {
                $isi .= '
                <tr>
                '.td_me($row->id, 'text-center').'
                '.td_me($row->nama, '').'
                '.td_me(color_admin_v42_dropdown($AUTH_ID,$dmha_1,$row->id), 'text-center').'
                </tr>
                ';
            }
                
            $isi .= '
            </tbody>
            ';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
	}