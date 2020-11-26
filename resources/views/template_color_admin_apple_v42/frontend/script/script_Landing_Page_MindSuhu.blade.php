<!-- ================== BEGIN BASE JS ================== -->
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<!--[if lt IE 9]>
    <script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/html5shiv.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/respond.min.js"></script>
    <script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/js-cookie/js.cookie.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/scrollMonitor/scrollMonitor.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/paroller/jquery.paroller.min.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/js/one-page-parallax/apps.min.js"></script>
<!-- ================== END BASE JS ================== -->

<script>    
    $(document).ready(function() {
        App.init();
    });
</script>