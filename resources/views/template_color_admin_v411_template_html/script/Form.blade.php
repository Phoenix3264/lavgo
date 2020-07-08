<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/jquery/jquery-3.2.1.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
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
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/masked-input/masked-input.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/password-indicator/js/password-indicator.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/bootstrap-daterangepicker/moment.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/select2/dist/js/select2.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/bootstrap-show-password/bootstrap-show-password.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/plugins/clipboard/clipboard.min.js"></script>
<script src="{{ asset('/public/back/color_admin_v411') }}/assets/js/demo/form-plugins.demo.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
	$(document).ready(function() {
		App.init();
		FormPlugins.init();
	});
</script>

<script type="text/javascript">
	$.ajaxSetup({
		headers: {'X-CSRF-Token': $('meta[name=token]').attr('content')}
	});

		
	$(document).ready(function() {
		$.ajax({
			url: "{{url('/')}}/Web_worker_form_general/generate_sdp_form",
			data: {
				"dmha_id": "{{$DMHA_ID}}",
				"parent_id": "{{$PARENT_ID}}",
				"tipe_data": "{{$TIPE_DATA_PARAM_1}}",
				"ID": "NULL"
			}, 
			dataType: 'json',
			cache: false,
			success: function(data){
				$("#form").html(data.isi);            
			}
		});
	});
</script>