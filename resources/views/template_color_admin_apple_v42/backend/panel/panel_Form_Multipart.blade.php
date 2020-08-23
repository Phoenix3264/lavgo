{!!color_admin_apple_v42_open_form_enctype_with_id($id)!!}
@csrf

<div class="panel panel-inverse">
    <div class="panel-heading">
        @include($template.'.'.$controller.'.panel_heading') 
    </div>
    <div class="panel-body">
        @include($template.'.'.$controller.'.panel_body.panel_body_'.$page)
    </div>
</div>

{!!color_admin_apple_v42_submit('submit',$id,'submit','SUBMIT',$dmha_271)!!}

{!!UI_FORM_close_form()!!}