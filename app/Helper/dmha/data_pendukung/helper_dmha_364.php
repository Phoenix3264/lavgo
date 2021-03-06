<?php

	use App\Models\data_pendukung\dmha_364;

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
                $isi .= general_colgroup(8);
            }
            if($agent->isMobile() == 1 )
            {
                $isi .= general_colgroup(8);
            }

            $isi .='
            <thead>
                <tr>';
                $isi .= th_me('ID', $class_th);

                if($agent->isDesktop() == 1 )
                {
                    $isi .= th_me('Filename', $class_th);
                    $isi .= th_me('Nama', $class_th);
                    $isi .= th_me('Kapasitas', $class_th);
                    $isi .= th_me('Latitude', $class_th);
                    $isi .= th_me('Longitude', $class_th);
                    $isi .= th_me('Tanggal', $class_th);
                }
                if($agent->isMobile() == 1 )
                {
                    $isi .= th_me('Filename', $class_th);
                    $isi .= th_me('Nama', $class_th);
                    $isi .= th_me('Kapasitas', $class_th);
                    $isi .= th_me('Latitude', $class_th);
                    $isi .= th_me('Longitude', $class_th);
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


    
    function dmha_364_create_me($filename,$latitude,$longitude,$nama,$kapasitas)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_364::create_me($filename,$latitude,$longitude,$nama,$kapasitas);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_364_update_me($id,$filename,$latitude,$longitude,$nama,$kapasitas)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_364::update_me($id,$filename,$latitude,$longitude,$nama,$kapasitas);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }


    function dmha_364_softdelete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_364::softdelete_me($id);

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
                $isi .= helper_mapbox_geojson($row->nama,$row->latitude,$row->longitude,$row->filename,364,dmha_395_id_check_col($row->dmha_395,'nama'));
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

    function dmha_364_show_table_print($ID,$PARAM_1)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $isi_model    = dmha_348_let_me_generate_data_array(null,null,null);

            $nama_stasiun = dmha_364_id_check_col($ID,'nama');

            $DMHA_1 = 348;

            $DMHA_4 = dmha_1_link_check_col($PARAM_1,'dmha_4');
            
            $class    = 'table table-bordered bg-white';
            $class_th    = '';
            $class_td    = 'text-center text-middle';

            $counter = 0;

        // ------------------------------------------------------------------------- ACTION
            // $isi .= '
            // <div class="font-size-13 bold underline text-center">
            //     Data Prasarana Sarana Stasiun Kereta Api '.$nama_stasiun.'
            // </div>

            // <br/>
            // ';

            // $isi .= UI_table_open_table_width_100($class);
            
            
            // $isi .= general_colgroup_no(6);

            // $isi .= '<thead>';
            // $isi .= th_me('No.', $class_th);
            // $isi .= th_me('Foto', $class_th);
            // $isi .= th_me('Fasilitas', $class_th);
            // $isi .= th_me('Jumlah', $class_th);
            // $isi .= '</thead>';

            foreach ($isi_model as $row) {
                $counter++;
                $isi .= '<tr>';
                $isi .= td_me($counter, $class_td);
                $isi .= td_me(general_image($PARAM_1,$DMHA_4,$row->id,$DMHA_1,null,'150px'), $class_td);
                $isi .= td_me($row->dmha_372, $class_td);
                $isi .= td_me($row->jumlah, $class_td);
                $isi .= '</tr>';
            }

            //$isi .= UI_tabel_close();
            

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_364_show_header()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $isi_model    = dmha_364_let_me_generate_data_array(null,null);

            // $class = 'btn btn-white';
            $class = '';

        // ------------------------------------------------------------------------- ACTION
            foreach ($isi_model as $row) {
                $isi .= color_admin_apple_v42_header_scroll('#'.replace_to_underscore($row->nama),$row->nama,$class,' id="'.replace_to_underscore($row->nama).'"');
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_364_show_header_backend($tipe,$agent)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $isi_model    = dmha_364_let_me_generate_data_array(null,null);

            // $class = 'btn btn-white';
            $class = 'btnstasiun';

            $icon = dmha_5_id_check_col_icon(dmha_1_id_check_col(364,'dmha_5'),'fa');

            $href = '#surabayamaps';
            if($tipe == 'form')
            {
                $href='javascript:;';
            }

            if($agent->isDesktop() == 1)
            {
                $additional_name = $icon.' Stasiun Kereta Api ';
            }
            else
            {
                $additional_name = $icon.' ';
            }

        // ------------------------------------------------------------------------- ACTION
            foreach ($isi_model as $row) {
                $isi .= color_admin_apple_v42_ahref_small($href,$additional_name.$row->nama,replace_to_underscore($row->nama),' nilai="'.$row->id.'" ',$class);
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_364_script_mapbox_flyto()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $isi_model    = dmha_364_let_me_generate_data_array(null,null);

        // ------------------------------------------------------------------------- ACTION
            foreach ($isi_model as $row) {
                $isi .= helper_mapbox_script_mapbox_flyto(replace_to_underscore($row->nama),$row->latitude,$row->longitude);
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }


    
    function dmha_364_header_frontend($agent)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            if($agent->isDesktop() == 1)
            {
                $isi    = '
                    <div id="header" class="header navbar navbar-transparent navbar-fixed-top">
                        <!-- begin container -->
                        <div class="container">
                            <!-- begin navbar-header -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- end navbar-header -->
                            <!-- begin navbar-collapse -->
                            <div class="collapse navbar-collapse" id="header-navbar">
                                <ul class="nav navbar-nav navbar-right">
                                    '.dmha_364_show_header().'
                                    <li class="">
                                        <a class="" href="'.url('/').'/login" >
                                                LOGIN
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end navbar-collapse -->
                        </div>
                        <!-- end container -->
                    </div>            
                ';
            }
            else
            {
                $isi    = '
                    <div id="header" class="header navbar navbar-transparent navbar-fixed-top">
                        <!-- begin container -->
                        <div class="container">
                            <!-- begin navbar-header -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="index.html" class="navbar-brand">
                                    '.dmha_5_id_check_col_icon(dmha_1_id_check_col(364,'dmha_5'),'fa').'
                                    <span class="brand-text">
                                        Stasiun Kereta Api
                                    </span>
                                </a>
                            </div>
                            <!-- end navbar-header -->
                            <!-- begin navbar-collapse -->
                            <div class="collapse navbar-collapse navbar-transparent" id="header-navbar">
                                <ul class="nav navbar-nav navbar-right navbar-transparent">
                                    '.dmha_364_show_header().'
                                    <li class="">
                                        <a class="" href="'.url('/').'/login" >
                                                LOGIN
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end navbar-collapse -->
                        </div>
                        <!-- end container -->
                    </div>            
                ';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }