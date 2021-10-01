<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->

<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="{{ route('index') }}">
                <img id="img_logo" src="{{ URL::asset('front/img/logo-white-1.png') }}" height="60"
                     alt="فرا گارانتی پیدا سرویس">
            </a>
        </div>
        <ul class="buy-button list-inline mb-0">
            <li class="list-inline-item mb-0">
                <div class="dropdown">
                    <button type="button" class="btn btn-link text-decoration-none dropdown-toggle p-0 pe-2"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="uil uil-search h5 text-muted"></i>
                    </button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 py-0"
                         style="width: 300px; margin: 0px;">
                        <form>
                            <input type="text" id="text" name="name" class="form-control border bg-white"
                                   placeholder="جستجو...">
                        </form>
                    </div>
                </div>
            </li>
            @guest
                <li class="list-inline-item mb-0 pe-1">
                    {{--<a href="{{ route('login') }}" class="btn btn-primary">ورود / عضویت</a>--}}
                    <a href="{{ route('login') }}" type="button" class="btn btn-icon btn-primary"><i
                            class="uil uil-user align-middle icons"></i>
                    </a>
                </li>
            @else
                <li class="list-inline-item mb-0 pe-1">
                    <div class="dropdown dropdown-primary">
                        <button type="button" class="btn btn-icon btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i
                                class="uil uil-user align-middle icons"></i>
                        </button>
                        <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 py-3"
                             style="width: 200px; margin: 0px;">
                            <div class="dropdown-item text-dark">
                                <img src="@if(auth()->user()->avatar)
                                {{URL::asset('uploads/avatars').'/'.auth()->user()->avatar}}
                                @else
                                {{ URL::asset('profile/media/avatars/user.jpg') }}
                                @endif" class="img-fluid avatar avatar-md-sm rounded-circle">
                                <span class="ms-2">{{\App\Models\User::getFullNameAttribute(auth()->user())}}</span>
                                <span
                                    class="badge bg-soft-dark me-2 mt-2 d-block">{{ auth()->user()->phone_num }}</span>
                            </div>
                            <div class="dropdown-divider my-3 border-top"></div>
                            <a class="dropdown-item text-dark" href="{{ route('profile') }}"><i
                                    class="uil uil-clipboard-notes align-middle me-1"></i> پروفایل </a>
                            <a class="dropdown-item text-dark" href="{{route('panel')}}"><i
                                    class="uil uil-user align-middle me-1"></i> پنل
                                کاربری</a>
                            <div class="dropdown-divider my-3 border-top"></div>
                            <a class="dropdown-item text-dark" href="{{ route('logout') }}"><i
                                    class="uil uil-sign-out-alt align-middle me-1"></i> خروج </a>
                        </div>
                    </div>
                </li>
            @endguest
            <li class="list-inline-item mb-0">
                <div class="dropdown">
                    <button type="button" class="mycustombtn btn btn-icon btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i
                            class="uil uil-shopping-cart align-middle icons"></i></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 p-4"
                         style="width: 300px;">
                        <div class="pb-4">
                            <a href="javascript:void(0)" class="d-flex align-items-center">
                                <span class="text-muted">هیچ محصولی در سبد خرید نیست.</span>
                            </a>
                        </div>
                        {{-- TODO Cart details--}}
                        {{--<div class="pb-4">
                            <a href="javascript:void(0)" class="d-flex align-items-center">
                                <img src="images/shop/product/s-1.jpg" class="shadow rounded" style="max-height: 64px;"
                                     alt="">
                                <div class="flex-1 text-start ms-3">
                                    <h6 class="text-dark mb-0">تی شرت (مردانه)</h6>
                                    <p class="text-muted mb-0">230 هزار تومان</p>
                                </div>
                                <h6 class="text-dark mb-0">230 هزار تومان</h6>
                            </a>

                            <a href="javascript:void(0)" class="d-flex align-items-center mt-4">
                                <img src="images/shop/product/s-2.jpg" class="shadow rounded" style="max-height: 64px;"
                                     alt="">
                                <div class="flex-1 text-start ms-3">
                                    <h6 class="text-dark mb-0">کیسه </h6>
                                    <p class="text-muted mb-0">50 هزار تومان | 2 عدد</p>
                                </div>
                                <h6 class="text-dark mb-0">100 هزار تومان</h6>
                            </a>

                            <a href="javascript:void(0)" class="d-flex align-items-center mt-4">
                                <img src="images/shop/product/s-3.jpg" class="shadow rounded" style="max-height: 64px;"
                                     alt="">
                                <div class="flex-1 text-start ms-3">
                                    <h6 class="text-dark mb-0">ساعت (مردانه)</h6>
                                    <p class="text-muted mb-0">800 هزار تومان | 1 عدد</p>
                                </div>
                                <h6 class="text-dark mb-0">800 هزار تومان</h6>
                            </a>
                        </div>
                        <div class="pb-4">
                            <a href="javascript:void(0)" class="d-flex align-items-center">
                                <img src="images/shop/product/s-1.jpg" class="shadow rounded" style="max-height: 64px;"
                                     alt="">
                                <div class="flex-1 text-start ms-3">
                                    <h6 class="text-dark mb-0">تی شرت (مردانه)</h6>
                                    <p class="text-muted mb-0">230 هزار تومان</p>
                                </div>
                                <h6 class="text-dark mb-0">230 هزار تومان</h6>
                            </a>

                            <a href="javascript:void(0)" class="d-flex align-items-center mt-4">
                                <img src="images/shop/product/s-2.jpg" class="shadow rounded" style="max-height: 64px;"
                                     alt="">
                                <div class="flex-1 text-start ms-3">
                                    <h6 class="text-dark mb-0">کیسه </h6>
                                    <p class="text-muted mb-0">50 هزار تومان | 2 عدد</p>
                                </div>
                                <h6 class="text-dark mb-0">100 هزار تومان</h6>
                            </a>

                            <a href="javascript:void(0)" class="d-flex align-items-center mt-4">
                                <img src="images/shop/product/s-3.jpg" class="shadow rounded" style="max-height: 64px;"
                                     alt="">
                                <div class="flex-1 text-start ms-3">
                                    <h6 class="text-dark mb-0">ساعت (مردانه)</h6>
                                    <p class="text-muted mb-0">800 هزار تومان | 1 عدد</p>
                                </div>
                                <h6 class="text-dark mb-0">800 هزار تومان</h6>
                            </a>
                        </div>

                        <div class="d-flex align-items-center justify-content-between pt-4 border-top">
                            <h6 class="text-dark mb-0">مجموع (تومان):</h6>
                            <h6 class="text-dark mb-0">1,150,000 تومان</h6>
                        </div>

                        <div class="mt-3 text-center">
                            <a href="{{route('shop_cart')}}" class="btn btn-primary">نمایش سبد خرید </a>
                            <a href="{{ route('shop_checkout') }}" class="btn btn-primary">پرداخت </a>
                        </div>--}}
                        <p class="text-muted text-start mt-1 mb-0">پیدا سرویس ماندگار</p>
                    </div>
                </div>
            </li>
        </ul>
        <!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="{{ route('index') }}" class="sub-menu-item">خانه</a></li>
                <li><a href="{{route('about_us')}}" class="sub-menu-item">درباره ما</a></li>
                <li><a href="{{route('our_services')}}" class="sub-menu-item">فراگارانتی</a></li>
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">سایر خدمات</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="#" class="sub-menu-item">بیمه آتش‌سوزی <span
                                    class="badge bg-primary ms-2">به زودی</span></a></li>
                        <li><a href="#" class="sub-menu-item">بیمه زلزله <span
                                    class="badge bg-primary ms-2">به زودی</span></a></li>
                        <li><a href="#" class="sub-menu-item">بیمه اعضای بدن <span
                                    class="badge bg-primary ms-2">به زودی</span></a></li>
                        <li><a href="#" class="sub-menu-item">هر ایرانی یک وکیل <span
                                    class="badge bg-primary ms-2">به زودی</span></a></li>
                    </ul>
                </li>
                <li><a href="{{route('shop')}}" class="sub-menu-item">فروشگاه محصولات</a></li>
                <li><a href="{{route('archive_blog')}}" class="sub-menu-item">اخبار و مقالات</a></li>
                <li><a href="{{route('contact_us')}}" class="sub-menu-item">تماس با ما</a></li>
            </ul><!--end navigation menu-->
            <!--end login button-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->
