@extends('layouts.master_front')
@section('content')
    <!-- Hero Start -->
    <section class="home-slider position-relative">
        <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="bg-home slider-rtl-2 d-flex align-items-center" style="background:url('{{ URL::asset('main/images/shop/bg2.jpg')}}') center center;">
                        <div class="container">
                            <div class="row align-items-center mt-5">
                                <div class="col-lg-7 col-md-7">
                                    <div class="title-heading mt-4">
                                        <h1 class="display-4 title-white fw-bold mb-3">لوازم جانبی جدید <br> با مجموعه جدید ما </h1>
                                        <p class="para-desc text-muted para-dark">کمپین خود را راه اندازی کنید و از تخصص ما در زمینه طراحی و مدیریت صفحه بوت استرپ v5 html تبدیل محور بهره مند شوید.</p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-soft-primary">اکنون بخرید </a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="bg-home slider-rtl-1 d-flex align-items-center" style="background:url('{{ URL::asset('main/images/shop/bg1.jpg')}}') center center;">
                        <div class="container">
                            <div class="row align-items-center mt-5">
                                <div class="col-lg-7 col-md-7">
                                    <div class="title-heading mt-4">
                                        <h1 class="display-4 title-white fw-bold mb-3">هدفون <br> شیائومی </h1>
                                        <p class="para-desc text-muted para-dark">کمپین خود را راه اندازی کنید و از تخصص ما در زمینه طراحی و مدیریت صفحه بوت استرپ v5 html تبدیل محور بهره مند شوید.</p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-soft-primary">اکنون بخرید </a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="bg-home slider-rtl-3 d-flex align-items-center" style="background:url('{{ URL::asset('main/images/shop/bg3.jpg')}}') center center;">
                        <div class="container">
                            <div class="row align-items-center mt-5">
                                <div class="col-lg-7 col-md-7">
                                    <div class="title-heading mt-4">
                                        <h1 class="display-4 title-white fw-bold mb-3">مبلمان مدرن، <br> و جدید</h1>
                                        <p class="para-desc text-muted para-dark">کمپین خود را راه اندازی کنید و از تخصص ما در زمینه طراحی و مدیریت صفحه بوت استرپ v5 html تبدیل محور بهره مند شوید.</p>
                                        <div class="mt-4">
                                            <a href="#" class="btn btn-soft-primary">اکنون بخرید </a>
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
                    <img src="{{ URL::asset('main/images/shop/fea1.jpg')}}" class="img-fluid" alt="">
                    <div class="category-title">
                        <h4>تابستان <br> با تخفیف جذابه!</h4>
                        <a href="#" class="btn btn-sm btn-soft-primary mt-2">اکنون بخرید </a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 mt-4 pt-2">
                <div class="card shop-features border-0 rounded overflow-hidden">
                    <img src="{{ URL::asset('main/images/shop/fea2.jpg')}}" class="img-fluid" alt="">
                    <div class="category-title">
                        <h4>تابستان <br> با تخفیف جذابه!</h4>
                        <a href="#" class="btn btn-sm btn-soft-primary mt-2">اکنون بخرید </a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-md-4 mt-4 pt-2">
                <div class="card shop-features border-0 rounded overflow-hidden">
                    <img src="{{ URL::asset('main/images/shop/fea3.jpg')}}" class="img-fluid" alt="">
                    <div class="category-title">
                        <h4>تابستان <br> با تخفیف جذابه!</h4>
                        <a href="#" class="btn btn-sm btn-soft-primary mt-2">اکنون بخرید </a>
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
                            <li><a href="#" class="badge badge-link rounded-pill bg-success">ویژه ها </a></li>
                            <li><a href="#" class="badge badge-link rounded-pill bg-warning">ویژه </a></li>
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="#"><img src="{{ URL::asset('main/images/shop/product/s1.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="#" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-1.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                <li class="mt-2"><a href="{{ route('shop_cart') }}" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="#" class="text-dark product-name h6">تی شرت بردان  </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1">16000 تومان<del class="text-danger ms-2">21000 تومان</del> </h6>
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
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="#"><img src="{{ URL::asset('main/images/shop/product/s2.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="#" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-2.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                <li class="mt-2"><a href="{{ route('shop_cart') }}" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="#" class="text-dark product-name h6">کیسه خرید </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1">21000 تومان <del class="text-danger ms-2">25000 تومان</del> </h6>
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
                            <li><a href="#" class="badge badge-link rounded-pill bg-warning">ویژه </a></li>
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="#"><img src="{{ URL::asset('main/images/shop/product/s3.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="#" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-3.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                <li class="mt-2"><a href="{{ route('shop_cart') }}" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="#" class="text-dark product-name h6">ساعت الگنت </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1">50000 تومان <span class="text-success ms-1">30% تخفیف</span> </h6>
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
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="#"><img src="{{ URL::asset('main/images/shop/product/s4.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="#" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-4.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                <li class="mt-2"><a href="{{ route('shop_cart') }}" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="#" class="text-dark product-name h6">کفش های گاه به گاه </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1">18000 تومان <del class="text-danger ms-2">22000 تومان</del> </h6>
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
                            <li><a href="#" class="badge badge-link rounded-pill bg-warning">ویژه </a></li>
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="#"><img src="{{ URL::asset('main/images/shop/product/s5.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="#" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-5.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                <li class="mt-2"><a href="{{ route('shop_cart') }}" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="#" class="text-dark product-name h6">هدفون </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1">30000 تومان</h6>
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
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="#"><img src="{{ URL::asset('main/images/shop/product/s6.jpg')}}" class="img-fluid" alt=""></a>
                            <div class="overlay-work">
                                <div class="py-2 bg-soft-dark rounded-bottom out-stock">
                                    <h6 class="mb-0 text-center">تمام شده</h6>
                                </div>
                            </div>
                            <ul class="list-unstyled shop-icons">
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="#" class="text-dark product-name h6">لیوان زیبا</a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1">4500 تومان <del class="text-danger ms-2">6500 تومان</del> </h6>
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
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="#"><img src="{{ URL::asset('main/images/shop/product/s7.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="#" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-7.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                <li class="mt-2"><a href="{{ route('shop_cart') }}" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="#" class="text-dark product-name h6">هدفون سونی</a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1">9000 تومان <span class="text-success ms-2">20% تخفیف</span> </h6>
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
                            <li><a href="#" class="badge badge-link rounded-pill bg-success">ویژه ها </a></li>
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="#"><img src="{{ URL::asset('main/images/shop/product/s8.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="#" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-8.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                <li class="mt-2"><a href="{{ route('shop_cart') }}" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="#" class="text-dark product-name h6">چهارپایه چوبی</a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1">22000 تومان <del class="text-danger ms-2">25000 تومان</del> </h6>
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

        <!-- Start Categories -->
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
        <!-- Start Categories -->

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
                            <li><a href="#" class="badge badge-link rounded-pill bg-info">محبوب </a></li>
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="#"><img src="{{ URL::asset('main/images/shop/product/s9.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="#" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-9.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                <li class="mt-2"><a href="{{ route('shop_cart') }}" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="#" class="text-dark product-name h6">لیوان قهوه</a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1">16000 تومان<del class="text-danger ms-2">21000 تومان</del> </h6>
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
                            <li><a href="#" class="badge badge-link rounded-pill bg-info">محبوب </a></li>
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="#"><img src="{{ URL::asset('main/images/shop/product/s10.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="#" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-10.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                <li class="mt-2"><a href="{{ route('shop_cart') }}" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="#" class="text-dark product-name h6">عینک آفتابی </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1">21000 تومان <del class="text-danger ms-2">25000 تومان</del> </h6>
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
                            <li><a href="#" class="badge badge-link rounded-pill bg-info">محبوب </a></li>
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="#"><img src="{{ URL::asset('main/images/shop/product/s11.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="#" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-11.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                <li class="mt-2"><a href="{{ route('shop_cart') }}" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="#" class="text-dark product-name h6">کفش لوفر</a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1">50000 تومان <span class="text-success ms-1">30% تخفیف</span> </h6>
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
                            <li><a href="#" class="badge badge-link rounded-pill bg-info">محبوب </a></li>
                        </ul>
                        <div class="shop-image position-relative overflow-hidden rounded shadow">
                            <a href="#"><img src="{{ URL::asset('main/images/shop/product/s12.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="#" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-12.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                <li class="mt-2"><a href="{{ route('shop_cart') }}" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="#" class="text-dark product-name h6">تی شرت نایس </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1">18000 تومان <del class="text-danger ms-2">22000 تومان</del> </h6>
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
            <div class="rounded py-5" style="background: url('images/shop/cta.jpg') fixed;">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h2 class="fw-bold mb-4">ترخیص پایان فصل <br> فروش تا 30٪</h2>
                                <p class="para-desc para-white text-muted mb-0">کمپین خود را راه اندازی کنید و از تخصص ما در زمینه طراحی و مدیریت صفحه بوت استرپ v5 html تبدیل محور بهره مند شوید.</p>
                                <div class="mt-4">
                                    <a href="#" class="btn btn-primary">اکنون بخرید </a>
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
                            <a href="#"><img src="{{ URL::asset('main/images/shop/product/s13.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="#" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-13.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                <li class="mt-2"><a href="{{ route('shop_cart') }}" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="#" class="text-dark product-name h6">صندلی استراحت </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1">16000 تومان<del class="text-danger ms-2">21000 تومان</del> </h6>
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
                            <a href="#"><img src="{{ URL::asset('main/images/shop/product/s14.jpg')}}" class="img-fluid" alt=""></a>
                            <div class="overlay-work">
                                <div class="py-2 bg-soft-dark rounded-bottom out-stock">
                                    <h6 class="mb-0 text-center">تمام شده</h6>
                                </div>
                            </div>
                            <ul class="list-unstyled shop-icons">
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="#" class="text-dark product-name h6">کفش پاشنه بلند</a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1">21000 تومان <del class="text-danger ms-2">25000 تومان</del> </h6>
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
                            <a href="#"><img src="{{ URL::asset('main/images/shop/product/s15.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="#" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-15.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                <li class="mt-2"><a href="{{ route('shop_cart') }}" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="#" class="text-dark product-name h6">تی شرت نایس </a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1">50000 تومان <span class="text-success ms-1">30% تخفیف</span> </h6>
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
                            <a href="#"><img src="{{ URL::asset('main/images/shop/product/s16.jpg')}}" class="img-fluid" alt=""></a>
                            <a href="#" class="overlay-work">
                                <img src="{{ URL::asset('main/images/shop/product/s-16.jpg')}}" class="img-fluid" alt="">
                            </a>
                            <ul class="list-unstyled shop-icons">
                                <li><a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                <li class="mt-2"><a href="#" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                <li class="mt-2"><a href="{{ route('shop_cart') }}" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                            </ul>
                        </div>
                        <div class="card-body content pt-4 p-2">
                            <a href="#" class="text-dark product-name h6">ساعت</a>
                            <div class="d-flex justify-content-between mt-1">
                                <h6 class="text-muted small fst-italic mb-0 mt-1">18000 تومان <del class="text-danger ms-2">22000 تومان</del> </h6>
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
