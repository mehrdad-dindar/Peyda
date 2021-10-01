@extends('layouts.master_front')
@section('content')
    <!-- Hero Start -->
    <section class="home-slider position-relative">
        <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <div class="bg-home slider-rtl-2 d-flex align-items-center" style="background:url('{{ URL::asset('front/img/shop/slider1-pro-one.jpg')}}') center center;">
                        <div class="container">
                            <div class="row align-items-center mt-5">
                                <div class="col-lg-7 col-md-7">
                                    <div class="title-heading mt-4">
                                        <h1 class="display-4 title-white fw-bold mb-3 text-shadow-title">لوازم جانبی جدید <br> در پیدا سرویس ماندگار </h1>
                                        <p class="para-desc text-light para-dark">فروشگاه اینترنتی پیدا سرویس ماندگار ارائه دهنده بروزترین و با کیفیت ترین لوازم جانبی گوشی تلفن همراه!</p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-warning">اکنون بخرید </a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <div class="bg-home slider-rtl-1 d-flex align-items-center" style="background:url('{{ URL::asset('front/img/shop/slider2-pro-one.jpg')}}') center center;">
                        <div class="container">
                            <div class="row align-items-center mt-5">
                                <div class="col-lg-7 col-md-7">
                                    <div class="title-heading mt-4">
                                        <h1 class="display-4 title-white fw-bold mb-3 text-shadow-title">محصولات <br> ProOne </h1>
                                        <p class="para-desc text-light para-dark">فروشگاه اینترنتی پیدا سرویس ماندگار، مجری انحصاری فروش محصولات پرووان در ایران !</p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-warning">اکنون بخرید </a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">قبلی </span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">بعدی </span>
            </a>
        </div>
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Features Start -->
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-4 mt-4 pt-2">
                <div class="card shop-features border-0 rounded overflow-hidden">
                    <img src="{{ URL::asset('front/img/shop/power-bnk.jpg')}}" class="img-fluid" alt="">
                    <div class="category-title">
                        <h4 class="text-shadow-title">هندزفری،  <br> پاوربانک و شارژر</h4>
                        <a href="#" class="btn btn-sm btn-warning mt-2">اکنون بخرید </a>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-md-4 mt-4 pt-2">
                <div class="card shop-features border-0 rounded overflow-hidden">
                    <img src="{{ URL::asset('front/img/shop/smart-gadjets.jpg')}}" class="img-fluid" alt="">
                    <div class="category-title">
                        <h4 class="text-shadow-title">گجت‌های هوشمند <br> و لوازم جانبی</h4>
                        <a href="#" class="btn btn-sm btn-warning mt-2">اکنون بخرید </a>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-md-4 mt-4 pt-2">
                <div class="card shop-features border-0 rounded overflow-hidden">
                    <img src="{{ URL::asset('front/img/shop/accessory.jpg')}}" class="img-fluid" alt="">
                    <div class="category-title">
                        <h4 class="text-shadow-title">اکسسوری <br> و لوازم جانبی!</h4>
                        <a href="#" class="btn btn-sm btn-warning mt-2">اکنون بخرید </a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- Features End -->

    <!-- Start -->
    <section class="section">
        <!-- Start پربازدیدترین محصولات -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-0">پربازدیدترین محصولات</h5>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative">
                        <ul class="label list-unstyled mb-0">
                            <li><a href="#" class="badge badge-link rounded-pill bg-primary">جدید </a></li>
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="{{-- TODO --}}"><img src="{{ URL::asset('front/img/3920-PHF.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="{{-- TODO --}}" class="overlay-work">
                                <img src="{{ URL::asset('front/img/pack-3920-PHF.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                                <li class="mt-2"><a href="{{-- TODO --}}" class="btn btn-icon btn-pills btn-soft-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="{{-- TODO --}}" class="text-dark product-name h6">هندزفری پرووان مدل PHF3920 </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1 d-flex flex-column">( به زودی ){{--<del class="text-danger ms-2">21000 تومان</del>--}} </h6>
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
                            <a href="{{-- TODO --}}"><img src="{{ URL::asset('front/img/proOne-R100.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="{{-- TODO --}}" class="overlay-work">
                                <img src="{{ URL::asset('front/img/pack-proOne-R100.jpg')}}" class="img-fluid" alt="">
                            </a>{{--
                            <div class="overlay-work">
                                <div class="py-2 bg-soft-dark rounded-bottom out-stock">
                                    <h6 class="mb-0 text-center">تمام شده</h6>
                                </div>
                            </div>--}}
                            <ul class="list-unstyled shop-icons">
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="{{-- TODO --}}" class="text-dark product-name h6">ایرپاد پرووان مدل R100</a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1 d-flex flex-column">( به زودی ) {{--<del class="text-danger ms-2">25000 تومان</del>--}} </h6>
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
                            <a href="{{-- TODO --}}"><img src="{{ URL::asset('front/img/PHB32209.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="{{-- TODO --}}" class="overlay-work">
                                <img src="{{ URL::asset('front/img/pack-PHB32209.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                                <li class="mt-2"><a href="{{-- TODO --}}" class="btn btn-icon btn-pills btn-soft-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="{{-- TODO --}}" class="text-dark product-name h6">ایرپاد پرووان مدل PHB3220 </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1 d-flex flex-column">( به زودی ){{--<span class="text-success ms-1">30% تخفیف</span> --}}</h6>
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
                            {{--<li><a href="#" class="badge badge-link rounded-pill bg-success">ویژه ها </a></li>
                            <li><a href="#" class="badge badge-link rounded-pill bg-warning">ویژه </a></li>--}}
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="{{-- TODO --}}"><img src="{{ URL::asset('front/img/R100W.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="{{-- TODO --}}" class="overlay-work">
                                <img src="{{ URL::asset('front/img/shop/R100W.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                                <li class="mt-2"><a href="{{-- TODO --}}" class="btn btn-icon btn-pills btn-soft-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="{{-- TODO --}}" class="text-dark product-name h6">ایرپاد پرووان مدل R100W</a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1 d-flex flex-column">( به زودی ){{--<del class="text-danger ms-2">22000 تومان</del> --}}</h6>
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
        </div><!--end container-->
        <!-- End Most Viewed Product -->

        {{--<!-- Start Categories -->
        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-0"> دسته بندیهای برتر</h5>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/shop/categories/fashion.jpg')}}" class="avatar avatar-small rounded-circle shadow-md" alt="">
                            <div class="content mt-3">
                                <h6 class="mb-0"><a href="#" class="title text-dark">مدل </a></h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/shop/categories/sports.jpg')}}" class="avatar avatar-small rounded-circle shadow-md" alt="">
                            <div class="content mt-3">
                                <h6 class="mb-0"><a href="#" class="title text-dark">ورزشی </a></h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/shop/categories/music.jpg')}}" class="avatar avatar-small rounded-circle shadow-md" alt="">
                            <div class="content mt-3">
                                <h6 class="mb-0"><a href="#" class="title text-dark">موزیک </a></h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/shop/categories/furniture.jpg')}}" class="avatar avatar-small rounded-circle shadow-md" alt="">
                            <div class="content mt-3">
                                <h6 class="mb-0"><a href="#" class="title text-dark">مبلمان </a></h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/shop/categories/electronics.jpg')}}" class="avatar avatar-small rounded-circle shadow-md" alt="">
                            <div class="content mt-3">
                                <h6 class="mb-0"><a href="#" class="title text-dark">الکترونیکی </a></h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                    <div class="card explore-feature border-0 rounded text-center bg-white">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/shop/categories/mobile.jpg')}}" class="avatar avatar-small rounded-circle shadow-md" alt="">
                            <div class="content mt-3">
                                <h6 class="mb-0"><a href="#" class="title text-dark">موبایل</a></h6>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- Start Categories -->--}}

        <!-- Start Popular -->
        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-0">محصولات محبوب </h5>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative">
                        <ul class="label list-unstyled mb-0">
                            <li><a href="#" class="badge badge-link rounded-pill bg-primary">جدید </a></li>
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="{{-- TODO --}}"><img src="{{ URL::asset('front/img/3920-PHF.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="{{-- TODO --}}" class="overlay-work">
                                <img src="{{ URL::asset('front/img/pack-3920-PHF.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                                <li class="mt-2"><a href="{{-- TODO --}}" class="btn btn-icon btn-pills btn-soft-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="{{-- TODO --}}" class="text-dark product-name h6">هندزفری پرووان مدل PHF3920 </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1 d-flex flex-column">( به زودی ){{--<del class="text-danger ms-2">21000 تومان</del>--}} </h6>
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
                            <a href="{{-- TODO --}}"><img src="{{ URL::asset('front/img/proOne-R100.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="{{-- TODO --}}" class="overlay-work">
                                <img src="{{ URL::asset('front/img/pack-proOne-R100.jpg')}}" class="img-fluid" alt="">
                            </a>{{--
                            <div class="overlay-work">
                                <div class="py-2 bg-soft-dark rounded-bottom out-stock">
                                    <h6 class="mb-0 text-center">تمام شده</h6>
                                </div>
                            </div>--}}
                            <ul class="list-unstyled shop-icons">
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="{{-- TODO --}}" class="text-dark product-name h6">ایرپاد پرووان مدل R100</a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1 d-flex flex-column">( به زودی ) {{--<del class="text-danger ms-2">25000 تومان</del>--}} </h6>
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
                            <a href="{{-- TODO --}}"><img src="{{ URL::asset('front/img/PHB32209.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="{{-- TODO --}}" class="overlay-work">
                                <img src="{{ URL::asset('front/img/pack-PHB32209.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                                <li class="mt-2"><a href="{{-- TODO --}}" class="btn btn-icon btn-pills btn-soft-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="{{-- TODO --}}" class="text-dark product-name h6">ایرپاد پرووان مدل PHB3220 </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1 d-flex flex-column">( به زودی ){{--<span class="text-success ms-1">30% تخفیف</span> --}}</h6>
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
                            {{--<li><a href="#" class="badge badge-link rounded-pill bg-success">ویژه ها </a></li>
                            <li><a href="#" class="badge badge-link rounded-pill bg-warning">ویژه </a></li>--}}
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="{{-- TODO --}}"><img src="{{ URL::asset('front/img/R100W.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="{{-- TODO --}}" class="overlay-work">
                                <img src="{{ URL::asset('front/img/shop/R100W.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                                <li class="mt-2"><a href="{{-- TODO --}}" class="btn btn-icon btn-pills btn-soft-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="{{-- TODO --}}" class="text-dark product-name h6">ایرپاد پرووان مدل R100W</a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1 d-flex flex-column">( به زودی ){{--<del class="text-danger ms-2">22000 تومان</del> --}}</h6>
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
        </div><!--end container-->
        <!-- End Popular -->

        <!-- Start CTA -->
        <div class="container-fluid mt-100 mt-60">
            <div class="rounded py-5" style="background: url('{{ URL::asset('front/img/shop/slider3.jpg')}}') fixed;">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h2 class="fw-bold mb-4 text-shadow-title">فروش ویژه</h2>
                                <p class="para-desc para-white text-light mb-0">تخفیفات هیجان انگیز فروشگاه اینترنتی پیدا سرویس ماندگار ویژه محصولات پرووان</p>
                                <div class="mt-4">
                                    <a href="#" class="btn btn-warning">محصولات دارای تخفیف !</a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </div><!--end container-->
        <!-- End CTA -->

        <!-- Start Recent -->
        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-0">محصولات اخیر </h5>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                    <div class="card shop-list border-0 position-relative">
                        <ul class="label list-unstyled mb-0">
                            <li><a href="#" class="badge badge-link rounded-pill bg-primary">جدید </a></li>
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="{{-- TODO --}}"><img src="{{ URL::asset('front/img/3920-PHF.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="{{-- TODO --}}" class="overlay-work">
                                <img src="{{ URL::asset('front/img/pack-3920-PHF.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                                <li class="mt-2"><a href="{{-- TODO --}}" class="btn btn-icon btn-pills btn-soft-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="{{-- TODO --}}" class="text-dark product-name h6">هندزفری پرووان مدل PHF3920 </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1 d-flex flex-column">( به زودی ){{--<del class="text-danger ms-2">21000 تومان</del>--}} </h6>
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
                            <a href="{{-- TODO --}}"><img src="{{ URL::asset('front/img/proOne-R100.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="{{-- TODO --}}" class="overlay-work">
                                <img src="{{ URL::asset('front/img/pack-proOne-R100.jpg')}}" class="img-fluid" alt="">
                            </a>{{--
                            <div class="overlay-work">
                                <div class="py-2 bg-soft-dark rounded-bottom out-stock">
                                    <h6 class="mb-0 text-center">تمام شده</h6>
                                </div>
                            </div>--}}
                            <ul class="list-unstyled shop-icons">
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="{{-- TODO --}}" class="text-dark product-name h6">ایرپاد پرووان مدل R100</a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1 d-flex flex-column">( به زودی ) {{--<del class="text-danger ms-2">25000 تومان</del>--}} </h6>
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
                            <a href="{{-- TODO --}}"><img src="{{ URL::asset('front/img/PHB32209.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="{{-- TODO --}}" class="overlay-work">
                                <img src="{{ URL::asset('front/img/pack-PHB32209.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                                <li class="mt-2"><a href="{{-- TODO --}}" class="btn btn-icon btn-pills btn-soft-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="{{-- TODO --}}" class="text-dark product-name h6">ایرپاد پرووان مدل PHB3220 </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1 d-flex flex-column">( به زودی ){{--<span class="text-success ms-1">30% تخفیف</span> --}}</h6>
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
                            {{--<li><a href="#" class="badge badge-link rounded-pill bg-success">ویژه ها </a></li>
                            <li><a href="#" class="badge badge-link rounded-pill bg-warning">ویژه </a></li>--}}
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="{{-- TODO --}}"><img src="{{ URL::asset('front/img/R100W.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="{{-- TODO --}}" class="overlay-work">
                                <img src="{{ URL::asset('front/img/shop/R100W.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icons"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icons"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                                <li class="mt-2"><a href="{{-- TODO --}}" class="btn btn-icon btn-pills btn-soft-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart icons"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="{{-- TODO --}}" class="text-dark product-name h6">ایرپاد پرووان مدل R100W</a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1 d-flex flex-column">( به زودی ){{--<del class="text-danger ms-2">22000 تومان</del> --}}</h6>
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
        </div><!--end container-->
        <!-- End Recent -->
    </section><!--end section-->
    <!-- End -->
@endsection
