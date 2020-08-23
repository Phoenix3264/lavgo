<div class="panel panel-inverse">
    <div class="panel-heading">
        @include($template.'.'.$controller.'.panel_heading') 
    </div>
    <div class="panel-body">
        


        @include($template.'.'.$controller.'.panel_body.panel_body_'.$page)
    </div>
</div>