
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/jquery/jquery-3.2.1.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
<!--[if lt IE 9]>
    <script src="{{ asset('/public/back/color_admin_v411') }}/assets/crossbrowserjs/html5shiv.js"></script>
    <script src="{{ asset('/public/back/color_admin_v411') }}/assets/crossbrowserjs/respond.min.js"></script>
    <script src="{{ asset('/public/back/color_admin_v411') }}/assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/js-cookie/js.cookie.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/js/theme/default.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/js/apps.min.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/js/demo/table-manage-default.demo.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
        TableManageDefault.init();
    });
</script>

<script type="text/javascript">
{!!ajax_data_table($id)!!}
</script>