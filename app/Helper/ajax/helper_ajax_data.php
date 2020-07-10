<?php

    function ajax_data_table($AUTH_ID,$ID,$table_id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

            $isi_model = dmha_15_let_me_generate_data_array($AUTH_ID,$ID);

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
                        [0, "asc"]
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
                        [0, "asc"]
                    ]
                });
            });        
            ' ;

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }
