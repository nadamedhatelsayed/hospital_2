<!-- Title -->
<title>@yield("title")</title>

<!-- bootstrap -->
<link href="{{ URL::asset('Site/css/bootstrap.css') }}" rel="stylesheet">

<!--- Style css -->
@if (App::getLocale() == 'en')
    <link href="{{ URL::asset('Site/css/style_ltr.css') }}" rel="stylesheet">
@else
    <link href="{{ URL::asset('Site/css/style_rtl.css') }}" rel="stylesheet">
@endif

<link href="{{ URL::asset('Site/css/responsive.css') }}" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="{{ URL::asset('Site/css/color-switcher-design.css') }}" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="{{ URL::asset('Site/css/color-themes/default-theme.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="Site/images/favicon.png" type="image/x-icon">
<link rel="icon" href="Site/images/favicon.png" type="image/x-icon">

@yield('css')
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="Site/js/respond.js"></script><![endif]-->
