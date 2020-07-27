<?php

	function UI_table_open_table_with_id($class,$id){
	    // ------------------------------------------------------------------------- INITIALIZE
            return '<table class="'.$class.'"  id="'.$id.'" >';
	    ////////////////////////////////////////////////////////////////////////////
  	}

  	function UI_tabel_close(){
	    // ------------------------------------------------------------------------- INITIALIZE
	      	return '</table>';
	    ////////////////////////////////////////////////////////////////////////////
  	}

  	function data_tabel_open_with_id($ID){
	    // ------------------------------------------------------------------------- INITIALIZE
	      return '
	        <div class="table-responsive">
				<!-- begin widget-table -->
				<table class="table table-bordered widget-table widget-table-rounded table-striped table-hover" id="'.$ID.'">
	      ';
	    ////////////////////////////////////////////////////////////////////////////
  	}

  	function no_data_table($coloumn){
	    // ------------------------------------------------------------------------- INITIALIZE
	      return '
			<tr><td class="text-center" colspan="'.$coloumn.'">No Record Data</td></tr>
	      ';
	    ////////////////////////////////////////////////////////////////////////////
    }

    function general_colgroup($COUNTER)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $x 		= 1;

        // ------------------------------------------------------------------------- ACTION
            $isi    .= '       
            <colgroup>
				<col width="5%">';

                while($x <= ($COUNTER-2)) 
                {
                    $isi .= '<col width="'.((1/($COUNTER-2))*90).'%">';
                    $x++;
                }

            $isi    .= '       
                <col width="5%">
            </colgroup>';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

	function th_me($text,$class)
	{
	  	// ------------------------------------------------------------------------- INITIALIZE
			return '
			<th class="'.$class.'">
				'.$text.'
			</th>
			';
	  	////////////////////////////////////////////////////////////////////////////
 	}

	function td_me($text,$class)
	{
		// ------------------------------------------------------------------------- INITIALIZE
			return '
			<td class="'.$class.'">
				'.$text.'
			</td>
			';
		////////////////////////////////////////////////////////////////////////////
	}

    function general_colgroup_thead($DMHA_ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = $DMHA_ID;

		// ------------------------------------------------------------------------- ACTION
			// System
			if($DMHA_ID == 1){ $isi = dmha_1_data_table(); }
			elseif($DMHA_ID == 2){ $isi = dmha_2_data_table(); }
			elseif($DMHA_ID == 3){ $isi = dmha_3_data_table(); }
			elseif($DMHA_ID == 4){ $isi = dmha_4_data_table(); }
			elseif($DMHA_ID == 5){ $isi = dmha_5_data_table(); }
			elseif($DMHA_ID == 8){ $isi = dmha_8_data_table(); }
			elseif($DMHA_ID == 9){ $isi = dmha_9_data_table(); }
			elseif($DMHA_ID == 13){ $isi = dmha_13_data_table(); }
			elseif($DMHA_ID == 14){ $isi = dmha_14_data_table(); }
			elseif($DMHA_ID == 15){ $isi = dmha_15_data_table(); }
			elseif($DMHA_ID == 40){ $isi = dmha_40_data_table(); }
			elseif($DMHA_ID == 322){ $isi = dmha_322_data_table(); }
			elseif($DMHA_ID == 326){ $isi = dmha_326_data_table(); }


			elseif($DMHA_ID == 47){ $isi = dmha_47_data_table(); }
			elseif($DMHA_ID == 51){ $isi = dmha_51_data_table(); }
			elseif($DMHA_ID == 56){ $isi = dmha_56_data_table(); }
			elseif($DMHA_ID == 60){ $isi = dmha_60_data_table(); }
			elseif($DMHA_ID == 64){ $isi = dmha_64_data_table(); }
			elseif($DMHA_ID == 69){ $isi = dmha_69_data_table(); }
			elseif($DMHA_ID == 73){ $isi = dmha_73_data_table(); }
			elseif($DMHA_ID == 77){ $isi = dmha_77_data_table(); }
			elseif($DMHA_ID == 81){ $isi = dmha_81_data_table(); }
			elseif($DMHA_ID == 91){ $isi = dmha_91_data_table(); }
			elseif($DMHA_ID == 95){ $isi = dmha_95_data_table(); }
			elseif($DMHA_ID == 99){ $isi = dmha_99_data_table(); }
			elseif($DMHA_ID == 103){ $isi = dmha_103_data_table(); }
			elseif($DMHA_ID == 107){ $isi = dmha_107_data_table(); }
			elseif($DMHA_ID == 122){ $isi = dmha_122_data_table(); }
			elseif($DMHA_ID == 126){ $isi = dmha_126_data_table(); }
			elseif($DMHA_ID == 130){ $isi = dmha_130_data_table(); }
			elseif($DMHA_ID == 134){ $isi = dmha_134_data_table(); }
			elseif($DMHA_ID == 138){ $isi = dmha_138_data_table(); }
			elseif($DMHA_ID == 144){ $isi = dmha_144_data_table(); }
			elseif($DMHA_ID == 158){ $isi = user_data_table(); }


			//additional
			elseif($DMHA_ID == 247){ $isi = dmha_247_data_table(); }

			///////////////////////////////////////////////////////////////////////////////// acadion
				elseif($DMHA_ID == 87){ $isi = dmha_87_data_table(); }
				elseif($DMHA_ID == 111){ $isi = dmha_111_data_table(); }
				elseif($DMHA_ID == 114){ $isi = dmha_114_data_table(); }
				elseif($DMHA_ID == 167){ $isi = dmha_167_data_table(); }
				elseif($DMHA_ID == 171){ $isi = dmha_171_data_table(); }
				elseif($DMHA_ID == 175){ $isi = dmha_175_data_table(); }
				elseif($DMHA_ID == 330){ $isi = dmha_330_data_table(); }

			
			// paperone			
			elseif($DMHA_ID == 287){ $isi = dmha_287_data_table(); }
			elseif($DMHA_ID == 288){ $isi = dmha_288_data_table(); }
			elseif($DMHA_ID == 292){ $isi = dmha_292_data_table(); }
			elseif($DMHA_ID == 296){ $isi = dmha_296_data_table(); }
			elseif($DMHA_ID == 310){ $isi = dmha_310_data_table(); }
			elseif($DMHA_ID == 314){ $isi = dmha_314_data_table(); }
			elseif($DMHA_ID == 318){ $isi = dmha_318_data_table(); }


        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

	
    