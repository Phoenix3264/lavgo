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
                $isi .= general_colgroup(11);
            }
            if($agent->isMobile() == 1 )
            {
                $isi .= general_colgroup(11);
            }

            $isi .='
            <thead>
                <tr>';
                $isi .= th_me('ID', $class_th);

                if($agent->isDesktop() == 1 )
                {
                    $isi .= th_me('Filename', $class_th);
                    $isi .= th_me('Jalan', $class_th);
                    $isi .= th_me('Lebar', $class_th);
                    $isi .= th_me('Tebal', $class_th);

                    $isi .= th_me('Lapisan', $class_th);
                    $isi .= th_me('Rambu', $class_th);
                    $isi .= th_me('Marka', $class_th);
                    $isi .= th_me('Traffic', $class_th);

                    $isi .= th_me('Tanggal', $class_th);

                }
                if($agent->isMobile() == 1 )
                {
                    $isi .= th_me('Filename', $class_th);
                    $isi .= th_me('Jalan', $class_th);
                    $isi .= th_me('Lebar', $class_th);
                    $isi .= th_me('Tebal', $class_th);

                    $isi .= th_me('Lapisan', $class_th);
                    $isi .= th_me('Rambu', $class_th);
                    $isi .= th_me('Marka', $class_th);
                    $isi .= th_me('Traffic', $class_th);

                    $isi .= th_me('Tanggal', $class_th);
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
    
    function dmha_344_create_me($filename,$latitude,$longitude,$jalan,$lebar,$tebal,$dmha_356,$dmha_382,$dmha_386,$dmha_390)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_344::create_me($filename,$latitude,$longitude,$jalan,$lebar,$tebal,$dmha_356,$dmha_382,$dmha_386,$dmha_390);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_344_update_me($id,$filename,$latitude,$longitude,$jalan,$lebar,$tebal,$dmha_356,$dmha_382,$dmha_386,$dmha_390)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_344::update_me($id,$filename,$latitude,$longitude,$jalan,$lebar,$tebal,$dmha_356,$dmha_382,$dmha_386,$dmha_390);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_344_softdelete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_344::softdelete_me($id);

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
            $isi_model    = dmha_344_let_me_generate_data_array(null,null,'script');
            $deskripsi = '<strong>Make it Mount Pleasant</strong><p>hai</p>';
        // ------------------------------------------------------------------------- ACTION
            foreach ($isi_model as $row) {
                $isi .= helper_mapbox_geojson(dmha_344_show_deskripsi($row->jalan,$row->filename,$row->lebar,$row->tebal,$row->dmha_356,$row->dmha_382,$row->dmha_386,$row->dmha_390),$row->latitude,$row->longitude,$row->filename,348,'marker');
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_344_show_deskripsi($nama,$filename,$lebar,$tebal,$lapisan,$rambu,$marka,$traffic)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
        // ------------------------------------------------------------------------- ACTION
            $isi = "<strong>".$nama."</strong><hr/><img src='".asset("/")."/storage/app/public/storage/dmha_344/".$filename."' alt='logo_gabungan' width='200px'><hr/>Lebar : ".$lebar."; Tebal : ".$tebal.";<hr/>".$lapisan."; ".$rambu."; ".$marka.";".$traffic;

            //<img src="http://localhost/lavgo/storage/app/public/storage/dmha_344/fDW9jQmBhcFSfd1.jpg" width="150px">
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