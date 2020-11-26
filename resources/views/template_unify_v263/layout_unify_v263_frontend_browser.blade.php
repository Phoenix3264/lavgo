<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Title -->
    	@include('general_layout.title')

		<!-- Required Meta Tags Always Come First -->

		@include('general_layout.meta_frontend')	
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('/public/').'/'.$root }}/favicon.ico">
		<!-- Google Fonts -->
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
		<!-- CSS Global Compulsory -->
		<link rel="stylesheet" href="{{ asset('/public/').'/'.$root }}/assets/vendor/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="{{ asset('/public/').'/'.$root }}/assets/vendor/icon-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ asset('/public/').'/'.$root }}/assets/vendor/icon-hs/style.css">
		<link rel="stylesheet" href="{{ asset('/public/').'/'.$root }}/assets/vendor/animate.css">
		<link rel="stylesheet" href="{{ asset('/public/').'/'.$root }}/assets/vendor/hs-megamenu/src/hs.megamenu.css">
		<link rel="stylesheet" href="{{ asset('/public/').'/'.$root }}/assets/vendor/hamburgers/hamburgers.min.css">

		<!-- CSS Unify -->
		<link rel="stylesheet" href="{{ asset('/public/').'/'.$root }}/assets/css/unify-core.css">
		<link rel="stylesheet" href="{{ asset('/public/').'/'.$root }}/assets/css/unify-components.css">
		<link rel="stylesheet" href="{{ asset('/public/').'/'.$root }}/assets/css/unify-globals.css">

		<!-- CSS Customization -->
		<link rel="stylesheet" href="{{ asset('/public/').'/'.$root }}/assets/css/custom.css">

		@include($template.'.'.$controller.'.css.css_'.$page)    
	</head>

	<body>
		<main>
			<!-- Header -->
			<header id="js-header" class="u-header u-header--static">             
			  	@include($template.'.'.$controller.'.header')
			</header>
			<!-- End Header -->

			@include($template.'.'.$controller.'.panel.panel_'.$page) 

		</main>

		<!-- JS Global Compulsory -->
		<script src="{{ asset('/public/').'/'.$root }}/assets/vendor/jquery/jquery.min.js"></script>
		<script src="{{ asset('/public/').'/'.$root }}/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
		<script src="{{ asset('/public/').'/'.$root }}/assets/vendor/popper.js/popper.min.js"></script>
		<script src="{{ asset('/public/').'/'.$root }}/assets/vendor/bootstrap/bootstrap.min.js"></script>

		<!-- JS Customization -->
		<script src="{{ asset('/public/').'/'.$root }}/assets/js/custom.js"></script>

		@include($template.'.'.$controller.'.script.script_'.$script)

	</body>

</html>
