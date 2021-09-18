<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>پنل مدیریت | @yield('title' , 'page-title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ URL::asset('admin/img/core-img/favicon.png') }}">

    <link rel="stylesheet" href="{{ URL::asset('admin/style.css') }}">

</head>
<body class="login-area">

<!-- Preloader -->
<div id="preloader">
    <div id="ctn-preloader" class="ont-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                    <span data-text-preloader="پیدا‌سرویس" class="letters-loading">
                        پیدا‌سرویس
                     </span>
            </div>
            <p class="text-center">درحال اجرا</p>
        </div>

        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Preloader -->


<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class="main-content- h-100vh">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12">
                <!-- Middle Box -->
                <div class="middle-box">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

<!-- Must needed plugins to the run this Template -->
<script src="{{ URL::asset('admin/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/popper.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/bundle.js') }}"></script>

<!-- Active JS -->
<script src="{{ URL::asset('admin/js/default-assets/active.js') }}"></script>
@yield('custom_js')
</body>

</html>
