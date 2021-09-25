@extends('layouts.master_front')
@section('title','صفحه نخست')
@section('custom_css')
@endsection
@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 bg-custom-gray d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="title-heading text-center mt-5 pt-3">
                        <div class="alert alert-light alert-pills" role="alert" data-aos="fade-up" data-aos-duration="1000">
                            <span class="badge rounded-pill bg-success me-1">پشتیبانی</span>
                            <span class="content">پشتیبانی شبانه روزی 24/7</span>
                        </div>
                        <h1 class="mb-3 h2 text-white" data-aos="fade-up" data-aos-duration="1400">پیدا سرویس ماندگار، آن‌سوی مرزهای گارانتی تلفن همراه !</h1>
                        <p class="para-desc mx-auto text-white" data-aos="fade-up" data-aos-duration="1800">فراگارانتی پیدا سرویس بهترین ارائه‌دهنده خدمات گوشی همراه، تبلت و لپ‌تاپ</p>
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
                        <h4 class="title mb-4" data-aos="fade-up" data-aos-duration="1000">پیدا سرویس ماندگار</h4>
                        <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1400">
                            شرکت <span class="text-primary fw-bold">پیدا سرویس ماندگار</span> از امروز  <span class="text-warning">#تاهمیشه</span> کنارتان خواهد بود. همراه با ما، به آن‌سوی مرزهای فراگارانتی گوشی تلفن همراه سفر کنید!
                        </p>
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
                                    <h3 class="h6 mb-0">از ما بیشتر بدانید !</h3>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item">
                            <a class="nav-link rounded" id="selfservice-tab" data-bs-toggle="pill" href="#pills-self"
                               role="tab" aria-controls="pills-self" aria-selected="false">
                                <div class="text-center py-2">
                                    <h3 class="h6 mb-0">فراگارانتی پیدا سرویس چیست؟</h3>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item">
                            <a class="nav-link rounded" id="teamwork-tab" data-bs-toggle="pill" href="#pills-teamwork"
                               role="tab" aria-controls="pills-teamwork" aria-selected="false">
                                <div class="text-center py-2">
                                    <h3 class="h6 mb-0">هدیه ویژه ما به شما !</h3>
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
                                        <h3 class="h5 mb-4" data-aos="fade-up" data-aos-duration="1000">پیدا سرویس ماندگار ...</h3>
                                        {{-- TODO صفحه درباره ما--}}
                                        <p class="text-muted" style="text-align: justify" data-aos="fade-up" data-aos-duration="1400">کارشناسان مجرب شرکت پیدا سرویس ماندگار پس از سال‌ها تجربه و کار با تعهد به این نتیجه رسیدند که گارانتی‌های موجود باعث ایجاد رضایت لازم و کافی در مشتریان نخواهند شد و نیازهای اساسی ایشان را برآورده نمی‌کنند. پس از تحقیق و بررسی‌های بسیار در زمینه گارانتی محصولات الکترونیکی، شرکت پیدا سرویس ماندگار تصمیم بر ارائه خدمات فراگارانتی در حوزه گوشی‌های همراه و بعضی لوازم الکترونیک گرفت.
                                            شرکت پیدا سرویس ماندگار در تاریخ 02/04/1399 با شماره ثبت 560070 و شناسه ملی 14009225883 تأسیس شد. هدف از تأسیس، ارائه‌ی خدمات به مشتریانِ دارای گوشی‌های آکبند و دست دو است. پیدا سرویس ماندگار باور دارد که همه‌ی افراد و اقشار جامعه شایسته دریافت فراگارانتی برای محصولات الکترونیک خود اعم از تلفن همراه، تبلت و لپ‌تاپ هستند...</p>
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
                                        <h3 class="mb-4 h5" data-aos="fade-up" data-aos-duration="1000">خدمات فراگارانتی پیدا سرویس ماندگار</h3>
                                        {{-- TODO صفحه معرفی فراگارانتی --}}
                                        <p class="text-muted" data-aos="fade-up" data-aos-duration="1400" style="text-align: justify">شرکت پیدا سرویس ماندگار برای حمایت از مشتریان عزیز به ارائه‌ی خدمات فراگارانتی می‌پردازد. جالب است بدانید که این خدمات بدون واسطه و در خود شرکت انجام می‌شود بنابراین شما می‌توانید در کوتاه‌ترین زمان بدون اتلاف وقت و با خیال راحت در امنیت کامل خدمت مورد نیاز خود را دریافت نمایید.
                                            فراگارانتی تجهیزات الکترونیک (گوشی همراه، تبلت و لپ‌تاپ) شرکت  پیدا سرویس
                                            پوشش‌های خدمات عبارتند از:
                                            <ol>
                                            <li>شکستگی بر اثر ضربه</li>
                                            <li>آب‌خوردگی و نفوذ مایعات</li>
                                            <li>نوسانات ولتاژ برق</li>
                                            <li>الکل و نفوذ مواد شیمیایی</li>
                                            <li>حوادث طبیعی و غیرمترقبه</li>
                                            <li>مشکلات سخت‌افزاری</li>
                                        </ol>
                                        </p>
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
                                        <h3 class="h5 mb-4" data-aos="fade-up" data-aos-duration="1000">۵۰ میلیون تومان بیمه آتش سوزی رایگان !</h3>
                                        {{-- TODO صفحه بیمه آتش سوزی --}}
                                        <p class="text-muted" style="text-align: justify" data-aos="fade-up" data-aos-duration="1400">شرکت پیدا سرویس ماندگار در جهت ارائه خدمات نوین و بی‌رقیب خود با تقدیم این هدیه‌ی ویژه و خاص به شما مشتریان گران‌قدر ثابت می‌کند تا چه اندازه به فکر رفاه و امنیت شما عزیزان است. خدماتی که شامل بیمه هستند می‌توانند در دسته‌ی جذاب‌ترین سرویس‌ها در نظر گرفته شوند. مدیران و کارشناسان مجرب شرکت پیدا سرویس ماندگار تصمیم گرفتند برای احترام هر چه بیشتر به مشتریان خود خدمات بیمه آتش‌سوزی منزل تا سقف 500،000،000 ریال را به صورت رایگان برای ایشان در نظر بگیرند. چنانچه تمایل داشته باشید مقدار ارزش بیمه را بیشتر نمائید می‌توانید با پرداخت هزینه‌ای جزئی اعتبارتان را افزایش دهید...</p>
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
                        <h4 class="title my-4" data-aos="fade-up" data-aos-duration="1400">خدمات فراگارانتی پیدا سرویس</h4>
                        <p class="text-muted para-desc mx-auto mb-0" data-aos="fade-up" data-aos-duration="1800"><span class="text-primary fw-bold">پیدا سرویس ماندگار</span> مفتخر به ارائه خدماتی است که به صورت انحصاری تنها در این مرکز در حوزه فراگارانتی گوشی تلفن همراه عرضه می‌شود !</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card categories h-100 text-center rounded border-0" style="min-height: 303px" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/icon/chat.svg')}}" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="#" class="text-dark">شکستگی بر اثر ضربه</a></h5>
                            <p class="text-muted mb-0 mt-3" style="text-align: justify">چنانچه گوشی همراه، تبلت و لپ‌تاپ‌تان دچار شکستگی و ضرب‌دیدگی شد، طبق تعهدات شرکت خسارت وارده در اسرع وقت جبران خواهدشد.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card categories h-100 text-center rounded border-0" style="min-height: 303px" data-aos="fade-up" data-aos-duration="1300">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/icon/customer-service.svg')}}"
                                 class="avatar avatar-small mb-3" alt="">
                            <h5><a href="#" class="text-dark">آب‌خوردگی و نفوذ مایعات</a></h5>
                            <p class="text-muted mb-0 mt-3" style="text-align: justify">برای همه ما یک بار پیش آمده که گوشی‌مان داخل آب افتاده یا بر اثر رطوبت آسیب دیده باشد. با پیدا سرویس ماندگار دیگر نگرانی در زمینه این مسائل معنایی ندارد.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card categories h-100 text-center rounded border-0" style="min-height: 303px" data-aos="fade-up" data-aos-duration="1600">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/icon/user.svg')}}" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="#" class="text-dark">نوسانات ولتاژ برق</a></h5>
                            <p class="text-muted mb-0 mt-3" style="text-align: justify">نوسان و اتصالی برق از مسائل پر تکراری است که می‌تواند زیان‌های فراوانی را برای وسایل الکترونیکی ایجاد کند. کارشناسان پیدا سرویس خسارت‌های ناشی از نوسان برق را پشتیبانی می‌کنند.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card categories h-100 text-center rounded border-0" style="min-height: 303px" data-aos="fade-up" data-aos-duration="1900">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/icon/call.svg')}}" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="#" class="text-dark">الکل و نفوذ مواد شیمیایی</a></h5>
                            <p class="text-muted mb-0 mt-3" style="text-align: justify">محصولات الکترونیکی در اثر تماس با الکل و مواد شیمیایی آسیب می‌بینند و جایگزینی آن‌ها هزینه بالایی دارد اما پیدا سرویس <span class="text-warning">#تاهمیشه</span> نمی‌گذارد شما زیان ببینید.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card categories h-100 text-center rounded border-0" style="min-height: 303px" data-aos="fade-up" data-aos-duration="2200">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/icon/writing.svg')}}" class="avatar avatar-small mb-3"
                                 alt="">
                            <h5><a href="#" class="text-dark">حوادث طبیعی و غیرمترقبه</a></h5>
                            <p class="text-muted mb-0 mt-3" style="text-align: justify">زلزله، سیل و آتش‌سوزی به وسایل الکترونیکی هم صدمه می‌زند. با خرید فراگارانتی پیدا سرویس می‌توانید گوشی، لپ‌تاپ و تبلت‌هایتان را در امان نگه‌دارید.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card categories h-100 text-center rounded border-0" style="min-height: 303px" data-aos="fade-up" data-aos-duration="2500">
                        <div class="card-body">
                            <img src="{{ URL::asset('main/images/icon/mail.svg')}}" class="avatar avatar-small mb-3" alt="">
                            <h5><a href="#" class="text-dark">مشکلات سخت‌افزاری</a></h5>
                            <p class="text-muted mb-0 mt-3" style="text-align: justify">به وجود آمدن مشکلات سخت‌افزاری برای وسایلی همچون تلفن همراه و لپ‌تاپ ... امری عادی است، اما داشتن فراگارانتی پیدا سرویس برای جبران خسارات امری خارق‌العاده است.</p>
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
                        <p class="text-muted para-desc mb-0 mx-auto" data-aos="fade-up" data-aos-duration="1400" style="text-align: justify">یکی از افتخارات <span class="text-primary fw-bold">پیدا سرویس ماندگار</span> ارتباط مؤثر با مشتریان است، ما  کاملا به حرف‌ها و خواسته‌هایتان گوش می‌دهیم و هرآنچه در توان داریم را برای حل مساله شما به کار می‌بریم !</p>
                    </div>
                </div>
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4 pt-2">
                    <div class="tiny-three-item d-flex align-items-stretch">
                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2 h-100" data-aos="fade-up" data-aos-duration="1000">
                                <img src="{{ URL::asset('main/images/user/1.jpg')}}"
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
                                    <p class="text-muted mt-2" style="text-align: justify">"گارانتی وقتی ارزش دارد و معنا پیدا می‌کند که شامل همه چیز باشد یعنی به نوعی محصول در قبال تمام حوادث بیمه شود و مدلی نباشد که یک بخش خراب شد شامل گارانتی نشود حتی اگر دستگاه را خودمان شکستیم باید جوری باشد که درصدی پرداخت کنند و درصدی را خودمان بپردازیم و دوباره بتوانیم از محصول استفاده کنیم. من واقعا تا قبل از این‌که با شرکت پیدا سرویس ماندگار آشنا بشوم چنین خدماتی را ندیده بودم خیلی خوشحالم که با یک سرچ ساده در گوگل این شرکت را در اولین گزینه‌ها دیدم و فراگارانتی را با هزینه‌ی اندک خریدم. بعد از چند ماه تبلتم را که در یک اتفاق شکست برای تعمیر به شرکت فرستادم و بهترین خدمات را دریافت کردم."</p>
                                    <h6 class="text-primary">- اشکان مرادی</h6>
                                </div>
                            </div>
                        </div>
                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2 h-100" data-aos="fade-up" data-aos-duration="1000">
                                <img src="{{ URL::asset('main/images/user/5.jpg')}}"
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
                                    <p class="text-muted mt-2" style="text-align: justify">"من کلا تجربه خوبی از گارانتی ندارم. چندین مرتبه محصولات الکترونیکی‌ام سوخت یا خراب شد و از سمت شرکت گارانتی کننده نه تنها رفتار مناسبی ندیدم بلکه هیچ تعهدی هم نسبت به تعمیر یا تعویض نداشتند. زمانی که فراگارانتی شرکت پیدا سرویس را برای یک‌سال تهیه کردم باور نمی‌کردم که برای گوشی یا لپ‌تاپم بهترین فراگارانتی را در نظر گرفته‌ام. تا این که با یک مشکل سخت‌افزاری تلفن همراهم روبه‌رو شدم و با شرکت تماس گرفتم و کارشناسان بعد از بررسی گوشی را تحویل گرفتند و بعد از چند روز تعمیر شده و بهتر از قبل برایم فرستادند."</p>
                                    <h6 class="text-primary">- سحر بابایی</h6>
                                </div>
                            </div>
                        </div>
                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2 h-100" data-aos="fade-up" data-aos-duration="1000">
                                <img src="{{ URL::asset('main/images/user/2.jpg')}}"
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
                                    <p class="text-muted mt-2" style="text-align: justify">"ممنون پیدا سرویس. چطور تشکر کنم از این همه حرفه‌ای بودن؟ حتما خیلی از دوستان با نوسانات برقی این روزها دست و پنجه نرم می‌کنند. رفتن برق از مشکلات بسیار بد و جدی است که در تابستان همگی شاهد و درگیر آن بودیم. من هم از این قاعده مستثنا نبودم اما پیدا سرویس ماندگار خیلی به تعهدش پایبند بود و یک گوشی نو تحویلم داد. به جرات تنها شرکتی هستید که به مشتری تا این حد احترام می‌گذارید."</p>
                                    <h6 class="text-primary">- نیشتمان وثوقی</h6>
                                </div>
                            </div>
                        </div>
                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2 h-100" data-aos="fade-up" data-aos-duration="1000">
                                <img src="{{ URL::asset('main/images/user/4.jpg')}}"
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
                                    <p class="text-muted mt-2" style="text-align: justify">"به نظر من فراگارانتی پیدا سرویس با استانداردهای جهانی برابری دارد. ما به خاطر شغل پدرم چندین سال در کشورهای خارجی و اروپایی زندگی کردیم و گارانتی که شرکت‌ها برای محصولات ارائه می‌دهند برای ما مثل رؤیا بود. حالا بعد از چندین سال من با شرکتی آشنا شدم که فراگارانتی در اختیار مشتریانش قرار می‌دهد این یعنی نهایت تخصص. من فراگارانتی را تهیه کردم. مراحل ثبت‌نام و خرید خیلی راحت انجام شد. سپاس از تیم کاربلد پیدا سرویس و سایت خوب‌شان."</p>
                                    <h6 class="text-primary">- هومان کاظمی</h6>
                                </div>
                            </div>
                        </div>
                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2 h-100" data-aos="fade-up" data-aos-duration="1000">
                                <img src="{{ URL::asset('main/images/user/3.jpg')}}"
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
                                    <p class="text-muted mt-2" style="text-align: justify">"فراگارانتی؟! مگه داریم؟! مگه می‌شه؟! در ایران گارانتی محصولات هم از خریدار حمایت نمی‌کند، باور کردن فراگارانتی چیزی بیشتر از سطح پذیرشم بود! ادعای بزرگی که باید برای من به اثبات می‌رسید. پس در اولین فرصت از سایت کارهای خرید را انجام دادم، سایتی که به نظرم یوزر فرندلی کار شده و بدون سردرگمی راحت می‌شود خرید کرد. به این فکر می‌کردم حالا چطوری بفهمم به تعهداتی که دادند پایبند هستند که وسواس عجیبم در پاک کردن وسایل در دوران کرونا باعث شد گوشی همراهم از کار بیافتد. الان دیگر مطمئنم پیدا سرویس ماندگار <span class="text-warning">#تاهمیشه</span> اینجاست."</p>
                                    <h6 class="text-primary">- نازنین وطنی</h6>
                                </div>
                            </div>
                        </div>
                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2 h-100" data-aos="fade-up" data-aos-duration="1000">
                                <img src="{{ URL::asset('main/images/user/6.jpg')}}"
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
                                    <p class="text-muted mt-2" style="text-align: justify">"من خودم فروشنده موبایل هستم. درگیری مشتری‌ها برای تهیه گارانتی را همیشه از نزدیک دیده‌ام و یا دردسرهای بعد از خرابی گوشی‌ها را ... بعضی وقت‌ها گوشی‌ها برای تعمیر به مراکزی فرستاده می‌شوند که صلاحیت ندارند و گوشی از چند قسمت دیگر هم عیب پیدا می‌کند. با تحقیق دقیق و زیاد مطمئن شدم که فراگارانتی پیدا سرویس یکی از بهترین‌های بازار است. شرکتی که مشتریان را ارجح بر سود خود می‌داند و برد - برد فعالیت می‌کند."</p>
                                    <h6 class="text-primary">- پارسا اسماعیلی</h6>
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
                        <h4 class="title mb-4 mb-lg-0">آخرین مقالات، اخبار سایت <br> و بروزرسانی ها را دنبال کنید !</h4>
                    </div>
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-start">
                        <p class="text-muted mb-0 mx-auto para-desc" style="text-align: justify">مشتریان و مخاطبان محترم در بخش وبلاگ می‌توانند در جریان آخرین و به روزترین اخبار و اطلاعات در زمینه‌ی گوشی‌های همراه، لپ‌تاپ و تبلت قرار گیرند. همچنین اطلاعات مفیدی در زمینه‌ی گارانتی و فراگارانتی دریافت خواهند کرد. شرکت <span class="text-primary fw-bold">پیدا سرویس ماندگار</span> در تلاش است اخبار مربوط به حوزه‌ تکنولوژی تلفن همراه و محصولاتی از این دست را در اختیار مشتریان بگذارد و آگاهی بیشتری برای دوست‌داران این حوزه فراهم آورد.</p>
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
    <script>
        function windowScroll() {
            const navbar = document.getElementById("topnav");
            const logo = document.getElementById("img_logo");
            const topIMG = "{{ URL::asset('front/img/logo-white-1.png') }}";
            const sclIMG = "{{ URL::asset('front/img/logo-colored-1.png') }}";
            if(navbar!=null){
                if (
                    document.body.scrollTop >= 50 ||
                    document.documentElement.scrollTop >= 50
                ) {
                    navbar.classList.add("nav-sticky");
                    logo.src= sclIMG;
                } else {
                    navbar.classList.remove("nav-sticky");
                    logo.src= topIMG;
                }
            }
        }

        window.addEventListener('scroll', (ev) => {
            ev.preventDefault();
            windowScroll();
        })
    </script>
@endsection
