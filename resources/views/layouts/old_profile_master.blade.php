<!doctype html>
<html class="h-100" lang="fa" dir="rtl">
@include('layouts.header')
<body class="d-flex flex-column h-100">

@include('layouts.topnav')
<div class="container main-content mt-5">
    <div class="row">

        @include('layouts.sidemenu')
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>

@include('layouts.footer')
</body>
</html>
