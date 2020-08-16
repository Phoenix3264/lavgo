<?php

	use App\Models\acadion\dmha_111;

    function dmha_111_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_111::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_111_let_me_generate_data_array($AUTH_ID,$PARAM_ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_111::let_me_generate_data_array($AUTH_ID,$PARAM_ID);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_111_data_table()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

        // ------------------------------------------------------------------------- ACTION
            $isi .= 
            general_colgroup(4).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'
                    '.th_me('Mata Pelajaran', $class_th).'
                    '.th_me('Kelas', $class_th).'
                    '.th_me('Action', $class_th).'
                </tr>
            </thead>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
	}

    function dmha_111_create_me($dmha_335,$dmha_171,$dmha_336,$filename)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_111::create_me($dmha_335,$dmha_171,$dmha_336,$filename);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_111_update_me($id,$dmha_335,$dmha_171,$dmha_336,$filename)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_111::update_me($id,$dmha_335,$dmha_171,$dmha_336,$filename);

        // ------------------------------------------------------------------------- SEND
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_111_delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_111::delete_me($id);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_111_data_card($agent)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $isi_model   = dmha_111::let_me_generate_data_array();
            $link = dmha_1_id_check_col(251,'link');

        // ------------------------------------------------------------------------- ACTION
            foreach ($isi_model as $row) {
                $isi .= color_admin_apple_v42_card($agent,$link,$row->id,111,dmha_336_id_check_col($row->dmha_336,'nama'),dmha_171_id_check_col($row->dmha_171,'nama'));
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }