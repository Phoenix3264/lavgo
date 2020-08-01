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
            general_colgroup(5).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'
                    '.th_me('Nama', $class_th).'
                    '.th_me('Kelas', $class_th).'
                    '.th_me('Filename', $class_th).'
                    '.th_me('Action', $class_th).'
                </tr>
            </thead>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
	}

    function dmha_111_create_me($nama,$dmha_175,$filename)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_111::create_me($nama,$dmha_175,$filename);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_111_update_me($id,$nama,$dmha_175,$filename)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_111::update_me($id,$nama,$dmha_175,$filename);

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

    function dmha_111_card()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $isi_model   = dmha_111::let_me_generate_data_array();
            $link = dmha_1_id_check_col(251,'link');

        // ------------------------------------------------------------------------- ACTION
            foreach ($isi_model as $row) {
                $isi .= '

                <a href="'.url('/').'/'.$link.'/'.$row->id.'" class="card-block col-md-3">
                    <div class="card">
						<img class="card-img-top" width="100%" src="'.url('/').Storage::url('app/public/storage/dmha_111/'.dmha_14_generate_value(3,111,$row->id,'filename')).'" alt="">
						<div class="card-block">
							<h4 class="card-title m-t-0 m-b-10">'.$row->nama.'</h4>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                            
						</div>
					</div>
                </a>
                ';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }