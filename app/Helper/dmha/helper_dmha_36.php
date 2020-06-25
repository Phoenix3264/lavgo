<?php

	use App\dmha_7;
	use App\dmha_28;
	use App\dmha_36;


    function generate_pertanyaan_dmha($DMHA_7)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';


            $model = dmha_36::we_get_it($DMHA_7);
            
        // ------------------------------------------------------------------------- ACTION
            foreach ($model as $row) 
            {
                $isi .= '
                <div class="form-group row">
                    <label class="col-md-3 col-form-label">
                        '.id_check_col_dmha_28($row->dmha_28,'nama').'
                    </label>
                    <div class="col-md-'.id_check_col_dmha_28($row->dmha_28,'panjang').'">
                        '.general_input_type($row->dmha_28).'
                    </div>
                </div>
                ';
            }
            
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
