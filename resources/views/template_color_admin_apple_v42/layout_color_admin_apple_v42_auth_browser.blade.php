
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
	
    @include($template.'.script.script_'.$script)
</body>
</html>
