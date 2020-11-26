<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="MyModals">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{ asset('/public/') }}/banner/banner.jpeg" alt="" width="100%">
      </div>
    </div>
  </div>
</div>


{!!color_admin_apple_v42_open_form_with_id_and_class($id,'form-control-with-bg')!!}
@csrf
    {!!color_admin_apple_v42_hidden(NULL,430,2,NULL,NULL,NULL)!!}

    <div id="wizard">
        {!!color_admin_apple_v42_form_wizard($id,'form-control-with-bg')!!}
    </div>
{!!UI_FORM_close_form()!!}