@extends('layouts.master_front')
@section('title','خرید Samsung Galaxy Note 9')
@section('content')
    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title"> تی شرت مارک دار </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="index.html">لنـدریـک </a></li>
                                    <li class="breadcrumb-item"><a href="index-shop.html">فروشگاه </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">جزئیات محصول </li>
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

    <section class="section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="tiny-single-item">
                        <div class="tiny-slide"><img src="{{URL::asset('main/images/shop/product/single-2.jpg')}}" class="img-fluid rounded" alt=""></div>
                        <div class="tiny-slide"><img src="{{URL::asset('main/images/shop/product/single-3.jpg')}}" class="img-fluid rounded" alt=""></div>
                        <div class="tiny-slide"><img src="{{URL::asset('main/images/shop/product/single-4.jpg')}}" class="img-fluid rounded" alt=""></div>
                        <div class="tiny-slide"><img src="{{URL::asset('main/images/shop/product/single-5.jpg')}}" class="img-fluid rounded" alt=""></div>
                        <div class="tiny-slide"><img src="{{URL::asset('main/images/shop/product/single-6.jpg')}}" class="img-fluid rounded" alt=""></div>
                    </div>
                </div><!--end col-->

                <div class="col-md-7 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-md-4">
                        <h4 class="title">تی شرت مارک دار</h4>
                        <h5 class="text-muted">21000 تومان <del class="text-danger ms-2">25000 تومان</del> </h5>
                        <ul class="list-unstyled text-warning h5 mb-0">
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                            <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                        </ul>

                        <h5 class="mt-4 py-2">بررسی:</h5>
                        <p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد.</p>

                        <ul class="list-unstyled text-muted">
                            <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span> راه حل های بازاریابی دیجیتال برای فردا</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span> با استعداد ما و آژانس بازاریابی مجرب</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span> پوست خود را متناسب با نام تجاری خود ایجاد کنید</li>
                        </ul>

                        <div class="row mt-4 pt-2">
                            <div class="col-lg-6 col-12">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0">رنگ: </h6>
                                    <ul class="list-unstyled mb-0 ms-3">
                                        <li class="list-inline-item" ><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary" style="background-color: red !important;"></a></li>
                                        <li class="list-inline-item ms-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary" style="background-color: blue !important"></a></li>
                                        <li class="list-inline-item ms-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary"></a></li>
                                        <li class="list-inline-item ms-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary"></a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                <div class="d-flex shop-list align-items-center">
                                    <h6 class="mb-0">تعداد: </h6>
                                    <div class="qty-icons ms-3">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="btn btn-icon btn-soft-primary minus">-</button>
                                        <input min="0" name="quantity" value="0" type="number" class="btn btn-icon btn-soft-primary qty-btn quantity">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="btn btn-icon btn-soft-primary plus">+</button>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="mt-4 pt-2">
                            <a href="javascript:void(0)" class="btn btn-primary">اکنون بخرید </a>
                            <a href="shop-cart.html" class="btn btn-soft-primary ms-2">افزودن به سبد</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills shadow flex-column flex-sm-row d-md-inline-flex mb-0 p-1 bg-white rounded position-relative overflow-hidden" id="pills-tab" role="tablist">
                        <li class="nav-item m-1">
                            <a class="nav-link py-2 px-5 active rounded" id="description-data" data-bs-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="false">
                                <div class="text-center">
                                    <h6 class="mb-0">توضیحات </h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item m-1">
                            <a class="nav-link py-2 px-5 rounded" id="additional-info" data-bs-toggle="pill" href="#additional" role="tab" aria-controls="additional" aria-selected="false">
                                <div class="text-center">
                                    <h6 class="mb-0">اطلاعات تکمیلی</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item m-1">
                            <a class="nav-link py-2 px-5 rounded" id="review-comments" data-bs-toggle="pill" href="#review" role="tab" aria-controls="review" aria-selected="false">
                                <div class="text-center">
                                    <h6 class="mb-0">نظرات </h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->
                    </ul>

                    <div class="tab-content mt-5" id="pills-tabContent">
                        <div class="card border-0 tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-data">
                            <p class="text-muted mb-0">به دلیل استفاده گسترده از آن به عنوان متن پر کننده برای طرح بندی, غیرقابل خواندن از اهمیت زیادی برخوردار است:ادراک انسان برای شناسایی الگوها و تکرارهای خاص در متن تنظیم شده است. اگر توزیع حروف و کلمات تصادفی باشد ، خواننده از قضاوت بی طرف در مورد تأثیر بصری و خوانایی انواع حروف (تایپوگرافی) یا توزیع متن در صفحه (طرح یا منطقه نوع) منحرف نخواهد شد. . به همین دلیل ، متن ساختگی معمولاً از یک سری کلمات یا هجاهای کم و بیش تصادفی تشکیل شده است.</p>
                        </div>

                        <div class="card border-0 tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-info">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td style="width: 100px;">رنگ </td>
                                    <td class="text-muted">قرمز ، سفید ، سیاه ، نارنجی</td>
                                </tr>

                                <tr>
                                    <td>متریال </td>
                                    <td class="text-muted">پنبه </td>
                                </tr>

                                <tr>
                                    <td>سایزها </td>
                                    <td class="text-muted">S, M, L, XL, XXL</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="card border-0 tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-comments">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="media-list list-unstyled mb-0">
                                        <li>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <a class="pe-3" href="#">
                                                        <img src="{{URL::asset('main/images/client/01.jpg')}}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                    </a>
                                                    <div class="flex-1 commentor-detail">
                                                        <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">لورنزو پیترسون</a></h6>
                                                        <small class="text-muted">اردیبهشت 1400 - ساعت 14:40 بعد ظهر</small>
                                                    </div>
                                                </div>
                                                <ul class="list-unstyled mb-0">
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                </ul>
                                            </div>
                                            <div class="mt-3">
                                                <p class="text-muted fst-italic p-3 bg-light rounded">" محصول عالی هست "</p>
                                            </div>
                                        </li>

                                        <li class="mt-4">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <a class="pe-3" href="#">
                                                        <img src="{{URL::asset('main/images/client/02.jpg')}}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                    </a>
                                                    <div class="flex-1 commentor-detail">
                                                        <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading text-dark">تامی کاماچو</a></h6>
                                                        <small class="text-muted">اردیبهشت 1400 - ساعت 15:40 بعد ظهر</small>
                                                    </div>
                                                </div>
                                                <ul class="list-unstyled mb-0">
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                </ul>
                                            </div>
                                            <div class="mt-3">
                                                <p class="text-muted fst-italic p-3 bg-light rounded mb-0">" خوبه "</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!--end col-->

                                <div class="col-lg-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                    <form class="ms-lg-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>اضافه کردن نظر:</h5>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <h6 class="small fw-bold">امتیاز شما :</h6>
                                                <a href="javascript:void(0)" class="d-inline-block me-3">
                                                    <ul class="list-unstyled mb-0 small">
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                    </ul>
                                                </a>

                                                <a href="javascript:void(0)" class="d-inline-block me-3">
                                                    <ul class="list-unstyled mb-0 small">
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                    </ul>
                                                </a>

                                                <a href="javascript:void(0)" class="d-inline-block me-3">
                                                    <ul class="list-unstyled mb-0 small">
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                    </ul>
                                                </a>

                                                <a href="javascript:void(0)" class="d-inline-block me-3">
                                                    <ul class="list-unstyled mb-0 small">
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                    </ul>
                                                </a>

                                                <a href="javascript:void(0)" class="d-inline-block">
                                                    <ul class="list-unstyled mb-0 small">
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </a>
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <div class="mb-3">
                                                    <label class="form-label">نظر شما:</label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                        <textarea id="message" placeholder="کامنت شما" rows="5" name="message" class="form-control ps-5" required=""></textarea>
                                                    </div>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">نام  <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                                        <input id="name" name="name" type="text" placeholder="نام" class="form-control ps-5" required="">
                                                    </div>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">ایمیل شما <span class="text-danger">*</span></label>
                                                    <div class="form-icon position-relative">
                                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                                        <input id="email" type="email" placeholder="ایمیل" name="email" class="form-control ps-5" required="">
                                                    </div>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-md-12">
                                                <div class="send d-grid">
                                                    <button type="submit" class="btn btn-primary">ارسال </button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form><!--end form-->
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-0">محصولات مرتبط</h5>
                </div><!--end col-->

                <div class="col-12 mt-4">
                    <div class="tiny-four-item">
                        <div class="tiny-slide">
                            <div class="card shop-list border-0 position-relative m-2">
                                <ul class="label list-unstyled mb-0">
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-danger">داغ </a></li>
                                </ul>
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s1.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-1.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-product-detail.html" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
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
                        </div>

                        <div class="tiny-slide">
                            <div class="card shop-list border-0 position-relative m-2">
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s2.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-2.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-product-detail.html" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                    </ul>
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
                        </div>

                        <div class="tiny-slide">
                            <div class="card shop-list border-0 position-relative m-2">
                                <ul class="label list-unstyled mb-0">
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-warning">ویژه </a></li>
                                </ul>
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s3.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-3.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-product-detail.html" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
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
                        </div>

                        <div class="tiny-slide">
                            <div class="card shop-list border-0 position-relative m-2">
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s4.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-4.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-product-detail.html" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
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
                        </div>

                        <div class="tiny-slide">
                            <div class="card shop-list border-0 position-relative m-2">
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
                                        <li class="mt-2"><a href="shop-product-detail.html" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
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
                        </div>

                        <div class="tiny-slide">
                            <div class="card shop-list border-0 position-relative m-2">
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="images/shop/product/s6.jpg" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-6.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-product-detail.html" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                    </ul>
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
                        </div>

                        <div class="tiny-slide">
                            <div class="card shop-list border-0 position-relative m-2">
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s7.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-7.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-product-detail.html" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
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
                        </div>

                        <div class="tiny-slide">
                            <div class="card shop-list border-0 position-relative m-2">
                                <ul class="label list-unstyled mb-0">
                                    <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-success">ویژه ها </a></li>
                                </ul>
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="shop-product-detail.html"><img src="{{URL::asset('main/images/shop/product/s8.jpg')}}" class="img-fluid" alt=""></a>
                                    <a href="shop-product-detail.html" class="overlay-work">
                                        <img src="{{URL::asset('main/images/shop/product/s-8.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="shop-product-detail.html" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
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
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container-fluid mt-100 mt-60 px-0">
            <div class="py-5 bg-light">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="shop-product-detail.html" class="text-dark align-items-center">
                                    <span class="pro-icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left fea icon-sm"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg></span>
                                    <span class="text-muted d-none d-md-inline-block">توسعه وب </span>
                                    <img src="{{URL::asset('main/images/work/6.jpg')}}" class="avatar avatar-small rounded shadow ms-2" style="height:auto;" alt="">
                                </a>

                                <a href="index.html" class="btn btn-lg btn-pills btn-icon btn-soft-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home icons"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a>

                                <a href="shop-product-detail.html" class="text-dark align-items-center">
                                    <img src="{{URL::asset('main/images/work/7.jpg')}}" class="avatar avatar-small rounded shadow me-2" style="height:auto;" alt="">
                                    <span class="text-muted d-none d-md-inline-block">طراحی وب</span>
                                    <span class="pro-icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right fea icon-sm"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
                                </a>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div><!--end div-->
        </div>
    </section><!--end section-->

@endsection

