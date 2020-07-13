<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    
    @include('general_layout.title')

    @include('general_layout.meta')

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
        @include($template.'.css.'.$page)
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
        @include($template.'.js.'.$page)
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
			<!-- begin breadcrumb -->			
            @include($template.'.breadcrumb')
			<!-- end breadcrumb -->
			<!-- begin page-header -->
            @include($template.'.page_header')
			<!-- end page-header -->
			{!!button_panel_header($dmha_2,$id)!!}
			<!-- begin panel -->
			
            @include($template.'.panel.panel_'.$page)
			<!-- end panel -->
			

			id : {{$id}}<br/>
			page : {{$dmha_4}}<br/>
			script : {{$dmha_5}}<br/>
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
        
        <!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
        @include($template.'.script.'.$script)
	<!-- ================== END BASE JS ================== -->
	
</body>
</html>
