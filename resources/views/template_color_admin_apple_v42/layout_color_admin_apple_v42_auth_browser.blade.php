
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    @include('general_layout.title')
    @include('general_layout.meta_backend')
    @include($template.'.css.css_'.$page) 	
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/pace/pace.min.js"></script>
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<div class="login-cover">
		<div class="login-cover-image" style="background-image: url({{ asset('/public/').'/'.$root }}/assets/img/login-bg/login-bg-17.jpg)" data-id="login-cover-image"></div>
		<div class="login-cover-bg"></div>
	</div>

	<!-- begin #page-container -->
    @include($template.'.panel.panel_'.$page) 
	<!-- end page container -->
	
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
	<!-- end page container -->
>>>>>>> parent of 1178d3f2... stuck in here
=======
	<!-- end page container -->
>>>>>>> parent of 1178d3f2... stuck in here
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
=======
>>>>>>> parent of 6ecbe59a... up
    @include($template.'.script.script_'.$script)
</body>
</html>
