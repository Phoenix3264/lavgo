<?php

	use App\Models\penelitian\dmha_364;

    function dmha_364_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_364::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_364_let_me_generate_data_array($AUTH_ID,$PARAM_ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_364::let_me_generate_data_array($AUTH_ID,$PARAM_ID);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_364_data_table($agent)
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
                    $isi .= th_me('Nama', $class_th);
                    $isi .= th_me('Latitude', $class_th);
                    $isi .= th_me('Longitude', $class_th);
                }
                if($agent->isMobile() == 1 )
                {
                    $isi .= th_me('Nama', $class_th);
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


    
    function dmha_364_create_me($filename,$latitude,$longitude,$nama)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_364::create_me($filename,$latitude,$longitude,$nama);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_364_update_me($id,$filename,$latitude,$longitude,$nama)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_364::update_me($id,$filename,$latitude,$longitude,$nama);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_364_delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_364::delete_me($id);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_364_show_mapbox_marker()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $isi_model    = dmha_364::let_me_generate_data_array(null,null);

        // ------------------------------------------------------------------------- ACTION
            foreach ($isi_model as $row) {
                $isi .= helper_mapbox_geojson($row->nama,$row->latitude,$row->longitude,$row->filename,364);
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_364_show_dashboard_widget_stats()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $isi_model    = dmha_364::let_me_generate_data_array(null,null);
            $color = dmha_322_id_check_col(dmha_1_id_check_col(364,'dmha_322'),'nama');
            $icon = dmha_5_id_check_col_icon(dmha_1_id_check_col(364,'dmha_5'),'fa');
            $nama = dmha_1_id_check_col(364,'nama');
        // ------------------------------------------------------------------------- ACTION

            $isi    .= UI_dashboard_widget_stats($color,$icon,$nama,count($isi_model));
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }