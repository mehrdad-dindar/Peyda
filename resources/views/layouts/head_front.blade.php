<meta charset="utf-8"/>
<title>پیدا سرویس ماندگار | @yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
{{-- TODO change metas --}}
<meta name="description" content="@yield('description')"/>
<!-- favicon -->
<link rel="shortcut icon" href="{{ URL::asset('front/img/faveicon.png')}}">
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-C9MZZ75483"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-C9MZZ75483');
</script>
@yield('custom_css')
