<?php

	use App\dmha_7;

    function id_check_col_dmha_7($ID,$COL)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    = dmha_7::id_check_col($ID,$COL);

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }
    
    function data_table_dmha_7($DMHA_2,$DMHA_7)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $model = dmha_7::let_me_show_all();

		// ------------------------------------------------------------------------- ACTION
            $isi .= 
            general_colgroup(6).'
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Nama
                    </th>
                    <th>
                        Template
                    </th>
                    <th>
                        Controller
                    </th>
                    <th>
                        Page
                    </th>
                    <th>
                        Script
                    </th>
                    <th>
                        Icon
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
            ';
            
            foreach($model as $row)
            {
                $isi .= '
                    <td>
                        '.$row->id.'
                    </td>
                    <td>
                        '.$row->nama.'
                    </td>
                    <td>
                        '.id_check_col_dmha_2($row->dmha_2,'nama').'
                    </td>
                    <td>
                        '.id_check_col_dmha_3($row->dmha_3,'nama').'
                    </td>
                    <td>
                        '.$row->dmha_4.'
                        '.id_check_col_dmha_4($row->dmha_4,'nama').'
                    </td>
                    <td>
                        '.id_check_col_dmha_5($row->dmha_5,'nama').'
                    </td>
                    <td>
                        '.id_check_col_dmha_6($row->dmha_6,'nama').'
                    </td>
                    <td class="text-center">
                        '.dropdown_table($DMHA_2,$DMHA_7,$row->id).'
                    </td>
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
