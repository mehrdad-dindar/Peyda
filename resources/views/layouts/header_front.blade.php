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
                <img id="img_logo" src="{{ URL::asset('front/img/logo-white-1.png') }}" height="60" alt="فرا گارانتی پیدا سرویس">
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
                    <a href="{{ route('login') }}" type="button" class="btn btn-icon btn-primary"><i class="uil uil-user align-middle icons"></i>
                    </a>
                </li>
            @else
                <li class="list-inline-item mb-0 pe-1">
                    <div class="dropdown dropdown-primary">
                        <button type="button" class="btn btn-icon btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="uil uil-user align-middle icons"></i>
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
                                <span class="badge bg-soft-dark me-2 mt-2 d-block">{{ auth()->user()->phone_num }}</span>
                            </div>
                            <div class="dropdown-divider my-3 border-top"></div>
                            <a class="dropdown-item text-dark" href="{{ route('profile') }}"><i
                                    class="uil uil-clipboard-notes align-middle me-1"></i> پروفایل </a>
                            <a class="dropdown-item text-dark" href="{{route('panel')}}"><i class="uil uil-user align-middle me-1"></i> پنل
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
                    <button type="button" class="mycustombtn btn btn-icon btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i
                            class="uil uil-shopping-cart align-middle icons"></i></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 p-4"
                         style="width: 300px;">
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
                        </div>
                        <p class="text-muted text-start mt-1 mb-0">پیداسرویس</p>
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
                <li><a href="{{ route('index') }}" class="sub-menu-item">صفحه اصلی </a></li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">محصولات </a><span class="menu-arrow"></span>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="index-saas.html" class="sub-menu-item">ساس </a></li>
                                <li><a href="index-classic-saas.html" class="sub-menu-item">ساس کلاسیک </a></li>
                                <li><a href="index-agency.html" class="sub-menu-item">آژانسی </a></li>
                                <li><a href="index-apps.html" class="sub-menu-item">اپلیکیشن </a></li>
                                <li><a href="index-classic-app.html" class="sub-menu-item">اپلیکیشن کلاسیک </a></li>
                                <li><a href="index-studio.html" class="sub-menu-item">استدیو </a></li>
                                <li><a href="index-marketing.html" class="sub-menu-item">مارکتینگ </a></li>
                                <li><a href="index-enterprise.html" class="sub-menu-item">پروژه </a></li>
                                <li><a href="index-services.html" class="sub-menu-item">خدمات </a></li>
                                <li><a href="index-payments.html" class="sub-menu-item">پرداخت ها </a></li>
                                <li><a href="index-crypto.html" class="sub-menu-item">کریپتوکارنسی </a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li><a href="index-it-solution.html" class="sub-menu-item">شرکتی اطلاعاتی </a></li>
                                <li><a href="index-business.html" class="sub-menu-item">کسب و کار </a></li>
                                <li><a href="index-modern-business.html" class="sub-menu-item">کسب و کار مدرن </a></li>
                                <li><a href="index-corporate.html" class="sub-menu-item">کسب و کار تجارتی </a></li>
                                <li><a href="index-hotel.html" class="sub-menu-item">هتل و رزرو</a></li>
                                <li><a href="index-construction.html" class="sub-menu-item">ساخت و ساز </a></li>
                                <li><a href="index-real-estate.html" class="sub-menu-item">مشاوره املاک </a></li>
                                <li><a href="index-developer.html" class="sub-menu-item">توسعه دهندگی </a></li>
                                <li><a href="index-seo-agency.html" class="sub-menu-item">آژانسی سئو</a></li>
                                <li><a href="index-hospital.html" class="sub-menu-item">بیمارستان </a></li>
                                <li><a href="index-hosting.html" class="sub-menu-item">هاستینگ و دامنه </a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li><a href="index-finance.html" class="sub-menu-item">شرکتی مالی <span
                                            class="badge bg-danger">جدید </span></a></li>
                                <li><a href="index-videocall.html" class="sub-menu-item">ویدئو کنفرانس <span
                                            class="badge bg-danger">جدید </span></a></li>
                                <li><a href="index-it-solution-two.html" class="sub-menu-item">شرکتی اطلاعاتی دو <span
                                            class="badge bg-danger">جدید </span></a></li>
                                <li><a href="index-freelancer.html" class="sub-menu-item">فریلنسری <span
                                            class="badge bg-danger">جدید </span></a></li>
                                <li><a href="index-blockchain.html" class="sub-menu-item">بلاکچین <span
                                            class="badge bg-danger">جدید </span></a></li>
                                <li><a href="index-crypto-two.html" class="sub-menu-item">کریپتوکارنسی دو <span
                                            class="badge bg-danger">جدید </span></a></li>
                                <li><a href="index-integration.html" class="sub-menu-item">ادغام </a></li>
                                <li><a href="index-task-management.html" class="sub-menu-item">مدیریت وظایف </a></li>
                                <li><a href="index-email-inbox.html" class="sub-menu-item">صندوق ایمیل </a></li>
                                <li><a href="index-travel.html" class="sub-menu-item">مسافرت </a></li>
                                <li><a href="index-blog.html" class="sub-menu-item">وبلاگ </a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li><a href="index-landing-one.html" class="sub-menu-item">لندینگ یک </a></li>
                                <li><a href="index-landing-two.html" class="sub-menu-item">لندینگ دو </a></li>
                                <li><a href="index-landing-three.html" class="sub-menu-item">لندینگ سه </a></li>
                                <li><a href="index-landing-four.html" class="sub-menu-item">لندینگ چهار </a></li>
                                <li><a href="index-shop.html" class="sub-menu-item">فروشگاه </a></li>
                                <li><a href="index-insurance.html" class="sub-menu-item">بیمه </a></li>
                                <li><a href="index-online-learning.html" class="sub-menu-item">آموزش آنلاین </a></li>
                                <li><a href="index-personal.html" class="sub-menu-item">شخصی </a></li>
                                <li><a href="index-coworking.html" class="sub-menu-item">همکار </a></li>
                                <li><a href="index-course.html" class="sub-menu-item">دوره ها </a></li>
                                <li><a href="forums.html" class="sub-menu-item">انجمن ها </a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li><a href="index-event.html" class="sub-menu-item">رویدادها </a></li>
                                <li><a href="index-single-product.html" class="sub-menu-item">محصول </a></li>
                                <li><a href="index-portfolio.html" class="sub-menu-item">نمونه کار </a></li>
                                <li><a href="index-job.html" class="sub-menu-item">کاریابی </a></li>
                                <li><a href="index-social-marketing.html" class="sub-menu-item">سوشیال مدیا </a></li>
                                <li><a href="index-digital-agency.html" class="sub-menu-item"> دیجیتال آژانسی </a></li>
                                <li><a href="index-car-riding.html" class="sub-menu-item">ماشین سواری</a></li>
                                <li><a href="index-customer.html" class="sub-menu-item">مشتریان </a></li>
                                <li><a href="index-software.html" class="sub-menu-item">نرم افزار </a></li>
                                <li><a href="index-ebook.html" class="sub-menu-item">کتاب الکترونیکی </a></li>
                                <li><a href="index-onepage.html" class="sub-menu-item">ساس <span
                                            class="badge bg-warning ms-2">تک صفحه ای </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">صفحات </a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> کمپانی </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-aboutus.html" class="sub-menu-item"> درباره ما </a></li>
                                <li><a href="page-aboutus-two.html" class="sub-menu-item"> درباره ما 2 </a></li>
                                <li><a href="page-services.html" class="sub-menu-item">خدمات </a></li>
                                <li><a href="page-history.html" class="sub-menu-item">تاریخچه </a></li>
                                <li><a href="page-team.html" class="sub-menu-item"> تیم </a></li>
                                <li><a href="page-pricing.html" class="sub-menu-item">قیمت گذاری </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> حساب کاربری </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="account-profile.html" class="sub-menu-item">پروفایل </a></li>
                                <li><a href="account-members.html" class="sub-menu-item">اعضا </a></li>
                                <li><a href="account-works.html" class="sub-menu-item">کارها</a></li>
                                <li><a href="account-messages.html" class="sub-menu-item">پیام ها </a></li>
                                <li><a href="account-payments.html" class="sub-menu-item">پرداخت ها </a></li>
                                <li><a href="account-setting.html" class="sub-menu-item">تنظیمات </a></li>
                                <li><a href="page-invoice.html" class="sub-menu-item">صورتحساب </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> فروشگاه </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="shop-grids.html" class="sub-menu-item">گرید محصولات </a></li>
                                <li><a href="shop-lists.html" class="sub-menu-item">محصولات لیستی </a></li>
                                <li><a href="shop-product-detail.html" class="sub-menu-item">جزئیات محصول </a></li>
                                <li><a href="shop-cart.html" class="sub-menu-item">سبد خرید </a></li>
                                <li><a href="shop-checkouts.html" class="sub-menu-item">پرداختی ها </a></li>
                                <li><a href="shop-myaccount.html" class="sub-menu-item">حساب من </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> مرکز پشتیبانی </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="helpcenter-overview.html" class="sub-menu-item">مرکز ارتباط </a></li>
                                <li><a href="helpcenter-faqs.html" class="sub-menu-item">گفت و گو </a></li>
                                <li><a href="helpcenter-guides.html" class="sub-menu-item">راهنماها </a></li>
                                <li><a href="helpcenter-support-request.html" class="sub-menu-item">پشتیبانی تماسی </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> انجمن ها </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="forums.html" class="sub-menu-item">بررسی اجمالی </a></li>
                                <li><a href="forums-topic.html" class="sub-menu-item">موضوع انجمن </a></li>
                                <li><a href="forums-comments.html" class="sub-menu-item">نظرات انجمن </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> قالب ایمیل</a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="email-confirmation.html" class="sub-menu-item">تائیدیه </a></li>
                                <li><a href="email-password-reset.html" class="sub-menu-item">بازیابی رمز عبور</a></li>
                                <li><a href="email-alert.html" class="sub-menu-item">هشدار </a></li>
                                <li><a href="email-invoice.html" class="sub-menu-item">صورتحساب </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">مشاغل </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-jobs.html" class="sub-menu-item">کارها </a></li>
                                <li><a href="page-jobs-sidebar.html" class="sub-menu-item">کارها - سایدبار</a></li>
                                <li><a href="page-job-detail.html" class="sub-menu-item">جزئیات کار</a></li>
                                <li><a href="page-job-apply.html" class="sub-menu-item">اعمال کار </a></li>
                                <li><a href="page-job-company-list.html" class="sub-menu-item">لیست شرکت </a></li>
                                <li><a href="page-job-company.html" class="sub-menu-item">جزئیات شرکت</a></li>
                                <li><a href="page-job-candidate-list.html" class="sub-menu-item">لیست نامزدها </a></li>
                                <li><a href="page-job-candidate.html" class="sub-menu-item">جزئیات نامزد </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> وبلاگ </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-blog-grid.html" class="sub-menu-item">گرید وبلاگ </a></li>
                                <li><a href="page-blog-sidebar.html" class="sub-menu-item">وبلاگ با سایدبار </a></li>
                                <li><a href="page-blog-list.html" class="sub-menu-item">وبلاگ فهرستی</a></li>
                                <li><a href="page-blog-list-sidebar.html" class="sub-menu-item">فهرست وبلاگ و
                                        سایدبار</a></li>
                                <li><a href="page-blog-detail.html" class="sub-menu-item">جزئیات وبلاگ </a></li>
                                <li><a href="page-blog-detail-two.html" class="sub-menu-item">جزئیات وبلاگ 2 </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> مطالعه موردی </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-cases.html" class="sub-menu-item">همه موارد </a></li>
                                <li><a href="page-case-detail.html" class="sub-menu-item">جزئیات پرونده </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> نمونه کار </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-portfolio-modern.html" class="sub-menu-item">نمونه کار مدرن </a></li>
                                <li><a href="page-portfolio-classic.html" class="sub-menu-item">نمونه کار کلاسیک </a>
                                </li>
                                <li><a href="page-portfolio-grid.html" class="sub-menu-item">نمونه کار گرید </a></li>
                                <li><a href="page-portfolio-masonry.html" class="sub-menu-item">نمونه کار ساختمانی </a>
                                </li>
                                <li><a href="page-portfolio-detail.html" class="sub-menu-item">جزئیات نمونه کار </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> دیگر صفحات </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="auth-login.html" class="sub-menu-item">ورود </a></li>
                                <li><a href="auth-cover-login.html" class="sub-menu-item">ورود 2 </a></li>
                                <li><a href="auth-login-three.html" class="sub-menu-item">ورود 3 </a></li>
                                <li><a href="auth-signup.html" class="sub-menu-item">ثبت نام </a></li>
                                <li><a href="auth-cover-signup.html" class="sub-menu-item">ثبت نام 2</a></li>
                                <li><a href="auth-signup-three.html" class="sub-menu-item">ثبت نام 3</a></li>
                                <li><a href="auth-re-password.html" class="sub-menu-item">بازیابی رمز عبور</a></li>
                                <li><a href="auth-cover-re-password.html" class="sub-menu-item">بازیابی رمز عبور 2</a>
                                </li>
                                <li><a href="auth-re-password-three.html" class="sub-menu-item">بازیابی رمز عبور 3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> نرم افزار </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-terms.html" class="sub-menu-item">خدمات سایت </a></li>
                                <li><a href="page-privacy.html" class="sub-menu-item">حریم خصوصی </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> صفحات خاص </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-comingsoon.html" class="sub-menu-item">به زودی </a></li>
                                <li><a href="page-comingsoon2.html" class="sub-menu-item">به زودی 2</a></li>
                                <li><a href="page-maintenance.html" class="sub-menu-item">در دست ساخت </a></li>
                                <li><a href="page-error.html" class="sub-menu-item">خطا </a></li>
                                <li><a href="page-thankyou.html" class="sub-menu-item">صفحه تشکر </a></li>
                            </ul>
                        </li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> تماس با ما </a><span
                                class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="page-contact-detail.html" class="sub-menu-item">جزئیات تماس </a></li>
                                <li><a href="page-contact-one.html" class="sub-menu-item">تماس 1</a></li>
                                <li><a href="page-contact-two.html" class="sub-menu-item">تماس 2</a></li>
                                <li><a href="page-contact-three.html" class="sub-menu-item">تماس 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">اسناد </a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="documentation.html" class="sub-menu-item">مستند </a></li>
                        <li><a href="changelog.html" class="sub-menu-item">تغییرات </a></li>
                        <li><a href="components.html" class="sub-menu-item">اجزاء </a></li>
                        <li><a href="widget.html" class="sub-menu-item">ابزارک </a></li>
                    </ul>
                </li>
            </ul><!--end navigation menu-->
            <!--end login button-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->
