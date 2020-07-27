
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    @include('general_layout.title')
    @include('general_layout.meta_backend')
    @include($template.'.css.css_'.$page)    
    <link href="{{ asset('/public/').'/additional' }}/backend.css" rel="stylesheet" />
    @include($template.'.js.js_'.$page)	
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">         
			@include($template.'.header')
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->            
        @include($template.'.sidebar')
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
            
			<!-- begin breadcrumb -->            
            @include($template.'.breadcrumb')
			<!-- end breadcrumb -->

			<!-- begin page-header -->
            	@include($template.'.page_header')
			<!-- end page-header -->
			
			<!-- begin panel -->
            	@include($template.'.panel.panel_'.$page) 
			<!-- end panel -->
            
			{!!dev_mode_show_page_detail($AUTH_ID,$id)!!}
		</div>
		<!-- end #content -->
		
		<!-- begin theme-panel -->
		<!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
    @include($template.'.script.script_'.$script)
</body>
</html>
