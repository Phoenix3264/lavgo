<?php

    use App\Models\notarion\dmha_263;

    function dmha_263_id_check_col($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_263::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_263_let_me_generate_data_array($AUTH_ID,$PARAM_ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_263::let_me_generate_data_array($AUTH_ID,$PARAM_ID);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_263_let_me_generate_data_array_by_nop($AUTH_ID,$NOP)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_263::let_me_generate_data_array_by_nop($AUTH_ID,$NOP);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_263_data_table()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

        // ------------------------------------------------------------------------- ACTION
            $isi .= 
            general_colgroup(11).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'

                    '.th_me('NOP', $class_th).'
                    '.th_me('Nama', $class_th).'

                    '.th_me('Kabkot', $class_th).'
                    '.th_me('Kec', $class_th).'
                    '.th_me('Deskel', $class_th).'

                    '.th_me('Luas Bumi', $class_th).'
                    '.th_me('NJOP Bumi', $class_th).'
                    '.th_me('Luas Bangunan', $class_th).'
                    '.th_me('NJOP Bangunan', $class_th).'

                    '.th_me('Action', $class_th).'
                </tr>
            </thead>';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
	}
    
    function dmha_263_data_table_col_6($Pengurusan_ID,$Berkas_ID,$dmha)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $class_th = 'text-center bold';

            $isi_model = dmha_47_let_me_generate_data($Pengurusan_ID,$Berkas_ID,$dmha);
        // ------------------------------------------------------------------------- ACTION
            $isi .= 
            '<table class="table table-striped table-bordered">'.
            general_colgroup(5).'
            <thead>
                <tr>
                    '.th_me('ID', $class_th).'

                    '.th_me('NOP', $class_th).'
                    '.th_me('Nama', $class_th).'
                    '.th_me('Deskel', $class_th).'

                    '.th_me('Action', $class_th).'
                </tr>
            </thead>
            <tbody>';
            if(count($isi_model) == 0)
            {   
                $isi .= '
                <tr>
                    <td colspan="5" class="text-center">
                        '.dmha_40_id_check_col(7,'nama').'
                    </td>
                </tr>
                ';
            }
            $isi .= '
            </tbody>
            </table>
            ';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function dmha_263_create_me($array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_263::create_me($array_data);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_263_update_me($id,$array_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_263::update_me($id,$array_data);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

    function dmha_263_delete_me($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_263::delete_me($id);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }