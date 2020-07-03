<?php

	use App\dmha_1;

    function dmha_1_link_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_1::link_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_1_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_1::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_1_data_table($AUTH_ID,$DMHA_1)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';
            $model = dmha_1::let_me_generate_data_array($AUTH_ID,'data_table',NULL);

		// ------------------------------------------------------------------------- ACTION
            $isi .= 
            general_colgroup(8).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'
                    '.th_me('Nama', $class_th).'
                    '.th_me('Template', $class_th).'
                    '.th_me('Controller', $class_th).'
                    '.th_me('Page', $class_th).'
                    '.th_me('Icon', $class_th).'
                    '.th_me('Kategori', $class_th).'
                    '.th_me('Action', $class_th).'
                </tr>
            </thead>
            <tbody>
            ';            
            foreach($model as $row)
            {
                $isi .= '
                '.td_me($row->id, 'text-center').'
                '.td_me($row->nama, '').'
                '.td_me(dmha_2_id_check_col($row->dmha_2,'nama'), '').'
                '.td_me(dmha_3_id_check_col($row->dmha_3,'nama'), '').'
                '.td_me(dmha_4_id_check_col($row->dmha_4,'nama'), '').'
                '.td_me(dmha_5_id_check_col($row->dmha_5,'nama'), '').'
                '.td_me(dmha_9_id_check_col($row->dmha_9,'nama'), '').'
                '.td_me(color_admin_v42_dropdown($AUTH_ID,$DMHA_1,$row->id), 'text-center').'
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

    function dmha_1_let_me_generate_data_array($AUTH_ID,$TIPE,$PARAM_ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_1::let_me_generate_data_array($AUTH_ID,$TIPE,$PARAM_ID);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
