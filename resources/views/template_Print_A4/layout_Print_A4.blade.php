<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    @include('general_layout.title')
    @include($template.'.css.css_'.$page)    
</head>
<body>
    @include($template.'.panel.panel_'.$page) 
</body>
</html>
