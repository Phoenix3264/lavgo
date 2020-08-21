<!DOCTYPE html>
<html>
<head>
	<title>
		{{$parent_id_param_1}} {{$deskripsi_param_1}}
	</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/bothw.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/{{$my_ui_is}}_print.css" media="print">
	<link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/chrome.css" >
	<link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/{{$my_ui_is}}_screen.css" media="screen">
</head>
<body>
	@yield('content')



	@include($my_status_is.'.include.js.'.'js_'.$my_ui_is.'_'.$my_css_js_is)
</body>
</html>