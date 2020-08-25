<?php

	use App\Models\penelitian\dmha_348;

    function dmha_348_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_348::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_348_let_me_generate_data_array($AUTH_ID,$PARAM_ID,$TIPE)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_348::let_me_generate_data_array($AUTH_ID,$PARAM_ID,$TIPE);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_348_data_table($agent)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

        // ------------------------------------------------------------------------- ACTION
            if($agent->isDesktop() == 1 )
            {
                $isi .= general_colgroup(9);
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
                    $isi .= th_me('Stasiun', $class_th);
                    $isi .= th_me('Fasilitas', $class_th);
                    $isi .= th_me('Jumlah', $class_th);
                    $isi .= th_me('Latitude', $class_th);
                    $isi .= th_me('Longitude', $class_th);
                    $isi .= th_me('Tanggal', $class_th);
                }
                if($agent->isMobile() == 1 )
                {
                    $isi .= th_me('Stasiun', $class_th);
                    $isi .= th_me('Fasilitas', $class_th);
                    $isi .= th_me('Jumlah', $class_th);
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
    
    function dmha_348_create_me($filename,$latitude,$longitude,$dmha_364,$dmha_372,$jumlah)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_348::create_me($filename,$latitude,$longitude,$dmha_364,$dmha_372,$jumlah);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_348_update_me($id,$filename,$latitude,$longitude,$dmha_364,$dmha_372,$jumlah)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_348::update_me($id,$filename,$latitude,$longitude,$dmha_364,$dmha_372,$jumlah);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_348_softdelete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_348::softdelete_me($id);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_348_delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_348::delete_me($id);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_348_show_dashboard_widget_stats()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $dmha = 348;

            $isi_model    = dmha_348::let_me_generate_data_array(null,null);
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

    function dmha_348_show_mapbox_marker()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $isi_model    = dmha_348_let_me_generate_data_array(null,null,'script');
            
        // ------------------------------------------------------------------------- ACTION
            foreach ($isi_model as $row) {
                $isi .= helper_mapbox_geojson(dmha_348_show_deskripsi($row->dmha_372,$row->filename),$row->latitude,$row->longitude,$row->filename,348,$row->maki);
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_348_show_deskripsi($nama,$filename)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
        // ------------------------------------------------------------------------- ACTION
            $isi = "<strong>".$nama."</strong><hr/><img src='".asset("/")."/storage/app/public/storage/dmha_348/".$filename."' alt='logo_gabungan' width='200px'>";

            //<img src="http://localhost/lavgo/storage/app/public/storage/dmha_344/fDW9jQmBhcFSfd1.jpg" width="150px">
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }