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
</script>