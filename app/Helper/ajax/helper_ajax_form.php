<?php

    function ajax_form($AUTH_ID,$DMHA_1,$DMHA_271,$PARAM_2,$PARAM_3,$id_data)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    .= ' $.ajax({ ' ;
            $isi    .= ' url: "'.url('/').'/wwform/generate", ' ;
            $isi    .= ' data: { ' ;
            $isi    .= ' "a": "'.$AUTH_ID.'", ' ;
            $isi    .= ' "p": "'.$DMHA_1.'", ' ;
            $isi    .= ' "t": "'.$DMHA_271.'", ' ;
            $isi    .= ' "p2": "'.$PARAM_2.'", ' ;
            $isi    .= ' "p3": "'.$PARAM_3.'", ' ;
            $isi    .= ' "di": "'.$id_data.'" ' ;
            $isi    .= ' }, ' ;
            $isi    .= ' dataType: "json", ' ;
            $isi    .= ' cache: false, ' ;
            $isi    .= ' success: function(data){ ' ;
            $isi    .= ' $("#form").html(data.isi); ' ;
            $isi    .= dmha_13_generate_masked($DMHA_1) ;	
            
            $isi .= '

            $(".autocomplete_desa_kelurahan").on("keyup",function() {
                var autocomplete = $(this).val(); 
                $.ajax({
                    url:"'.url('/').'/wwdata/autocomplete/22",
                    type:"GET",
                    data:{"autocomplete":autocomplete},
                    success:function (data) {
                        document.getElementsByClassName ("list-autocomplete-desa_kelurahan").innerHTML = data;
                    }
                })
            });

            $(document).on("click", "li", function(e){        
                var value = $(this).text();
                $(".autocomplete_desa_kelurahan").val(value);
                $(".list-autocomplete-desa_kelurahan").appendTo("");
            });
            
            ';

            /*
            $isi .= '
            $(function() {
                $(".autocomplete_desa_kelurahan").autocomplete({
                  source: "'.url('/').'/wwdata/autocompletez/22",
                  appendTo: "#form"
                });
            });
            ';
            */


            $isi    .= ' } ' ;
            $isi    .= ' }); ' ;

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }

    function ajax_header_csrf()
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = "";
            $name = '"csrf-token"';

        // ------------------------------------------------------------------------- ACTION
            $isi .= "$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name=".$name."]').attr('content')}});";

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }

    function ajax_submit($id)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi .= '
            $(".submit").click(function(){           
   
                var id = $(this).attr("id");
                $.ajax({
                    type:"POST",
                    url:"'.url('/').'/wwform/postdata",
                    data: $("#form_"+id).serialize(),
                    success:function(data){
                        window.location.href = "'.rules_link_after_post($id).'";
                    }
                });
            });
            ';

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }
