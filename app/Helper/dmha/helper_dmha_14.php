<?php

	use App\dmha_14;

    function dmha_14_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_14::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_14_data_table($AUTH_ID,$dmha_1)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';
            $model = dmha_14::let_me_generate_data_array($AUTH_ID,NULL);

		// ------------------------------------------------------------------------- ACTION
            $isi .= 
            general_colgroup(3).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'
                    '.th_me('Nama', $class_th).'
                    '.th_me('Action', $class_th).'
                </tr>
            </thead>
            <tbody>
            ';            
            foreach($model as $row)
            {
                $isi .= '
                <tr>
                '.td_me($row->id, 'text-center').'
                '.td_me($row->nama, '').'
                '.td_me(color_admin_v42_dropdown($AUTH_ID,$dmha_1,$row->id), 'text-center').'
                </tr>
                ';
            }
                
            $isi .= '
            </tbody>
            ';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_input_hidden($class, $name, $value)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi .= '<input 
                type="text" 
                class="'.$class.'"
                name="'.$name.'"
                value="'.$value.'"
                >';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_14_generate_input_type($ID,$CLASS)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            if($ID == 1)
            {
                $isi .= '<input 
                    type="text" 
                    class="'.$CLASS.'"
                    name="'.dmha_13_id_check_col($ID,'name').'"
                    >';
            }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }