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

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('/public/').'/'.$controller.'/'.$template }}/assets/js/demo/table-manage-default.demo.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
        TableManageDefault.init();
    });
</script>


<script type="text/javascript">
    {!!ajax_data_table($AUTH_ID,$id,'data-table-default')!!}
</script>
