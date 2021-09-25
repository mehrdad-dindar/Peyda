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
                        <form action="{{ route('validation') }}" method="post">
                            @csrf
                            <div class="mb-0">
                                <input type="text" id="validation_id" name="validation_id" class="form-control bg-white rounded-pill" required placeholder="استعلام فراگارانتی پیداسرویس">
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
        <div class="container ">
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
                                            <a href="#" class="text-primary p-1 px-2 shadow rounded me-3">ادامه
                                                مطلب <i class="uil uil-angle-left-b"></i></a>
                                            <a href="#" class="text-warning p-1 px-2 shadow rounded">وبلاگ
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
                                            <a href="#" class="text-primary p-1 px-2 shadow rounded me-3">ادامه
                                                مطلب <i class="uil uil-angle-left-b"></i></a>
                                            <a href="#" class="text-warning p-1 px-2 shadow rounded">وبلاگ
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
                                            <a href="#" class="text-primary p-1 px-2 shadow rounded me-3">ادامه
                                                مطلب <i class="uil uil-angle-left-b"></i></a>
                                            <a href="#" class="text-warning p-1 px-2 shadow rounded">وبلاگ
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
    </section>
    <section class="section bg-light">
        <div class="container mt-100 mt-60">
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
                            <h5><a href="#" class="text-dark">چت آنلاین </a></h5>
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
                            <h5><a href="#" class="text-dark">سوشیال </a></h5>
                            <p class="text-muted mb-0 mt-3">اگر توزیع حروف و کلمات تصادفی باشد ، خواننده حواس او را پرت نمی
                                کند از ساختن</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card categories text-center rounded border-0" data-aos="fade-up" data-aos-duration="1600">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/icon/user.svg')}}" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="#" class="text-dark">پورتال پشتیبانی</a></h5>
                            <p class="text-muted mb-0 mt-3">اگر توزیع حروف و کلمات تصادفی باشد ، خواننده حواس او را پرت نمی
                                کند از ساختن</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card categories text-center rounded border-0" data-aos="fade-up" data-aos-duration="1900">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/icon/call.svg')}}" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="#" class="text-dark">تلفن پشتیبانی </a></h5>
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
                            <h5><a href="#" class="text-dark">تیکت ها</a></h5>
                            <p class="text-muted mb-0 mt-3">اگر توزیع حروف و کلمات تصادفی باشد ، خواننده حواس او را پرت نمی
                                کند از ساختن</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card categories text-center rounded border-0" data-aos="fade-up" data-aos-duration="2500">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/icon/mail.svg')}}" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="#" class="text-dark">نقل و قل</a></h5>
                            <p class="text-muted mb-0 mt-3">اگر توزیع حروف و کلمات تصادفی باشد ، خواننده حواس او را پرت نمی
                                کند از ساختن</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
        <!--start shop section-->
    <section class="section">
        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-6">
                    <h5 class="mb-0">محصولات اخیر </h5>
                </div><!--end col-->
                <div class="col-6 text-end">
                    <a href="#" class="text-warning p-1 px-2 shadow rounded me-3">نمایش همه<i class="uil uil-angle-left-b"></i></a>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative">
                        <ul class="label list-unstyled mb-0">
                            <li><a href="#" class="badge badge-link rounded-pill bg-primary">جدید </a></li>
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="shop-product-detail.html"><img src="{{ URL::asset('main/images/shop/product/s13.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="shop-product-detail.html" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-13.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                                <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="shop-product-detail.html" class="text-dark product-name h6">صندلی استراحت </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1 d-flex flex-column">16000 تومان<del class="text-danger ms-2">21000 تومان</del> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative">
                        <ul class="label list-unstyled mb-0">
                            <li><a href="#" class="badge badge-link rounded-pill bg-primary">جدید </a></li>
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="shop-product-detail.html"><img src="{{ URL::asset('main/images/shop/product/s14.jpg')}}" class="img-fluid" alt=""></a>
                            <div class="overlay-work">
                                <div class="py-2 bg-soft-dark rounded-bottom out-stock">
                                    <h6 class="mb-0 text-center">تمام شده</h6>
                                </div>
                            </div>
                            <ul class="list-unstyled shop-icons">
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="shop-product-detail.html" class="text-dark product-name h6">کفش پاشنه بلند</a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1 d-flex flex-column">21000 تومان <del class="text-danger ms-2">25000 تومان</del> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative">
                        <ul class="label list-unstyled mb-0">
                            <li><a href="#" class="badge badge-link rounded-pill bg-primary">جدید </a></li>
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="shop-product-detail.html"><img src="{{ URL::asset('main/images/shop/product/s15.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="shop-product-detail.html" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-15.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                                <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="shop-product-detail.html" class="text-dark product-name h6">تی شرت نایس </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1 d-flex flex-column">50000 تومان <span class="text-success ms-1">30% تخفیف</span> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative">
                        <ul class="label list-unstyled mb-0">
                            <li><a href="#" class="badge badge-link rounded-pill bg-primary">جدید </a></li>
                            <li><a href="#" class="badge badge-link rounded-pill bg-success">ویژه ها </a></li>
                            <li><a href="#" class="badge badge-link rounded-pill bg-warning">ویژه </a></li>
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="shop-product-detail.html"><img src="{{ URL::asset('main/images/shop/product/s16.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="shop-product-detail.html" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-16.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                                <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="shop-product-detail.html" class="text-dark product-name h6">ساعت</a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1 d-flex flex-column">18000 تومان <del class="text-danger ms-2">22000 تومان</del> </h6>
                                <ul class="list-unstyled text-warning mb-0">
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </section>
        <!--end shop section-->


    <section class="section bg-light">
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

    </section><!--end section-->
    <!-- Communiaction Priority End -->
    <!--start blog section-->
    <section class="section">
        <div class="container">
            <div class="row align-items-center mb-4 pb-2">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-start">
                        <h6 class="text-primary">وبلاگ </h6>
                        <h4 class="title mb-4 mb-lg-0">آخرین اخبار سایت <br> و بروز رسانی ها را دنبال کنید</h4>
                    </div>
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-start">
                        <p class="text-muted mb-0 mx-auto para-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus, aliquam amet atque autem consequuntur cumque cupiditate, dolorum ea iste laborum magnam nemo quae quas quibusdam quo sint voluptatem voluptatum.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{ URL::asset('main/images/blog/01.jpg')}}" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="#" class="card-title title text-dark">برنامه های خود را به روش خود طراحی کنید</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="#" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="#" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="#" class="text-muted readmore">ادامه مطلب  <i class="uil uil-angle-left-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="uil uil-user"></i> کالوین لورس</small>
                            <small class="text-light date"><i class="uil uil-calendar-alt"></i> اردیبهشت 1400</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 tiny-slide mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{ URL::asset('main/images/blog/02.jpg')}}" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="#" class="card-title title text-dark">برنامه ها چگونه دنیای اطلاعات را تغییر می دهند</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="#" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="#" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="#" class="text-muted readmore">ادامه مطلب  <i class="uil uil-angle-left-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="uil uil-user"></i> کالوین لورس</small>
                            <small class="text-light date"><i class="uil uil-calendar-alt"></i> اردیبهشت 1400</small>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 tiny-slide mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{ URL::asset('main/images/blog/03.jpg')}}" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="#" class="card-title title text-dark">هوشمندترین برنامه ها برای تجارت و کار </a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="#" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="#" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                                <a href="#" class="text-muted readmore">ادامه مطلب  <i class="uil uil-angle-left-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="uil uil-user"></i> کالوین لورس</small>
                            <small class="text-light date"><i class="uil uil-calendar-alt"></i> اردیبهشت 1400</small>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>
    <!--end blog section-->
@endsection
@section('custom_js')
@endsection
