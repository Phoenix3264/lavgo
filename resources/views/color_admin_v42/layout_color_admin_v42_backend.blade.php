
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    @include('general_layout.title')

    @include('general_layout.meta')

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
        @include($template.'.css.css_'.$page)
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
        @include($template.'.js.js_'.$page)
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->		
			@include($template.'.header')
		<!-- end #header -->
		
		<!-- begin #sidebar -->
            @include($template.'.sidebar')
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
		
   
			@if ($message = Session::get('success'))
				<div class="alert alert-success">
					<p>{{ $message }}</p>
				</div>
			@endif
	
	
			<!-- begin breadcrumb -->
            	@include($template.'.breadcrumb')
			<!-- end breadcrumb -->
			<!-- begin page-header -->
            	@include($template.'.page_header')
			<!-- end page-header -->
			<!-- begin panel -->				
				{!!color_admin_v42_button($AUTH_ID,$id)!!}
            	@include($template.'.panel.panel_'.$page)

				{!!dev_mode_show_page_detail($AUTH_ID,$id)!!}
			<!-- end panel -->
		</div>
		<!-- end #content -->
				
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	
	<!-- ================== BEGIN BASE JS ================== -->
		@include($template.'.script.script_'.$script)
	<!-- ================== END BASE JS ================== -->
	
</body>
</html>
