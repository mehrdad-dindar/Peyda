<div class="container-fluid sticky-top" id="topNav">
    <div class="row d-none d-md-flex p-2">
        <div class="col-md-8 d-flex align-items-center">
            <div class="logo">
                <a href="{{ route('index') }}">
                    <img src="{{ URL::asset('front/img/Logo.png')}}" class="img-fluid" alt="">
                </a>
            </div>
            <nav class="menu">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">خانه</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">مقالات</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">تماس باما</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">درباره ما</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-end">
            @guest
                <a href="{{ route('login') }}" class="nav-link">ورود | عضویت</a>
            @else
                <a id="navbarDropdown" class="nav-link" href="{{route('panel')}}" role="button" v-pre>
                    سلام {{ Auth::user()->getFullNameAttribute() ?? 'کاربر عزیز'  }}
                </a>
                <span class="nav-link separator">|</span>
                <a href="{{ route('logout') }}" class="nav-link"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    خروج
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="get" class="d-none">
                    @csrf
                </form>
            @endguest
            {{--<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#myModal">ورود | عضویت</a>--}}
        </div>
    </div>
    <div class="row d-md-none py-2">
        <div class="col-4 d-flex align-items-center">
            <a href="#menu" class="nav-toggle d-flex justify-content-center align-items-center text-decoration-none">
                <i class="fas fa-bars fa-lg"></i>
            </a>
        </div>
        <div class="col-4 text-center">
            <div class="mobile-logo">
                <a href="{{ route('index') }}" class="d-inline-block h-100">
                    <img src="{{ URL::asset('front/img/Logo.png')}}" class="img-fluid h-100" alt="">
                </a>
            </div>
        </div>
        <div class="col-4 d-flex align-items-center justify-content-end">
            <div class="menu-search me-4">
                <span class="text-white">
                    <i class="fas fa-search fa-lg"></i>
                </span>
            </div>
            <div class="my-account me-4">
                <a href="{{route('login')}}" class="text-white">
                    <i class="fas fa-user fa-lg"></i>
                </a>
            </div>
        </div>
    </div>
    <div id="menu" class="row d-md-none position-fixed">
        <ul class="nav flex-column p-0">
            <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">خانه</a></li>
            <li class="nav-item"><a class="nav-link" href="#">مقالات</a></li>
            <li class="nav-item"><a class="nav-link" href="#">تماس باما</a></li>
            <li class="nav-item"><a class="nav-link" href="#">درباره ما</a></li>
        </ul>
    </div>
</div>

