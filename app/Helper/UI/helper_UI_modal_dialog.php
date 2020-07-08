<?php

    function UI_modal_dialog_form($AUTH_ID,$id_dmha,$dmha_2,$id_modal)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';

        // ------------------------------------------------------------------------- ACTION
            $isi    .= '  
            <div class="modal modal-message fade" id="'.$id_modal.'" aria-hidden="true">
                <div class="modal-dialog">                
                    <form id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">
                                    '.$id_dmha.'-'.$dmha_2.' 
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">';
                                if($dmha_2 == 1){ $isi .= color_admin_v42_form($AUTH_ID,$id_dmha); }
                            $isi .= '
                            </div>
                            <div class="modal-footer">
                                <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>

                                <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan"
                                    value="create">Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>           
            ';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }