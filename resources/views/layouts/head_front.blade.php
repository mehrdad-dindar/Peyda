<meta charset="utf-8"/>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
{{-- TODO change metas --}}
<meta name="description" content="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"/>
<meta name="keywords" content="yyyyyyyyyyyyyyyyyyyyyyy"/>
<!-- favicon -->
<link rel="shortcut icon" href="{{ URL::asset('main/images/favicon.ico')}}">
<!-- Bootstrap -->
<link href="{{ URL::asset('main/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- Icons -->
<link href="{{ URL::asset('main/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{ URL::asset('main/unicons.iconscout.com/release/v3.0.6/css/line.css')}}"/>
<!-- Animation -->
<link href="{{ URL::asset('main/css/aos.css')}}" rel="stylesheet" type="text/css"/>
<!-- Slider -->
<link rel="stylesheet" href="{{ URL::asset('main/css/tiny-slider.css')}}"/>
<!-- Main Css -->
<link href="{{ URL::asset('main/css/style.min.css')}}" rel="stylesheet" type="text/css" id="theme-opt"/>
<link href="{{ URL::asset('main/css/colors/purple.css')}}" rel="stylesheet" id="color-opt">
@yield('custom_css')
