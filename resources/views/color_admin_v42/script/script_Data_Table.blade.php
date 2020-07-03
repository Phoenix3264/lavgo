<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<!--[if lt IE 9]>
    <script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/crossbrowserjs/html5shiv.js"></script>
    <script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/crossbrowserjs/respond.min.js"></script>
    <script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/js-cookie/js.cookie.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/js/theme/default.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/js/apps.min.js"></script>

<script>
    $(document).ready(function() {
        App.init();
    });
</script>

<script type="text/javascript">
    {!!ajax_data_table($AUTH_ID,$id)!!}
</script>
