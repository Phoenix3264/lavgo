{!!open_form()!!}	
<div class="panel panel-inverse">
    <div class="panel-heading">
        @include($template.'.panel_heading')
    </div>
    <div class="panel-body">
        @include($template.'.panel_body.panel_body_'.$page)
    </div>
</div>


{!!button_submit_form('submit','submit','submit','Submit')!!}

{!!close_form()!!}