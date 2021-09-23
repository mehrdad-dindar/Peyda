@extends('layouts.master_front')
@section('title','صفحه نخست')
@section('custom_css')
@endsection
@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="title-heading text-center mt-5 pt-3">
                        <div class="alert alert-light alert-pills" role="alert" data-aos="fade-up" data-aos-duration="1000">
                            <span class="badge rounded-pill bg-success me-1">پشتیبانی</span>
                            <span class="content"> پشتیبانی قدرتمند 24/7</span>
                        </div>
                        <h1 class="heading mb-3" data-aos="fade-up" data-aos-duration="1400">چگونه ما میتوانیم به شما کمک
                            کنیم ؟</h1>
                        <p class="para-desc mx-auto text-muted" data-aos="fade-up" data-aos-duration="1800">کمپین خود را راه
                            اندازی کنید و از تخصص ما در زمینه طراحی و مدیریت صفحه بوت استرپ v5 html تبدیل محور بهره مند
                            شوید.</p>
                    </div>
                    <div class="subcribe-form mt-4 pt-2" data-aos="fade-up" data-aos-duration="2200">
                        <form>
                            <div class="mb-0">
                                <input type="text" id="help" name="name" class="form-control bg-white rounded-pill"
                                       required="" placeholder="مرکز کمک را جستجو کنید">
                                <button type="submit" class="btn btn-pills btn-primary">جستجو</button>
                            </div>
                        </form>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Communiaction Priority Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                    <span class="badge rounded-pill bg-success" data-aos="fade-up"
                          data-aos-duration="1000">ویژگی ها </span>
                        <h4 class="title my-4" data-aos="fade-up" data-aos-duration="1400">منابع ارتباطی</h4>
                        <p class="text-muted para-desc mx-auto mb-0" data-aos="fade-up" data-aos-duration="1800">شروع به کار
                            با <span class="text-primary fw-bold">لنـدریـک </span> که می تواند هر آنچه را که شما برای ایجاد
                            آگاهی ، ایجاد ترافیک ، اتصال به آن نیاز دارید فراهم کند.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card categories text-center rounded border-0" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/icon/chat.svg')}}" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="javascript:void(0)" class="text-dark">چت آنلاین </a></h5>
                            <p class="text-muted mb-0 mt-3">اگر توزیع حروف و کلمات تصادفی باشد ، خواننده حواس او را پرت نمی
                                کند از ساختن</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card categories text-center rounded border-0" data-aos="fade-up" data-aos-duration="1300">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/icon/customer-service.svg')}}"
                                 class="avatar avatar-small mb-3" alt="">
                            <h5><a href="javascript:void(0)" class="text-dark">سوشیال </a></h5>
                            <p class="text-muted mb-0 mt-3">اگر توزیع حروف و کلمات تصادفی باشد ، خواننده حواس او را پرت نمی
                                کند از ساختن</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card categories text-center rounded border-0" data-aos="fade-up" data-aos-duration="1600">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/icon/user.svg')}}" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="javascript:void(0)" class="text-dark">پورتال پشتیبانی</a></h5>
                            <p class="text-muted mb-0 mt-3">اگر توزیع حروف و کلمات تصادفی باشد ، خواننده حواس او را پرت نمی
                                کند از ساختن</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card categories text-center rounded border-0" data-aos="fade-up" data-aos-duration="1900">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/icon/call.svg')}}" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="javascript:void(0)" class="text-dark">تلفن پشتیبانی </a></h5>
                            <p class="text-muted mb-0 mt-3">اگر توزیع حروف و کلمات تصادفی باشد ، خواننده حواس او را پرت نمی
                                کند از ساختن</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card categories text-center rounded border-0" data-aos="fade-up" data-aos-duration="2200">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/icon/writing.svg')}}" class="avatar avatar-small mb-3"
                                 alt="">
                            <h5><a href="javascript:void(0)" class="text-dark">تیکت ها</a></h5>
                            <p class="text-muted mb-0 mt-3">اگر توزیع حروف و کلمات تصادفی باشد ، خواننده حواس او را پرت نمی
                                کند از ساختن</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card categories text-center rounded border-0" data-aos="fade-up" data-aos-duration="2500">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/icon/mail.svg')}}" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="javascript:void(0)" class="text-dark">نقل و قل</a></h5>
                            <p class="text-muted mb-0 mt-3">اگر توزیع حروف و کلمات تصادفی باشد ، خواننده حواس او را پرت نمی
                                کند از ساختن</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">نیاز به پشتیبانی CRM</h4>
                        <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1400">شروع به کار
                            با <span class="text-primary fw-bold">لنـدریـک </span> که می تواند هر آنچه را که شما برای ایجاد
                            آگاهی ، ایجاد ترافیک ، اتصال به آن نیاز دارید فراهم کند.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 mt-4 pt-2 text-center">
                    <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded" data-aos="fade-up"
                        data-aos-duration="1200" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link rounded active" id="community-tab" data-bs-toggle="pill"
                               href="#pills-community" role="tab" aria-controls="pills-community" aria-selected="false">
                                <div class="text-center py-2">
                                    <h6 class="mb-0">انجمن </h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item">
                            <a class="nav-link rounded" id="selfservice-tab" data-bs-toggle="pill" href="#pills-self"
                               role="tab" aria-controls="pills-self" aria-selected="false">
                                <div class="text-center py-2">
                                    <h6 class="mb-0">خدمات شخصی </h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item">
                            <a class="nav-link rounded" id="teamwork-tab" data-bs-toggle="pill" href="#pills-teamwork"
                               role="tab" aria-controls="pills-teamwork" aria-selected="false">
                                <div class="text-center py-2">
                                    <h6 class="mb-0">تیم کاری </h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->
                    </ul><!--end nav pills-->
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-4 pt-2">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-community" role="tabpanel"
                             aria-labelledby="community-tab">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="{{ URL::asset('main/images/saas/classic04.png')}}" data-aos="fade-up"
                                         data-aos-duration="1400"
                                         class="img-fluid mx-auto d-block shadow rounded" alt="">
                                </div><!--end col-->

                                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="section-title ms-md-4">
                                        <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">انجمن کاربر</h4>
                                        <p class="text-muted" data-aos="fade-up" data-aos-duration="1400">سیستم های CRM با
                                            جمع آوری وب سایت مشتری ، ایمیل ، تلفن ، داده های رسانه های اجتماعی و موارد دیگر
                                            ، در چندین منبع و کانال شروع می شوند. همچنین ممکن است به طور خودکار سایر اطلاعات
                                            ، مانند اخبار اخیر در مورد فعالیت شرکت را به خود اختصاص دهد و می تواند اطلاعات
                                            شخصی مانند تنظیمات شخصی مشتری در ارتباطات را ذخیره کند..</p>
                                        <div class="mt-4" data-aos="fade-up" data-aos-duration="1800">
                                            <a href="javascript:void(0)" class="text-primary p-1 px-2 shadow rounded me-3">ادامه
                                                مطلب <i class="uil uil-angle-left-b"></i></a>
                                            <a href="javascript:void(0)" class="text-warning p-1 px-2 shadow rounded">وبلاگ
                                                ها </a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end teb pane-->

                        <div class="tab-pane fade" id="pills-self" role="tabpanel" aria-labelledby="selfservice-tab">
                            <div class="row align-items-center">
                                <div class="col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="section-title me-md-4">
                                        <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">پورتال سلف
                                            سرویس</h4>
                                        <p class="text-muted" data-aos="fade-up" data-aos-duration="1400">سیستم های CRM با
                                            جمع آوری وب سایت مشتری ، ایمیل ، تلفن ، داده های رسانه های اجتماعی و موارد دیگر
                                            ، در چندین منبع و کانال شروع می شوند. همچنین ممکن است به طور خودکار سایر اطلاعات
                                            ، مانند اخبار اخیر در مورد فعالیت شرکت را به خود اختصاص دهد و می تواند اطلاعات
                                            شخصی مانند تنظیمات شخصی مشتری در ارتباطات را ذخیره کند..</p>
                                        <div class="mt-4" data-aos="fade-up" data-aos-duration="1800">
                                            <a href="javascript:void(0)" class="text-primary p-1 px-2 shadow rounded me-3">ادامه
                                                مطلب <i class="uil uil-angle-left-b"></i></a>
                                            <a href="javascript:void(0)" class="text-warning p-1 px-2 shadow rounded">وبلاگ
                                                ها </a>
                                        </div>
                                    </div>
                                </div>  <!--end col-->

                                <div class="col-md-6 order-1 order-md-2">
                                    <img src="{{ URL::asset('main/images/saas/classic02.png')}}" data-aos="fade-up"
                                         data-aos-duration="1400"
                                         class="img-fluid mx-auto d-block shadow rounded" alt="">
                                </div><!--end col-->
                            </div>    <!--end row-->
                        </div><!--end teb pane-->

                        <div class="tab-pane fade" id="pills-teamwork" role="tabpanel" aria-labelledby="teamwork-tab">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="{{ URL::asset('main/images/saas/classic03.png')}}" data-aos="fade-up"
                                         data-aos-duration="1400"
                                         class="img-fluid mx-auto d-block shadow rounded" alt="">
                                </div><!--end col-->

                                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <div class="section-title ms-md-4">
                                        <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">کار تیمی
                                            مناسب</h4>
                                        <p class="text-muted" data-aos="fade-up" data-aos-duration="1400">سیستم های CRM با
                                            جمع آوری وب سایت مشتری ، ایمیل ، تلفن ، داده های رسانه های اجتماعی و موارد دیگر
                                            ، در چندین منبع و کانال شروع می شوند. همچنین ممکن است به طور خودکار سایر اطلاعات
                                            ، مانند اخبار اخیر در مورد فعالیت شرکت را به خود اختصاص دهد و می تواند اطلاعات
                                            شخصی مانند تنظیمات شخصی مشتری در ارتباطات را ذخیره کند..</p>
                                        <div class="mt-4" data-aos="fade-up" data-aos-duration="1800">
                                            <a href="javascript:void(0)" class="text-primary p-1 px-2 shadow rounded me-3">ادامه
                                                مطلب <i class="uil uil-angle-left-b"></i></a>
                                            <a href="javascript:void(0)" class="text-warning p-1 px-2 shadow rounded">وبلاگ
                                                ها </a>
                                        </div>
                                    </div>
                                </div>  <!--end col-->
                            </div>    <!--end row-->
                        </div><!--end teb pane-->
                    </div><!--end tab content-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <!-- Testi Start -->
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">نظرات مشتریان </h4>
                        <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1400">شروع به کار
                            با <span class="text-primary fw-bold">لنـدریـک </span> که می تواند هر آنچه را که شما برای ایجاد
                            آگاهی ، ایجاد ترافیک ، اتصال به آن نیاز دارید فراهم کند.</p>
                    </div>
                </div>
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4 pt-2">
                    <div class="tiny-three-item">
                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2" data-aos="fade-up" data-aos-duration="1000">
                                <img src="{{ URL::asset('main/images/client/01.jpg')}}"
                                     class="avatar avatar-small client-image rounded shadow"
                                     alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" به نظر می رسد که تنها تکه هایی از متن اصلی در متن لورم
                                        اپیسوم که امروزه استفاده می شود باقی مانده است. "</p>
                                    <h6 class="text-primary">- توماس لوری <small class="text-muted">سئو</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2" data-aos="fade-up" data-aos-duration="1400">
                                <img src="{{ URL::asset('main/images/client/02.jpg')}}"
                                     class="avatar avatar-small client-image rounded shadow"
                                     alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star-half text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" به نظر می رسد که تنها تکه هایی از متن اصلی در متن لورم
                                        اپیسوم که امروزه استفاده می شود باقی مانده است. "</p>
                                    <h6 class="text-primary">- باباکارما <small class="text-muted">مترجم </small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2" data-aos="fade-up" data-aos-duration="1800">
                                <img src="{{ URL::asset('main/images/client/03.jpg')}}"
                                     class="avatar avatar-small client-image rounded shadow"
                                     alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" به نظر می رسد که تنها تکه هایی از متن اصلی در متن لورم
                                        اپیسوم که امروزه استفاده می شود باقی مانده است. "</p>
                                    <h6 class="text-primary">- کارلوس <small class="text-muted">P.A</small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2" data-aos="fade-up" data-aos-duration="2200">
                                <img src="{{ URL::asset('main/images/client/04.jpg')}}"
                                     class="avatar avatar-small client-image rounded shadow"
                                     alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" به نظر می رسد که تنها تکه هایی از متن اصلی در متن لورم
                                        اپیسوم که امروزه استفاده می شود باقی مانده است. "</p>
                                    <h6 class="text-primary">- چری استین <small class="text-muted">مدیر </small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2" data-aos="fade-up" data-aos-duration="2400">
                                <img src="{{ URL::asset('main/images/client/05.jpg')}}"
                                     class="avatar avatar-small client-image rounded shadow"
                                     alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" به نظر می رسد که تنها تکه هایی از متن اصلی در متن لورم
                                        اپیسوم که امروزه استفاده می شود باقی مانده است. "</p>
                                    <h6 class="text-primary">- دین لوس <small class="text-muted">توسعه دهنده </small></h6>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2" data-aos="fade-up" data-aos-duration="2800">
                                <img src="{{ URL::asset('main/images/client/06.jpg')}}"
                                     class="avatar avatar-small client-image rounded shadow"
                                     alt="">
                                <div class="flex-1 content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <p class="text-muted mt-2">" به نظر می رسد که تنها تکه هایی از متن اصلی در متن لورم
                                        اپیسوم که امروزه استفاده می شود باقی مانده است. "</p>
                                    <h6 class="text-primary">- جیل شبی <small class="text-muted">طراح </small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- Testi end -->

        <!-- Submit Ticket Start -->
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">ارسال تیکت</h4>
                        <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1400">شروع به کار
                            با <span class="text-primary fw-bold">لنـدریـک </span> که می تواند هر آنچه را که شما برای ایجاد
                            آگاهی ، ایجاد ترافیک ، اتصال به آن نیاز دارید فراهم کند.</p>
                    </div>
                </div>
            </div><!--end row-->

            <div class="row align-items-center">
                <div class="col-lg-6 col-md-5 col-12 mt-4 pt-2">
                    <img src="{{ URL::asset('main/images/customer/customer.svg')}}" data-aos="fade-up"
                         data-aos-duration="1400" class="img-fluid"
                         alt="">
                </div>

                <div class="col-lg-6 col-md-7 col-12 mt-4 pt-2">
                    <div class="card rounded shadow border-0 ms-lg-4" data-aos="fade-up" data-aos-duration="1400">
                        <div class="card-body p-4">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">نام شما: </label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input name="name" id="name" type="text" class="form-control ps-5"
                                                       placeholder="نام اول :">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">ایمیل شما :</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="email" id="email" type="email" class="form-control ps-5"
                                                       placeholder="ایمیل شما :">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">دلایل / دسته ها :</label>
                                            <select class="form-control custom-select" id="Sortbylist-Shop">
                                                <option>دسته بندی ها</option>
                                                <option>سوالات عمومی</option>
                                                <option>اشکالات</option>
                                                <option>از راه دور</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">موضوع : </label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="book" class="fea icon-sm icons"></i>
                                                <input name="subject" id="subject" class="form-control ps-5"
                                                       placeholder="موضوع شما :">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">آدرس : </label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="globe" class="fea icon-sm icons"></i>
                                                <input name="url" id="url" type="url" class="form-control ps-5"
                                                       placeholder="آدرس: ">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">توضیحات : </label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea name="comments" id="comments" rows="4" class="form-control ps-5"
                                                          placeholder="مشکل خود را شرح دهید :"></textarea>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">تایید میکنم <a
                                                        href="#" class="text-primary">قوانین سایت لنـدریـک را و تیکت را فعال
                                                        میکنم</a></label>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->

                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" id="submit" name="send" class="btn btn-primary" value="ارسال ">
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->
        <!-- Submit Ticket End -->
    </section><!--end section-->
    <!-- Communiaction Priority End -->
@endsection
@section('custom_js')
@endsection
