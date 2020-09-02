<?php

    function ajax_data_table($AUTH_ID,$DMHA_ID,$table_id,$PARAM_2,$PARAM_3,$agent)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $agent_name = '';

            if($agent->isDesktop() == 1)
            {
                $agent_name = 'desktop';
            }
            elseif($agent->isMobile() == 1)
            {
                $agent_name = 'mobile';
            }

            $isi_model = dmha_15_let_me_generate_data_array($AUTH_ID,$DMHA_ID,'joined',$agent_name);
            
            if($PARAM_2 == '')
            {
                $PARAM_2 = 'NULL';
            }
            if($PARAM_3 == '')
            {
                $PARAM_3 = 'NULL';
            }
        // ------------------------------------------------------------------------- ACTION
            $isi    .= '   
            $(document).ready(function () {
                $("#'.$table_id.'").DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: " '.url('/').'/wwdata/generate/'.$AUTH_ID.'/'.$DMHA_ID.'/'.$PARAM_2.'/'.$PARAM_3.'",
                        type: "GET"
                    },
                    columns: [                        
                        { data: "id", name: "id", className: "text-right" },';
                        
                        foreach ($isi_model as $row) {                            
                            $isi .= '{ data: "'.$row->name.'", name: "'.$row->name.'", className: "text-'.$row->align.'"},
                            
                            ';
                        }
                        $isi .= '
                        { data: "action", name: "action", className: "text-center"  },
    
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
                            $isi .= '{ data: "'.$row->name.'", name: "'.$row->name.'"},
                            ';
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

    
    function ajax_generate_autocomplete($AUTH_ID,$ID,$table_id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $isi_model = dmha_15_let_me_generate_data_array($AUTH_ID,$ID,'joined');

        // ------------------------------------------------------------------------- ACTION
            $isi    .= '   
            $(".autocomplete").on("keyup",function() {
                var autocomplete = $(this).val(); 
    
                $.ajax({
                
                    url:"{{ url('/') }}/wwdata/autocomplete/119",
            
                    type:"GET",
                
                    data:{"autocomplete":autocomplete},
                
                    success:function (data) {
                    
                        $(this).$(".autocomplete_list").html(data);
                    }
                })
            });
            ' ;

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }
