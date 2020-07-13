<?php

    function ajax_form($AUTH_ID,$DMHA_1,$DMHA_9,$PARAM_2)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    .= ' $(document).ready(function() { ' ;
            $isi    .= ' $.ajax({ ' ;
            $isi    .= ' url: "'.url('/').'/wwform/generate", ' ;
            $isi    .= ' data: { ' ;
            $isi    .= ' "a": "'.$AUTH_ID.'", ' ;
            $isi    .= ' "p": "'.$DMHA_1.'", ' ;
            $isi    .= ' "c": "'.$DMHA_9.'", ' ;
            $isi    .= ' "i": "'.$PARAM_2.'" ' ;
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

    function ajax_form_create_button($AUTH_ID,$ID)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $model = dmha_1_let_me_generate_data_array($AUTH_ID,'button',$ID);

        // ------------------------------------------------------------------------- ACTION
            foreach ($model as $row) {
                $isi    .= '  
                $("#'.$row->nama.'-'.$row->id.'").click(function () {
                    $("#button-simpan").val("create-post"); //valuenya menjadi create-post
                    $("#id").val(""); //valuenya menjadi kosong
                    $("#form-tambah-edit").trigger("reset"); //mereset semua input dll didalamnya
                    $("#modal-judul").html("Tambah Pegawai Baru"); //valuenya tambah pegawai baru
                    $("#tambah-edit-modal").modal("show"); //modal tampil
                });
                ' ;
            }

        // ------------------------------------------------------------------------- SEND
            $words = $isi;
            return $words;
        ////////////////////////////////////////////////////////////////////////////        
    }
