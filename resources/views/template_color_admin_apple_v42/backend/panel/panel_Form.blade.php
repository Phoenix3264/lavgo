{!!color_admin_apple_v42_open_form_with_id($id)!!}
@csrf

<div class="panel panel-inverse">
    <div class="panel-heading">
        @include($template.'.'.$controller.'.panel_heading')
    </div>
    <div class="panel-body">
        {!!color_admin_apple_v42_hidden($dmha_1,$dmha_9,$PARAM_2,$PARAM_3)!!}
        {!!color_admin_apple_v42_form($AUTH_ID,$dmha_1,$dmha_9,$id)!!}
    </div>
</div>

{!!color_admin_apple_v42_submit('submit',$id,'submit','SUBMIT',$dmha_271)!!}

{!!UI_FORM_close_form()!!}