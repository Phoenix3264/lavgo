<?php

	use App\Models\penelitian\dmha_344;

    function dmha_344_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_344::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_344_let_me_generate_data_array($AUTH_ID,$PARAM_ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_344::let_me_generate_data_array($AUTH_ID,$PARAM_ID);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_344_data_table($agent)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

        // ------------------------------------------------------------------------- ACTION
            if($agent->isDesktop() == 1 )
            {
                $isi .= general_colgroup(7);
            }
            if($agent->isMobile() == 1 )
            {
                $isi .= general_colgroup(7);
            }

            $isi .='
            <thead>
                <tr>';
                $isi .= th_me('ID', $class_th);

                if($agent->isDesktop() == 1 )
                {
                    $isi .= th_me('Filename', $class_th);
                    $isi .= th_me('Latitude', $class_th);
                    $isi .= th_me('Longitude', $class_th);
                    $isi .= th_me('Jalan', $class_th);
                    $isi .= th_me('Keramik', $class_th);
                }
                if($agent->isMobile() == 1 )
                {
                    $isi .= th_me('Filename', $class_th);
                    $isi .= th_me('Latitude', $class_th);
                    $isi .= th_me('Longitude', $class_th);
                    $isi .= th_me('Jalan', $class_th);
                    $isi .= th_me('Keramik', $class_th);
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


    function dmha_344_data_table_data_siswa_per_kelas()
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
    
    function dmha_344_create_me($filename,$latitude,$longitude,$jalan,$dmha_356)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_344::create_me($filename,$latitude,$longitude,$jalan,$dmha_356);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_344_update_me($id,$filename,$latitude,$longitude,$jalan,$dmha_356)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_344::update_me($id,$filename,$latitude,$longitude,$jalan,$dmha_356);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_344_delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_344::delete_me($id);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_344_show_mapbox_marker()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $isi_model    = dmha_344::let_me_generate_data_array(null,null);

        // ------------------------------------------------------------------------- ACTION
            foreach ($isi_model as $row) {
                $isi .= helper_mapbox_geojson(dmha_356_id_check_col($row->dmha_356,'nama'),$row->latitude,$row->longitude,$row->filename,344);
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_344_show_dashboard_widget_stats()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $dmha = 344;

            $isi_model    = dmha_344::let_me_generate_data_array(null,null);
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