@extends('layouts.master')
@section('title','خرید Samsung Galaxy Note 9')
@section('content')
    <div class="container mt-5 product">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">خانه</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">فروشگاه</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">گوشی موبایل</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">سامسونگ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">خرید Samsung Galaxy Note 9</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card product-header mb-3">
                    <img src="{{URL::asset('admin/img/shop-img/4.png')}}" class="product-thumbnail card-img-top"
                         alt="...">
                    <div class="card-body product-title text-white">
                        <h1 class="card-title text-center h2 fw-bold">خرید Samsung Galaxy Note 9</h1>
                    </div>
                    <div class="container-fluid py-3">
                        <div class="row">
                            <div class="col-md-6 card-text text-center text-md-start"><small class="text-muted">دسته
                                    بندی : </small><a
                                    href="#">گوشی موبایل</a> , <a href="#">سامسونگ</a></div>
                            <div class="col-md-6 card-text text-center text-md-end">
                                <a href="#" class="text-black-50 mx-2 text-decoration-none">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="text-black-50 mx-2 text-decoration-none">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a href="#" class="text-black-50 mx-2 text-decoration-none">
                                    <i class="fab fa-telegram-plane"></i>
                                </a>
                                <a href="#" class="text-black-50 mx-2 text-decoration-none">
                                    <i class="far fa-copy"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-4">
                        <img src="{{URL::asset('admin/img/shop-img/4.png')}}" alt="" class="img-thumbnail">
                    </div>
                    <div class="col-4">
                        <img src="{{URL::asset('admin/img/shop-img/5.png')}}" alt="" class="img-thumbnail">
                    </div>
                    <div class="col-4">
                        <img src="{{URL::asset('admin/img/shop-img/6.png')}}" alt="" class="img-thumbnail">
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-12">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item mb-2"><i class="fas fa-check text-muted"></i> An item</li>
                            <li class="list-group-item mb-2"><i class="fas fa-check text-muted"></i> A second item</li>
                            <li class="list-group-item mb-2"><i class="fas fa-check text-muted"></i> A third item</li>
                            <li class="list-group-item mb-2"><i class="fas fa-check text-muted"></i> A fourth item</li>
                            <li class="list-group-item mb-2"><i class="fas fa-check text-muted"></i> And a fifth one
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row my-4 price">
                    <div class="col-12">
                        <div class="val text-center fs-3">قیمت : 12,650,000 تومان</div>
                    </div>
                </div>
                <div class="row my-4 add-to-cart">
                    <div class="col-12 text-center">
                        <a href="#" class="btn bg-orange fs-4">افزودن به سبد خرید</a>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="excerpt bg-purple-50 p-3">
                    <h2 class="h4 text-light">توضیحات</h2>
                    <div class="text-light p-2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa facere ipsum sequi. Aperiam
                            autem delectus deleniti doloremque ducimus error, harum, in iusto magni maxime mollitia nam
                            nisi officia quo reiciendis!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa facere ipsum sequi. Aperiam
                            autem delectus deleniti doloremque ducimus error, harum, in iusto magni maxime mollitia nam
                            nisi officia quo reiciendis!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa facere ipsum sequi. Aperiam
                            autem delectus deleniti doloremque ducimus error, harum, in iusto magni maxime mollitia nam
                            nisi officia quo reiciendis!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-12">
                <div class="description bg-purple-50 p-3">
                    <h2 class="h4 text-light">نقد و بررسی</h2>
                    <div class="text-light p-2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa facere ipsum sequi. Aperiam
                            autem delectus deleniti doloremque ducimus error, harum, in iusto magni maxime mollitia nam
                            nisi officia quo reiciendis!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa facere ipsum sequi. Aperiam
                            autem delectus deleniti doloremque ducimus error, harum, in iusto magni maxime mollitia nam
                            nisi officia quo reiciendis!</p>
                        <img src="{{URL::asset('admin/img/shop-img/4.png')}}" class="img-fluid" alt="...">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa facere ipsum sequi. Aperiam
                            autem delectus deleniti doloremque ducimus error, harum, in iusto magni maxime mollitia nam
                            nisi officia quo reiciendis!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa facere ipsum sequi. Aperiam
                            autem delectus deleniti doloremque ducimus error, harum, in iusto magni maxime mollitia nam
                            nisi officia quo reiciendis!</p>
                        <img src="{{URL::asset('admin/img/shop-img/8.png')}}" class="img-fluid" alt="...">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa facere ipsum sequi. Aperiam
                            autem delectus deleniti doloremque ducimus error, harum, in iusto magni maxime mollitia nam
                            nisi officia quo reiciendis!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5 pt-4">
            <h2 class="related-product text-dark my-2 px-5 py-1">محصولات مرتبط</h2>
        </div>
        <div class="row">
            <div class="col-md-4 shop-item"><a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/4.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-end text-light"><span class="price">2,999,000</span><span
                                class="currency">تومان</span></li>
                    </ul>
                </a></div>
            <div class="col-md-4 shop-item"><a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/4.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-end text-light"><span class="price">2,999,000</span><span
                                class="currency">تومان</span></li>
                    </ul>
                </a></div>
            <div class="col-md-4 shop-item"><a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/4.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-end text-light"><span class="price">2,999,000</span><span
                                class="currency">تومان</span></li>
                    </ul>
                </a></div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link text-dark active" id="comment-form-tab" data-bs-toggle="tab"
                                data-bs-target="#comment-form" type="button" role="tab" aria-controls="comment-form"
                                aria-selected="true">دیدگاه شما
                        </button>
                        <button class="nav-link text-dark" id="comments-tab" data-bs-toggle="tab"
                                data-bs-target="#comments" type="button" role="tab" aria-controls="comments"
                                aria-selected="false">نظرات کاربران
                        </button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active p-5" id="comment-form" role="tabpanel"
                         aria-labelledby="comment-form-tab">
                        <div class="row d-flex justify-content-center align-items-end">
                        <form action="#" method="post" class="col-md-6">

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="name" placeholder="">
                                    <label for="name" class="form-label">نام و نام خانوادگی</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="">
                                    <label for="email" class="form-label">آدرس ایمیل</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="phone" placeholder="">
                                    <label for="phone" class="form-label">شماره تماس</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="subject" placeholder="">
                                    <label for="subject" class="form-label">موضوع</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="comment" placeholder=""></textarea>
                                    <label for="comment" class="form-label">دیدگاهتان را بنویسید</label>
                                </div>

                                {{-- //TODO فعال سازی ریکپچا --}}
                                {{--<div class="row mt-20 justify-content-md-center">
                                    <div class="col-md-6">
                                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}"></div>
                                    </div>
                                </div>--}}
                                <button type="submit" class="btn btn-primary">ارسال دیدگاه</button>
                            </form>
                            <div class="col-md-6 d-none d-md-block">
                                <img src="{{URL::asset('profile/media/illustrations/terms-1.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade p-2 p-md-5" id="comments" role="tabpanel"
                         aria-labelledby="comments-tab">
                        {{-- single comment start --}}
                        <div class="container mb-4">
                            <div class="row d-flex align-items-center">
                                <div class="col-5 col-sm-3 col-md-2 text-center">
                                    <img src="{{URL::asset('admin/img/member-img/1.png')}}" alt=""
                                         class="img-thumbnail rounded-circle" width="90px">
                                </div>
                                <div class="col-7 col-sm-9 col-md-10 text-start">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="user-name fs-4 fw-bold d-inline-block">سارا شکوری</div>
                                            <span class="badge rounded-pill bg-primary bg-gradient ms-4">خریدار</span>
                                            <div class="comment-posted-at fs-6 text-black-50">1400/06/28 12:25</div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam
                                                asperiores cupiditate, delectus eaque esse facilis harum incidunt ipsam
                                                labore odit praesentium rerum? Eos expedita facilis nihil omnis, placeat
                                                quam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- single comment end --}}
                        {{-- single comment start --}}
                        <div class="container mb-4">
                            <div class="row d-flex align-items-center">
                                <div class="col-5 col-sm-3 col-md-2 text-center">
                                    <img src="{{URL::asset('admin/img/member-img/6.png')}}" alt=""
                                         class="img-thumbnail rounded-circle" width="90px">
                                </div>
                                <div class="col-7 col-sm-9 col-md-10 text-start">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="user-name fs-4 fw-bold d-inline-block">مهرداد دیندار</div>
                                            <span class="badge rounded-pill bg-success bg-gradient ms-4">مدیر</span>
                                            <div class="comment-posted-at fs-6 text-black-50">1400/06/28 12:25</div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam
                                                asperiores cupiditate, delectus eaque esse facilis harum incidunt ipsam
                                                labore odit praesentium rerum? Eos expedita facilis nihil omnis, placeat
                                                quam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- single comment end --}}
                        {{-- single comment start --}}
                        <div class="container mb-4">
                            <div class="row d-flex align-items-center">
                                <div class="col-5 col-sm-3 col-md-2 text-center">
                                    <img src="{{URL::asset('admin/img/member-img/10.png')}}" alt=""
                                         class="img-thumbnail rounded-circle" width="90px">
                                </div>
                                <div class="col-7 col-sm-9 col-md-10 text-start">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="user-name fs-4 fw-bold d-inline-block">زهرا کریمی</div>
                                            <div class="comment-posted-at fs-6 text-black-50">1400/06/28 12:25</div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-12">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aperiam
                                                asperiores cupiditate, delectus eaque esse facilis harum incidunt ipsam
                                                labore odit praesentium rerum? Eos expedita facilis nihil omnis, placeat
                                                quam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- single comment end --}}
                        {{-- paginatin --}}
                        <div class="row mt-4">
                            <div class="col-12 d-flex justify-content-center">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination shop-pagination">
                                        <li class="page-item mx-2 rounded">
                                            <a class="page-link text-dark bg-orange " href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item mx-2 rounded"><a class="page-link text-dark bg-orange " href="#">1</a></li>
                                        <li class="page-item mx-2 rounded"><a class="page-link text-dark bg-orange " href="#">2</a></li>
                                        <li class="page-item mx-2 rounded"><a class="page-link text-dark bg-orange " href="#">3</a></li>
                                        <li class="page-item mx-2 rounded">
                                            <a class="page-link text-dark bg-orange " href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        {{-- paginatin --}}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="white-space"></div>
@endsection

