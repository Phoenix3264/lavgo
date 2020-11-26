<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/js/demo/form-wizards.demo.min.js"></script>

<script>    
{!!ajax_header_csrf()!!}

$(document).ready(function(){
    App.init();
	FormWizard.init();
    
    $('#MyModals').modal('show');

    {!!ajax_form_wizard($AUTH_ID,$transform_ID,$dmha_271,$PARAM_2,$PARAM_3,$id_data)!!} 
});
</script>