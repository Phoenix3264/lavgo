<?php

    function ajax_form($ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    .= ' $(document).ready(function() { ' ;
            $isi    .= ' $.ajax({ ' ;
            $isi    .= ' url: "'.url('/').'/wwform/generate", ' ;
            $isi    .= ' data: { ' ;
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
