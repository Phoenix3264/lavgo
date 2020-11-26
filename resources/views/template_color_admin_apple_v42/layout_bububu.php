<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    @include('general_layout.title')
    @include('general_layout.meta_backend')	
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/font-awesome/5.14/css/all.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/css/apple/style.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/css/apple/style-responsive.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/css/apple/theme/default.css" rel="stylesheet" id="theme" />
    @include($template.'.'.$controller.'.css.css_'.$page)    
    <link href="{{ asset('/public/').'/additional' }}/backend.css" rel="stylesheet" />
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/pace/pace.min.js"></script>
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->
	
	{!!color_admin_apple_v42_page_container_without_sidebar($agent)!!}
		<!-- begin #header -->
		<div id="header" class="header navbar-inverse">         
			@include($template.'.'.$controller.'.header')
		</div>
		<!-- end #header -->
		
		<!-- begin #content -->
		<div id="content" class="content row  justify-content-md-center">		
			<div class="col-md-8">
				<!-- begin page-header -->
					@include($template.'.'.$controller.'.page_header')
				<!-- end page-header -->
				
				@if(Session::has('message'))
					{!!color_admin_apple_v42_flash_message(dmha_40_id_check_col( Session::get('message'),'status'),dmha_40_id_check_col( Session::get('message'),'nama'))!!}
				@endif

				<!-- begin row -->
					@include($template.'.'.$controller.'.panel.panel_'.$page) 
				<!-- end row -->

				
				<?php
				echo dev_mode_show_page_detail($AUTH_ID,$id);
				?>
				<?php
				echo dev_mode_show_agent_detail($agent);
				?>

			</div>
		</div>
		<!-- end #content -->
		
        
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
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
    @include($template.'.'.$controller.'.script.script_'.$script)
</body>
</html>
