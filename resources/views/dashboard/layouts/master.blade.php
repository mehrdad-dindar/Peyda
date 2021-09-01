<!doctype html>
<html lang="en">

@include('dashboard.layouts.header')

<body>
@include('dashboard.layouts.preloader')

<!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
<div class="ecaps-page-wrapper">
@include('dashboard.layouts.sidebar')
<!-- Page Content -->
    <div class="ecaps-page-content">
        @include('dashboard.layouts.topnav')
        @include('dashboard.layouts.notification')
        @yield('content')
    </div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

@include('dashboard.layouts.footer')

<!-- These plugins only need for the run this page -->
@yield('custom_js')


</body>
</html>
