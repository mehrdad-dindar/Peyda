@extends('layouts.master_front')
@section('title','فروشگاه')
@section('content')
    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title"> تمام محصولات  </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="index.html">لنـدریـک </a></li>
                                    <li class="breadcrumb-item"><a href="index-shop.html">فروشگاه </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">محصولات </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Start Products -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card border-0 sidebar sticky-bar">
                        <div class="card-body p-0">
                            <!-- SEARCH -->
                            <div class="widget">
                                <form role="search" method="get">
                                    <div class="input-group mb-3 border rounded">
                                        <input type="text" id="s" name="s" class="form-control border-0" placeholder="جستجوی کلمه کلیدی...">
                                        <button type="submit" class="input-group-text bg-white border-0" id="searchsubmit"><i class="uil uil-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!-- SEARCH -->

                            <!-- Categories -->
                            <div class="widget mt-4 pt-2">
                                <h5 class="widget-title">دسته بندیها </h5>
                                <ul class="list-unstyled mt-4 mb-0 blog-categories">
                                    <li><a href="jvascript:void(0)">مردانه </a></li>
                                    <li><a href="jvascript:void(0)">زنانه  </a></li>
                                    <li><a href="jvascript:void(0)">الکترونیکی </a></li>
                                    <li><a href="jvascript:void(0)">جواهر </a></li>
                                    <li><a href="jvascript:void(0)">کفش </a></li>
                                    <li><a href="jvascript:void(0)">بچگانه </a></li>
                                    <li><a href="jvascript:void(0)">ورزشی </a></li>
                                    <li><a href="jvascript:void(0)">اسباب بازی </a></li>
                                    <li><a href="jvascript:void(0)">کارت هدیه </a></li>
                                </ul>
                            </div>
                            <!-- Categories -->

                            <!-- color -->
                            <div class="widget mt-4 pt-2">
                                <h5 class="widget-title">رنگ </h5>
                                <ul class="list-unstyled mt-4 mb-0">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-primary"><span class="d-none">.</span></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-danger"><span class="d-none">.</span></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-success"><span class="d-none">.</span></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-info"><span class="d-none">.</span></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-secondary"><span class="d-none">.</span></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-icon btn-pills btn-warning"><span class="d-none">.</span></a></li>
                                </ul>
                            </div>
                            <!-- COlor -->

                            <!-- Top Products -->
                            <div class="widget mt-4 pt-2">
                                <h5 class="widget-title">محصولات برتر </h5>
                                <ul class="list-unstyled mt-4 mb-0">
                                    <li class="d-flex align-items-center">
                                        <a href="javascript:void(0)">
                                            <img src="{{URL::asset('main/images/shop/product/s1.jpg')}}" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                        </a>
                                        <div class="flex-1 content ms-3">
                                            <a href="javascript:void(0)" class="text-dark h6">تی شرت </a>
                                            <h6 class="text-muted small fst-italic mb-0 mt-1">18000 تومان <del class="text-danger ms-2">22000 تومان</del> </h6>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center mt-2">
                                        <a href="javascript:void(0)">
                                            <img src="{{URL::asset('main/images/shop/product/s3.jpg')}}" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                        </a>
                                        <div class="flex-1 content ms-3">
                                            <a href="javascript:void(0)" class="text-dark h6">ساعت </a>
                                            <h6 class="text-muted small fst-italic mb-0 mt-1">18000 تومان <del class="text-danger ms-2">22000 تومان</del> </h6>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center mt-2">
                                        <a href="javascript:void(0)">
                                            <img src="{{url::asset('main/images/shop/product/s6.jpg')}}" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                        </a>
                                        <div class="flex-1 content ms-3">
                                            <a href="javascript:void(0)" class="text-dark h6">فنجان قهوه </a>
                                            <h6 class="text-muted small fst-italic mb-0 mt-1">18000 تومان <del class="text-danger ms-2">22000 تومان</del> </h6>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center mt-2">
                                        <a href="javascript:void(0)">
                                            <img src="{{URL::asset('main/images/shop/product/s8.jpg')}}" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                        </a>
                                        <div class="flex-1 content ms-3">
                                            <a href="javascript:void(0)" class="text-dark h6">چهارپایه چوبی</a>
                                            <h6 class="text-muted small fst-italic mb-0 mt-1">18000 تومان <del class="text-danger ms-2">22000 تومان</del> </h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-9 col-md-8 col-12 mt-5 pt-2 mt-sm-0 pt-sm-0">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-7">
                            <div class="section-title">
                                <h5 class="mb-0">نمایش 1-15 از 47 نتیجه</h5>
                            </div>
                        </div><!--end col-->

                        <div class="col-lg-4 col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <div class="d-flex justify-content-md-between align-items-center">
                                <div class="form custom-form">
                                    <div class="mb-0">
                                        <select class="form-select form-control" aria-label="Default select example" id="Sortbylist-job">
                                            <option selected>مرتب سازی بر اساس آخرین</option>
                                            <option>مرتب سازی بر اساس محبوبیت</option>
                                            <option>مرتب سازی بر اساس رتبه بندی</option>
                                            <option>مرتب سازی بر اساس قیمت: کم به زیاد</option>
                                            <option>مرتب سازی بر اساس قیمت: زیاد به کم</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mx-2">
                                    <a href="shop-grids.html" class="h5 text-muted"><i class="uil uil-apps"></i></a>
                                </div>

                                <div>
                                    <a href="shop-lists.html" class="h5 text-muted"><i class="uil uil-list-ul"></i></a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                            <div class="card shop-list border-0 position-relative">
                                <ul class="label list-unstyled mb-0">
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-success">ویژه ها </a></li>
                                </ul>
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s1.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-1.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="shop-product-detail.html" class="text-dark product-name h6">تی شرت بردان  </a>
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

                        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                            <div class="card shop-list border-0 position-relative">
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s2.jpg')}}" class="img-fluid" alt=""></a>
                                    <div class="overlay-work">
                                        <div class="py-2 bg-soft-dark rounded-bottom out-stock">
                                            <h6 class="mb-0 text-center">تمام شده</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="shop-product-detail.html" class="text-dark product-name h6">کیسه خرید </a>
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

                        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                            <div class="card shop-list border-0 position-relative">
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s3.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-3.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="shop-product-detail.html" class="text-dark product-name h6">ساعت الگنت </a>
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

                        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                            <div class="card shop-list border-0 position-relative">
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s4.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-4.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="shop-product-detail.html" class="text-dark product-name h6">کفش های گاه به گاه </a>
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

                        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                            <div class="card shop-list border-0 position-relative">
                                <ul class="label list-unstyled mb-0">
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-warning">ویژه </a></li>
                                </ul>
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s5.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-5.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="shop-product-detail.html" class="text-dark product-name h6">هدفون </a>
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

                        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                            <div class="card shop-list border-0 position-relative">
                                <ul class="label list-unstyled mb-0">
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-primary">جدید </a></li>
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-success">ویژه ها </a></li>
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-warning">ویژه </a></li>
                                </ul>
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s6.jpg')}}" class="img-fluid" alt=""></a>
                                    <div class="overlay-work">
                                        <div class="py-2 bg-soft-dark rounded-bottom out-stock">
                                            <h6 class="mb-0 text-center">تمام شده</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="shop-product-detail.html" class="text-dark product-name h6">لیوان زیبا</a>
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

                        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                            <div class="card shop-list border-0 position-relative">
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s7.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-7.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="shop-product-detail.html" class="text-dark product-name h6">هدفون سونی</a>
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

                        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                            <div class="card shop-list border-0 position-relative">
                                <ul class="label list-unstyled mb-0">
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-primary">جدید </a></li>
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-success">ویژه ها </a></li>
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-warning">ویژه </a></li>
                                </ul>
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s8.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-8.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="shop-product-detail.html" class="text-dark product-name h6">چهارپایه چوبی</a>
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

                        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                            <div class="card shop-list border-0 position-relative">
                                <ul class="label list-unstyled mb-0">
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-success">ویژه ها </a></li>
                                </ul>
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s9.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-9.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="shop-product-detail.html" class="text-dark product-name h6">لیوان قهوه</a>
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

                        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                            <div class="card shop-list border-0 position-relative">
                                <ul class="label list-unstyled mb-0">
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-primary">جدید </a></li>
                                </ul>
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s10.jpg')}}" class="img-fluid" alt=""></a>
                                    <div class="overlay-work">
                                        <div class="py-2 bg-soft-dark rounded-bottom out-stock">
                                            <h6 class="mb-0 text-center">تمام شده</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="shop-product-detail.html" class="text-dark product-name h6">عینک آفتابی </a>
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

                        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                            <div class="card shop-list border-0 position-relative">
                                <ul class="label list-unstyled mb-0">
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-success">ویژه ها </a></li>
                                </ul>
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s11.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/')}}shop{{URL::asset('main//product/s-11.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="shop-product-detail.html" class="text-dark product-name h6">کفش لوفر</a>
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

                        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                            <div class="card shop-list border-0 position-relative">
                                <ul class="label list-unstyled mb-0">
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-primary">جدید </a></li>
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-success">ویژه ها </a></li>
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-warning">ویژه </a></li>
                                </ul>
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s12.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-12.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="shop-product-detail.html" class="text-dark product-name h6">تی شرت نایس </a>
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

                        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                            <div class="card shop-list border-0 position-relative">
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s13.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-13.jpg')}}" class="img-fluid" alt="">
                                    </a>{URL::asset(){(main/'')}}
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="shop-product-detail.html" class="text-dark product-name h6">صندلی استراحت </a>
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

                        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                            <div class="card shop-list border-0 position-relative">
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s14.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-14.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="shop-product-detail.html" class="text-dark product-name h6">کفش پاشنه بلند</a>
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

                        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                            <div class="card shop-list border-0 position-relative">
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s15.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-15.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="shop-product-detail.html" class="text-dark product-name h6">تی شرت نایس </a>
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

                        <!-- PAGINATION START -->
                        <div class="col-12 mt-4 pt-2">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous"><i class="mdi mdi-arrow-left"></i> قبلی </a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">بعدی  <i class="mdi mdi-arrow-right"></i></a></li>
                            </ul>
                        </div><!--end col-->
                        <!-- PAGINATION END -->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Products -->

@endsection
