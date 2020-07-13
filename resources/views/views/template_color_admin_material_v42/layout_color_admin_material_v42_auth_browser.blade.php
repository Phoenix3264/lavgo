<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    @include('general_layout.title')
    @include('general_layout.meta')
    @include($template.'.css.css_'.$page)
    @include($template.'.js.js_'.$page)
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<div class="material-loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
			</svg>
			<div class="message">Loading{{ asset('/public/').'/'.$root }}.</div>
		</div>
	</div>
	<!-- end #page-loader -->
	
	<div class="login-cover">
		<div class="login-cover-image" style="background-image: url({{ asset('/public/').'/'.$root }}/assets/img/login-bg/login-bg-17.jpg)" data-id="login-cover-image"></div>
		<div class="login-cover-bg"></div>
	</div>
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-v2" data-pageload-addclass="animated fadeIn">
			<!-- begin brand -->
			<div class="login-header">
				<div class="brand">
					Color Admin Material
					<small>responsive bootstrap 3 admin template</small>
				</div>
				<div class="icon">
					<i class="fa fa-lock"></i>
				</div>
			</div>
			<!-- end brand -->
			<!-- begin login-content -->
			<div class="login-content">
            	@include($template.'.panel.panel_'.$page)
			</div>
			<!-- end login-content -->
		</div>
		<!-- end login -->
		
		<ul class="login-bg-list clearfix">
			<li class="active"><a href="javascript:;" data-click="change-bg" data-img="{{ asset('/public/').'/'.$root }}/assets/img/login-bg/login-bg-17.jpg" style="background-image: url({{ asset('/public/').'/'.$root }}/assets/img/login-bg/login-bg-17.jpg)"></a></li>
			<li><a href="javascript:;" data-click="change-bg" data-img="{{ asset('/public/').'/'.$root }}/assets/img/login-bg/login-bg-16.jpg" style="background-image: url({{ asset('/public/').'/'.$root }}/assets/img/login-bg/login-bg-16.jpg)"></a></li>
			<li><a href="javascript:;" data-click="change-bg" data-img="{{ asset('/public/').'/'.$root }}/assets/img/login-bg/login-bg-15.jpg" style="background-image: url({{ asset('/public/').'/'.$root }}/assets/img/login-bg/login-bg-15.jpg)"></a></li>
			<li><a href="javascript:;" data-click="change-bg" data-img="{{ asset('/public/').'/'.$root }}/assets/img/login-bg/login-bg-14.jpg" style="background-image: url({{ asset('/public/').'/'.$root }}/assets/img/login-bg/login-bg-14.jpg)"></a></li>
			<li><a href="javascript:;" data-click="change-bg" data-img="{{ asset('/public/').'/'.$root }}/assets/img/login-bg/login-bg-13.jpg" style="background-image: url({{ asset('/public/').'/'.$root }}/assets/img/login-bg/login-bg-13.jpg)"></a></li>
			<li><a href="javascript:;" data-click="change-bg" data-img="{{ asset('/public/').'/'.$root }}/assets/img/login-bg/login-bg-12.jpg" style="background-image: url({{ asset('/public/').'/'.$root }}/assets/img/login-bg/login-bg-12.jpg)"></a></li>
		</ul>
		
	</div>
	<!-- end page container -->
	
    @include($template.'.script.script_'.$script)
</body>
</html>
