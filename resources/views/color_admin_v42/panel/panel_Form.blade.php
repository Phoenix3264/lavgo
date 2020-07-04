{!!color_admin_v42_open_form()!!}	
@csrf

<div class="panel panel-inverse">
    <div class="panel-heading">
        @include($template.'.panel_heading')
    </div>
    <div class="panel-body">
        @include($template.'.panel_body.panel_body_'.$page)
    </div>
</div>


{!!color_admin_v42_submit('submit','submit','submit','Submit')!!}

{!!close_form()!!}