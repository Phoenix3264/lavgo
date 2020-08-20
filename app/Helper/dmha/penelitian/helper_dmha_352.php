<?php

	use App\Models\penelitian\dmha_352;

    function dmha_352_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_352::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_352_let_me_generate_data_array($AUTH_ID,$PARAM_ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_352::let_me_generate_data_array($AUTH_ID,$PARAM_ID);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_352_data_table($agent)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

        // ------------------------------------------------------------------------- ACTION
            if($agent->isDesktop() == 1 )
            {
                $isi .= general_colgroup(6);
            }
            if($agent->isMobile() == 1 )
            {
                $isi .= general_colgroup(5);
            }

            $isi .='
            <thead>
                <tr>';
                $isi .= th_me('ID', $class_th);

                if($agent->isDesktop() == 1 )
                {
                    $isi .= th_me('Filename', $class_th);
                    $isi .= th_me('Lokasi', $class_th);
                    $isi .= th_me('Latitude', $class_th);
                    $isi .= th_me('Longitude', $class_th);
                }
                if($agent->isMobile() == 1 )
                {
                    $isi .= th_me('Lokasi', $class_th);
                    $isi .= th_me('Latitude', $class_th);
                    $isi .= th_me('Longitude', $class_th);
                }
                
                $isi .= th_me('Action', $class_th);
                
                $isi .='
                </tr>
            </thead>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
	}


    function dmha_352_data_table_data_siswa_per_kelas()
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
    
    function dmha_352_create_me($array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_352::create_me($array_data);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_352_update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_352::update_me($id,$array_data);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_352_delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_352::delete_me($id);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_352_show_dashboard_widget_stats()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $dmha = 352;

            $isi_model    = dmha_352::let_me_generate_data_array(null,null);
            $color = dmha_322_id_check_col(dmha_1_id_check_col($dmha,'dmha_322'),'nama');
            $icon = dmha_5_id_check_col_icon(dmha_1_id_check_col($dmha,'dmha_5'),'fa');
            $nama = dmha_1_id_check_col($dmha,'nama');
        // ------------------------------------------------------------------------- ACTION

            $isi    .= UI_dashboard_widget_stats($color,$icon,$nama,count($isi_model));
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }