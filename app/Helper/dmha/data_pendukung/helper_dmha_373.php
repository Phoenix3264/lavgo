<?php

	use App\Models\data_pendukung\dmha_373;

    function dmha_373_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_373::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_373_what_is_my_penelitian($col)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_373::what_is_my_penelitian($col);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_373_let_me_generate_data_array($AUTH_ID,$PARAM_ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_373::let_me_generate_data_array($AUTH_ID,$PARAM_ID);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_373_data_table($agent)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

        // ------------------------------------------------------------------------- ACTION
            if($agent->isDesktop() == 1 )
            {
                $isi .= general_colgroup(5);
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
                    $isi .= th_me('Nama', $class_th);
                    $isi .= th_me('Deskripsi', $class_th);
                    $isi .= th_me('Tahun', $class_th);
                }
                if($agent->isMobile() == 1 )
                {
                    $isi .= th_me('Nama', $class_th);
                    $isi .= th_me('Deskripsi', $class_th);
                    $isi .= th_me('Tahun', $class_th);
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

    
    function dmha_373_create_me($array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_373::create_me($array_data);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_373_update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_373::update_me($id,$array_data);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_373_softdelete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_373::softdelete_me($id);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_373_delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_373::delete_me($id);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_373_header_login($agent)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            if($agent->isDesktop() == 1)
            {
                $height = 70;
                $isi    = '
                <div class="row row-login p-t-40">
                    <div class="col-md-3 text-center">
                        <img src="'.asset('/').'/public/logo/unnar.png" alt="unnar" height="'.$height.'px">
                    </div>
                    <div class="col-md-6 text-center">
                        <h3>
                            '.dmha_373_what_is_my_penelitian("nama").'
                        </h3>
                        <h4>
                            '.dmha_373_what_is_my_penelitian("deskripsi").'
                        </h4>
                        <h5>
                            Tahun '.dmha_373_what_is_my_penelitian("tahun").'
                        </h5>
                        
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="'.asset('/').'/public/logo/dikti_brin.png" alt="dikti_brin" height="'.$height.'px">
                    </div>
                </div>

                <div class="row row-login p-t-10  p-b-20">
                    <div class="col-md-12 text-center">
                            © '.dmha_373_what_is_my_penelitian("peneliti").'
                    </div>
                </div>

                ';
            }
            else
            {
                $height = 50;
                $isi    = '
                <div class="row row-login m-t-40">
                    <div class="col-6 text-center">
                        <img src="'.asset('/').'/public/logo/unnar.png" alt="unnar" height="'.$height.'px">
                    </div>
                    <div class="col-6 text-center">
                        <img src="'.asset('/').'/public/logo/dikti_brin.png" alt="dikti_brin" height="'.$height.'px">
                    </div>
                </div>

                
                <div class="row row-login m-t-20">
                    <div class="col-12 text-center">
                        <h4>
                            '.dmha_373_what_is_my_penelitian("nama").'
                        </h4>
                        <h5>
                            '.dmha_373_what_is_my_penelitian("deskripsi").'
                        </h5>
                        <h5>
                            Tahun '.dmha_373_what_is_my_penelitian("tahun").'
                        </h5>
                        
                    </div>
                </div>

                <div class="row m-t-10 m-b-20">
                    <div class="col-md-12 text-center">
                            © '.dmha_373_what_is_my_penelitian("peneliti").'
                    </div>
                </div>
                ';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    
    function dmha_373_show_header_backend($agent)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
        // ------------------------------------------------------------------------- ACTION
            if($agent->isDesktop() == 1)
            {
                $height = 70;
    
                $isi    = '
                <div class="row m-t-40">
                    <div class="col-md-3 text-center">
                        <img src="'.asset('/').'/public/logo/unnar.png" alt="unnar" height="'.$height.'px">
                    </div>
                    <div class="col-md-6 text-center">
                        <h3>
                            '.dmha_373_what_is_my_penelitian("nama").'
                        </h3>
                        <h4>
                            '.dmha_373_what_is_my_penelitian("deskripsi").'
                        </h4>
                        <h5>
                            Tahun '.dmha_373_what_is_my_penelitian("tahun").'
                        </h5>
                        
                    </div>
                    <div class="col-md-3 text-center">
                        <img src="'.asset('/').'/public/logo/dikti_brin.png" alt="dikti_brin" height="'.$height.'px">
                    </div>
                </div>

                <div class="row m-t-10 m-b-20">
                    <div class="col-md-12 text-center" id="surabayamaps">
                            © '.dmha_373_what_is_my_penelitian("peneliti").'
                    </div>
                </div>
                ';
            }
            else
            {
                $height = 50;
    
                $isi    = '
                <div class="row m-t-40">
                    <div class="col-4 offset-1 text-center">
                        <img src="'.asset('/').'/public/logo/unnar.png" alt="unnar" height="'.$height.'px">
                    </div>
                    <div class="col-4 offset-1 text-center">
                        <img src="'.asset('/').'/public/logo/dikti_brin.png" alt="dikti_brin" height="'.$height.'px">
                    </div>
                </div>

                
                <div class="row m-t-20">
                    <div class="col-12 text-center">
                        <h4>
                            '.dmha_373_what_is_my_penelitian("nama").'
                        </h4>
                        <h5>
                            '.dmha_373_what_is_my_penelitian("deskripsi").'
                        </h5>
                        <h5>
                            Tahun '.dmha_373_what_is_my_penelitian("tahun").'
                        </h5>
                        
                    </div>
                </div>

                <div class="row m-t-10 m-b-20">
                    <div class="col-md-12 text-center">
                            © '.dmha_373_what_is_my_penelitian("peneliti").'
                    </div>
                </div>
                ';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }