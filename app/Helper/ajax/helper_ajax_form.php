<?php

    function ajax_form($AUTH_ID,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    .= ' $(document).ready(function() { ' ;
            $isi    .= ' $.ajax({ ' ;
            $isi    .= ' url: "'.url('/').'/wwform/generate", ' ;
            $isi    .= ' data: { ' ;
            $isi    .= ' "ida": "'.$AUTH_ID.'", ' ;
            $isi    .= ' "id": "'.$ID.'" ' ;
            $isi    .= ' }, ' ;
            $isi    .= ' dataType: "json", ' ;
            $isi    .= ' cache: false, ' ;
            $isi    .= ' success: function(data){ ' ;
            $isi    .= ' $("#form").html(data.isi); ' ;
            $isi    .= ' } ' ;
            $isi    .= ' }); ' ;
            $isi    .= ' }); ' ;

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }
