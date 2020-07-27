
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/respond.min.js"></script>
		<script src="{{ asset('/public/').'/'.$root }}/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/js/theme/apple.min.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/js/demo/table-manage-default.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			TableManageDefault.init();
		});

        
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
            
        {!!ajax_data_table($AUTH_ID,$transform_ID,$PARAM_1,$PARAM_2)!!}
	</script>