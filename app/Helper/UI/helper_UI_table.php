<?php

	function data_tabel_open(){
	    // ------------------------------------------------------------------------- INITIALIZE
	      return '
	        <div class="table-responsive">
				<!-- begin widget-table -->
				<table class="table table-bordered widget-table widget-table-rounded table-striped table-hover" id="table">
	      ';
	    ////////////////////////////////////////////////////////////////////////////
  	}

  	function data_tabel_close(){
	    // ------------------------------------------------------------------------- INITIALIZE
	      return '
				</table>
				<!-- end widget-table -->
			</div>
	      ';
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
            $x = 1;

        // ------------------------------------------------------------------------- ACTION
            $isi    .= '       
            <colgroup>
                <col width="10%">';

                while($x <= $COUNTER) 
                {
                    $isi .= '<col width="'.((1/$COUNTER)*80).'%">';
                    $x++;
                }

            $isi    .= '       
                <col width="10%">
            </colgroup>';

        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }