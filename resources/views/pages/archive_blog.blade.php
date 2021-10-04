@extends('layouts.master_front')
@section('title','آرشیو وبلاگ')
@section('custom_css')
@endsection
@section('content')
    <!-- Hero Start -->
    <section class="bg-half d-table w-100" style="background: url('{{ URL::asset('front/img/shop/blog.jpg')}}') center center; background-size: cover">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title text-white"> اخبار و مقالات </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="{{ route('index') }}">پیدا سرویس </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">وبلاگ</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>  <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Blog STart -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 tiny-slide mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{ URL::asset('front/img/shop/iphone13/shakhes.jpg')}}" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="{{route('single_03')}}" class="card-title title text-dark">دیدگاه سایت‌های معتبر حوزه فناوری در رابطه با آیفون ۱۳</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="#" class="text-muted like"><i class="uil uil-heart me-1"></i>10</a></li>
                                    <li class="list-inline-item"><a href="#" class="text-muted comments"><i class="uil uil-comment me-1"></i>0</a></li>
                                </ul>
                                <a href="{{route('single_03')}}" class="text-muted readmore stretched-link">ادامه مطلب  <i class="uil uil-angle-left-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="uil uil-user"></i> نویسنده پیدا سرویس</small>
                            <small class="text-light date"><i class="uil uil-calendar-alt"></i> مهر 1400</small>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-4 col-md-6 tiny-slide mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{ URL::asset('front/img/shop/0102/small_mobile/shakhes.jpg')}}" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="{{route('single_02')}}" class="card-title title text-dark">معرفی گوشی های کوچک لمسی بازار ایران + قیمت</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="#" class="text-muted like"><i class="uil uil-heart me-1"></i>38</a></li>
                                    <li class="list-inline-item"><a href="#" class="text-muted comments"><i class="uil uil-comment me-1"></i>0</a></li>
                                </ul>
                                <a href="{{route('single_02')}}" class="text-muted readmore stretched-link">ادامه مطلب  <i class="uil uil-angle-left-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="uil uil-user"></i> نویسنده پیدا سرویس</small>
                            <small class="text-light date"><i class="uil uil-calendar-alt"></i> مهر 1400</small>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-4 col-md-6 tiny-slide mt-4 pt-2">
                    <div class="card blog rounded border-0 shadow">
                        <div class="position-relative">
                            <img src="{{ URL::asset('front/img/shop/0102/shakhes-02.jpg')}}" class="card-img-top rounded-top" alt="...">
                            <div class="overlay rounded-top bg-dark"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="{{route('single')}}" class="card-title title text-dark">اینترنت ملی چیست؟ نمونه‌هایی در کوبا، کره شمالی، روسیه و چین </a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="#" class="text-muted like"><i class="uil uil-heart me-1"></i>85</a></li>
                                    <li class="list-inline-item"><a href="#" class="text-muted comments"><i class="uil uil-comment me-1"></i>0</a></li>
                                </ul>
                                <a href="{{route('single')}}" class="text-muted readmore stretched-link">ادامه مطلب  <i class="uil uil-angle-left-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="text-light user d-block"><i class="uil uil-user"></i> نویسنده پیدا سرویس</small>
                            <small class="text-light date"><i class="uil uil-calendar-alt"></i> مهر 1400</small>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Blog End -->
@endsection
@section('custom_js')

@endsection

