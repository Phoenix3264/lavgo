<div class="panel panel-inverse">
    <div class="panel-heading">
        @include($template.'.panel_heading') 
    </div>
    <div class="panel-body">
        
        @if(Session::has('message'))
            {!!color_admin_apple_v42_flash_message(dmha_40_id_check_col( Session::get('message'),'status'),dmha_40_id_check_col( Session::get('message'),'nama'))!!}
        @endif


        @include($template.'.panel_body.panel_body_'.$page)
    </div>
</div>