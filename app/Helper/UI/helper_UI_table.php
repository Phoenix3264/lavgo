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

                while($x <= $COUNTER) 
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
			if($DMHA_ID == 1){ $isi = dmha_1_data_table(); }
			elseif($DMHA_ID == 2){ $isi = dmha_2_data_table(); }
			elseif($DMHA_ID == 3){ $isi = dmha_3_data_table(); }
			elseif($DMHA_ID == 4){ $isi = dmha_4_data_table(); }
			elseif($DMHA_ID == 5){ $isi = dmha_5_data_table(); }
			elseif($DMHA_ID == 9){ $isi = dmha_9_data_table(); }
			elseif($DMHA_ID == 13){ $isi = dmha_13_data_table(); }
			elseif($DMHA_ID == 14){ $isi = dmha_14_data_table(); }
			elseif($DMHA_ID == 15){ $isi = dmha_15_data_table(); }
			elseif($DMHA_ID == 40){ $isi = dmha_40_data_table(); }

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }

	
    