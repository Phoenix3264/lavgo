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



        $('#example').DataTable( {
            serverSide: true,
            ordering: false,
            searching: false,
            ajax: function ( data, callback, settings ) {
                var out = [];
    
                for ( var i=data.start, ien=data.start+data.length ; i<ien ; i++ ) {
                    out.push( [ i+'-1', i+'-2', i+'-3', i+'-4', i+'-5' ] );
                }
    
                setTimeout( function () {
                    callback( {
                        draw: data.draw,
                        data: out,
                        recordsTotal: 5000000,
                        recordsFiltered: 5000000
                    } );
                }, 50 );
            },
            scrollY: 200,
            scroller: {
                loadingIndicator: true
            },
        } );


	});
		
</script>