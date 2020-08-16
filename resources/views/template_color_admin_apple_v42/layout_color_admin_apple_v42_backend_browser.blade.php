
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
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/pace/pace.min.js"></script>
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	{!!color_admin_apple_v42_page_container($agent)!!}
		<!-- begin #header -->
		<div id="header" class="header navbar-inverse">         
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
			
			@if(Session::has('message'))
				{!!color_admin_apple_v42_flash_message(dmha_40_id_check_col( Session::get('message'),'status'),dmha_40_id_check_col( Session::get('message'),'nama'))!!}
			@endif
			<!-- begin panel -->
            	@include($template.'.panel.panel_'.$page) 
			<!-- end panel -->
            
			<?php
			  echo dev_mode_show_page_detail($AUTH_ID,$id);
			?>
			<?php
			  echo dev_mode_show_agent_detail($agent);
			?>
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
