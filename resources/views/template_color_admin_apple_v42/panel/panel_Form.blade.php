{!!color_admin_material_v42_open_form_with_id($PARAM_1)!!}
@csrf

<div class="panel panel-inverse">
    <div class="panel-heading">
        @include($template.'.panel_heading')
    </div>
    <div class="panel-body">
        <div id="form">
        </div>
    </div>
</div>

{!!color_admin_material_v42_submit('submit','submit','submit','submit')!!}

{!!UI_FORM_close_form()!!}