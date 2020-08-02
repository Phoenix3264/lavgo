<?php

    function UI_modal_dialog_form($AUTH_ID,$DMHA_ID,$DMHA_271,$ID_DATA,$NAMA,$CLASS)
    {
        // ------------------------------------------------------------------------- INITIALIZE
            $isi    = '';
            $id_modal = replace_to_underscore($NAMA);
        // ------------------------------------------------------------------------- ACTION
            $isi    .= '    
            <div class="'.$CLASS.'" id="'.$id_modal.'">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">'.$NAMA.'</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">';
                            $isi .= color_admin_apple_v42_form($AUTH_ID,$DMHA_ID,$DMHA_271,$ID_DATA);
                            $isi .= color_admin_material_v42_submit('submit','submit','submit','submit');
                            $isi .= '
                        </div>
                    </div>
                </div>
            </div>
            ';
        // ------------------------------------------------------------------------- SEND
            $word = $isi;
            return $word;
		//////////////////////////////////////////////////////////////////////////// 		
    }