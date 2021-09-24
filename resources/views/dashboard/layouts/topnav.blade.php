<!-- Top Header Area -->
<header class="top-header-area d-flex align-items-center justify-content-between">
    <div class="left-side-content-area d-flex align-items-center">
        <!-- Mobile Logo -->
        <div class="mobile-logo mr-3 mr-sm-4">
            <a href="{{ route('index') }}"><img src="{{ URL::asset('front/img/faveicon.png')}}"></a>
        </div>

        <!-- Triggers -->
        <div class="ecaps-triggers mr-1 mr-sm-3">
            <div class="menu-collasped" id="menuCollasped">
                <i class="zmdi zmdi-menu"></i>
            </div>
            <div class="mobile-menu-open" id="mobileMenuOpen">
                <i class="zmdi zmdi-menu"></i>
            </div>
        </div>

        <!-- Left Side Nav -->
        <ul class="left-side-navbar d-flex align-items-center">
            <li class="hide-phone app-search">
                <form class="input-group" role="search">
                    <input type="text" class="form-control" placeholder="جستجو ..." aria-label="جستجو">
                </form>
            </li>
        </ul>
    </div>

    <div class="right-side-navbar d-flex align-items-center justify-content-end">
        <!-- Mobile Trigger -->
        <div class="right-side-trigger" id="rightSideTrigger">
            <i class="ti-align-left"></i>
        </div>

        <!-- Top Bar Nav -->
        <ul class="right-side-content d-flex align-items-center">
            <!-- Full Screen Mode -->
            <li class="full-screen-mode ml-1">
                <a href="javascript:" id="fullScreenMode"><i class="zmdi zmdi-fullscreen"></i></a>
            </li>

            <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="zmdi zmdi-shopping-basket" aria-hidden="true"></i></button>

                <div class="dropdown-menu dropdown-menu-right">
                    <!-- Top Message Area -->
                    <div class="top-message-area">
                        <!-- Heading -->
                        <div class="top-message-heading">
                            <div class="heading-title">
                                <h6>پیام ها</h6>
                            </div>
                            <span>5 جدید</span>
                        </div>
                        <div class="message-box" id="messageBox">
                            <a href="#" class="dropdown-item">
                                <img src="{{ URL::asset('admin/img/member-img/1.png')}}" alt="">
                                <span class="message-text">
                                                <span>دوره ویدیوی 6 ساعته در Angular </span>
                                                <span>3 دقیقه پیش </span>
                                            </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <img src="{{ URL::asset('admin/img/member-img/1.png')}}" alt="">
                                <span class="message-text">
                                                <span>دوره ویدیوی 6 ساعته در Angular </span>
                                                <span>3 دقیقه پیش </span>
                                            </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <img src="{{ URL::asset('admin/img/member-img/1.png')}}" alt="">
                                <span class="message-text">
                                                <span>دوره ویدیوی 6 ساعته در Angular </span>
                                                <span>3 دقیقه پیش </span>
                                            </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <img src="{{ URL::asset('admin/img/member-img/1.png')}}" alt="">
                                <span class="message-text">
                                                <span>دوره ویدیوی 6 ساعته در Angular </span>
                                                <span>3 دقیقه پیش </span>
                                            </span>
                            </a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="zmdi zmdi-volume-up" aria-hidden="true"></i> @if(sizeof(\App\Http\Controllers\Controller::getAdminNotification(auth()->user()->id))>0) <span
                        class="active-status"></span> @endif </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- Top Notifications Area -->
                    <div class="top-notifications-area">
                        <!-- Heading -->
                        <div class="notifications-heading">
                            <div class="heading-title">
                                <h6>اطلاعیه</h6>
                            </div>
                            <span>@if(sizeof(\App\Http\Controllers\Controller::getAdminNotification(auth()->user()->id))>0)
                                    {{sizeof(\App\Http\Controllers\Controller::getAdminNotification(auth()->user()->id))}}   جدید
                                @else
                                پیامی وجود ندارد
                              @endif
                            </span>
                        </div>

                        <div class="notifications-box" id="notificationsBox">
                            @foreach(\App\Http\Controllers\Controller::getAdminNotification(auth()->user()->id) as $row)
                                <a href="{{$row->link}}" class="dropdown-item"><i
                                        class="zmdi zmdi-notifications-active bg-danger"></i><span>{{$row->body}}</span></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><img src="{{ URL::asset('admin/img/member-img/3.png')}}" alt=""></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- User Profile Area -->
                    <div class="user-profile-area">
                        <div class="user-profile-heading">
                            <!-- Thumb -->
                            <div class="profile-img">
                                <img class="chat-img mr-2" src="{{ URL::asset('admin/img/member-img/3.png')}}" alt="">
                            </div>
                            <!-- Profile Text -->
                            <div class="profile-text">
                                <h6>{{Auth::user()->name}}</h6>
                                <span>توسعه دهنده</span>
                            </div>
                        </div>
                        <a href="{{ route('profile') }}" class="dropdown-item"><i class="zmdi zmdi-account profile-icon bg-primary"
                                                             aria-hidden="true"></i> پروفایل من</a>
                        <a href="#" class="dropdown-item"><i class="zmdi zmdi-email-open profile-icon bg-success"
                                                             aria-hidden="true"></i> پیام ها</a>
                        <a href="#" class="dropdown-item"><i class="zmdi zmdi-brightness-7 profile-icon bg-info"
                                                             aria-hidden="true"></i> تنظیمات حساب</a>
                        <a href="#" class="dropdown-item"><i class="zmdi zmdi-mouse profile-icon bg-danger"
                                                             aria-hidden="true"></i> وظایف من</a>
                        <a href="#" class="dropdown-item"><i class="zmdi zmdi-wifi-alt profile-icon bg-purple"
                                                             aria-hidden="true"></i> پشتیبانی</a>
                            @csrf
                            <a href="{{route('logout')}}" class="dropdown-item"><i class="ti-unlink profile-icon bg-warning"
                                                                           aria-hidden="true"></i> خروج از سیستم
                            </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
