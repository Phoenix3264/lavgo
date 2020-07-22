<?php

    function ajax_data_table($AUTH_ID,$DMHA_ID,$table_id,$PARAM_2)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $isi_model = dmha_15_let_me_generate_data_array($AUTH_ID,$DMHA_ID,'joined');
            
            if($PARAM_2 == '')
            {
                $PARAM_2 = 'NULL';
            }
        // ------------------------------------------------------------------------- ACTION
            $isi    .= '   
            $(document).ready(function () {
                $("#'.$table_id.'").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: " '.url('/').'/wwdata/generate/'.$AUTH_ID.'/'.$DMHA_ID.'/'.$PARAM_2.'",
                        type: "GET"
                    },
                    columns: [                        
                        { data: "id", name: "id" },';
                        foreach ($isi_model as $row) {                            
                            $isi .= '{ data: "'.$row->name.'", name: "'.$row->name.'"},';
                        }
                        $isi .= '
                        { data: "action", name: "action" },
    
                    ],
                    order: [
                        [0, "desc"]
                    ]
                });
            });        
            ' ;

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////          
    }


    
    function ajax_data_table_CRUD($AUTH_ID,$ID,$table_id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $isi_model = dmha_15_let_me_generate_data_array($AUTH_ID,$ID,'joined');

        // ------------------------------------------------------------------------- ACTION
            $isi    .= '   
            $(document).ready(function () {
                $("#'.$table_id.'").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: " '.url('/').'/wwdata/generate/'.$AUTH_ID.'/'.$ID.'",
                        type: "GET"
                    },
                    columns: [                        
                        { data: "id", name: "id" },';
                        foreach ($isi_model as $row) {                            
                            $isi .= '{ data: "'.$row->name.'", name: "'.$row->name.'"},';
                        }
                        $isi .= '
                        { data: "action", name: "action" },
    
                    ],
                    order: [
                        [0, "desc"]
                    ]
                });
            });        
            ' ;

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }
