<!DOCTYPE html>
<html>
<head>
	<title>
		{{$link_param_1}}
	</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/bothq.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/portrait_printa.css" media="print">
	<link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/chrome.css" >
	<link rel="stylesheet" type="text/css" href="{{ asset('/public/print') }}/layout_screen.css" media="screen">
</head>
<body>
@include('map.'.$id_param_1)
</body>
</html>