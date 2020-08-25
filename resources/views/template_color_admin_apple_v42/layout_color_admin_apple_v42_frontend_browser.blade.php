
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    @include('general_layout.title')
    @include('general_layout.meta_'.$controller)	
    @include($template.'.'.$controller.'.css.css_'.$page)   
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/font-awesome/5.3/css/all.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/css/one-page-parallax/style.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/css/one-page-parallax/style-responsive.min.css" rel="stylesheet" />
	<link href="{{ asset('/public/').'/'.$root }}/assets/css/one-page-parallax/theme/default.css" id="theme" rel="stylesheet" />
    <link href="{{ asset('/public/').'/additional' }}/backend.css" rel="stylesheet" />
	<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/pace/pace.min.js"></script>
</head>
<body data-spy="scroll" data-target="#header" data-offset="51">
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin #header -->
		@include($template.'.'.$controller.'.header')
		<!-- end #header -->
		
		<!-- begin panel -->
		@include($template.'.'.$controller.'.panel.panel_'.$page) 
		<!-- end panel -->
	</div>
	<!-- end #page-container -->
	
    @include($template.'.'.$controller.'.script.script_'.$page.'_'.replace_to_underscore(dmha_8_what_is_my_app_mode()))    
</body>
</html>
