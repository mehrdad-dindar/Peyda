@extends('layouts.master_front')
@section('title','صفحه نخست')
@section('custom_css')
@endsection
@section('content')
    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h2> برنامه های خود را به روش خود طراحی کنید </h2>
                        <ul class="list-unstyled mt-4">
                            <li class="list-inline-item h6 user text-muted me-2"><i class="mdi mdi-account"></i> کالوین لورس</li>
                            <li class="list-inline-item h6 date text-muted"><i class="mdi mdi-calendar-check"></i> اردیبهشت 1400</li>
                        </ul>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="index.html">لنـدریـک </a></li>
                                    <li class="breadcrumb-item"><a href="#">صفحه </a></li>
                                    <li class="breadcrumb-item"><a href="#">وبلاگ </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">جزئیات وبلاگ</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div><!--end col-->
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
                <!-- BLog Start -->
                <div class="col-lg-8 col-md-6">
                    <div class="card blog blog-detail border-0 shadow rounded">
                        <img src="{{URL::asset('main/images/blog/01.jpg')}}" class="img-fluid rounded-top" alt="">
                        <div class="card-body content">
                            <h6><i class="mdi mdi-tag text-primary me-1"></i><a href="javscript:void(0)" class="text-primary">نرم افزار </a>, <a href="javscript:void(0)" class="text-primary"> اپلیکیشن </a></h6>
                            <p class="text-muted mt-3">مشهورترین متن ساختگی "لورم ایپسوم " است که گفته می شود از قرن 16 پدید آمده است. لورم ایپسوم  در یک زبان شبه لاتین ساخته شده است که کم و بیش با لاتین "مناسب" مطابقت دارد. این شامل یک سری کلمات واقعی لاتین است. این متن ساختگی باستانی نیز قابل درک نیست ، اما از ریتم اکثر زبان های اروپایی به خط لاتین تقلید می کند. </p>
                            <blockquote class="blockquote mt-3 p-3">
                                <p class="text-muted mb-0 fst-italic">" تعداد زیادی از معابر لورم اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند, با شوخ طبعی تزریق شده ، یا کلمات تصادفی که حتی کمی باورپذیر به نظر نمی رسند. "</p>
                            </blockquote>
                            <p class="text-muted">مزیت ریشه لاتین آن و بی معنی بودن نسبی لورم ایپسوم این است که متن توجه را به خود جلب نمی کند یا توجه بیننده را از طرح منحرف نمی کند..</p>
                            <div class="post-meta mt-3">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow rounded border-0 mt-4">
                        <div class="card-body">
                            <h5 class="card-title mb-0">نظرات :</h5>

                            <ul class="media-list list-unstyled mb-0">
                                <li class="mt-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <a class="pe-3" href="#">
                                                <img src="{{URL::asset('main/images/client/01.jpg')}}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                            </a>
                                            <div class="commentor-detail">
                                                <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">لورنزو پیترسون</a></h6>
                                                <small class="text-muted">اردیبهشت 1400 - ساعت 14:40 بعد ظهر</small>
                                            </div>
                                        </div>
                                        <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> پاسخ </a>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-muted fst-italic p-3 bg-light rounded">" تعداد زیادی از معابر لورم اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند, با شوخ طبعی تزریق شده "</p>
                                    </div>
                                </li>

                                <li class="mt-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <a class="pe-3" href="#">
                                                <img src="{{URL::asset('main/images/client/02.jpg')}}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                            </a>
                                            <div class="commentor-detail">
                                                <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading text-dark">تامی کاماچو</a></h6>
                                                <small class="text-muted">اردیبهشت 1400 - ساعت 15:40 بعد ظهر</small>
                                            </div>
                                        </div>
                                        <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> پاسخ </a>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-muted fst-italic p-3 bg-light rounded">" تعداد زیادی از معابر لورم اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند, با شوخ طبعی تزریق شده "</p>
                                    </div>
                                </li>

                                <li class="mt-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <a class="pe-3" href="#">
                                                <img src="{{URL::asset('main/images/client/03.jpg')}}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                            </a>
                                            <div class="commentor-detail">
                                                <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading text-dark">تامی کاماچو</a></h6>
                                                <small class="text-muted">شانزدهم اردیبهشت 1400 در ساعت 03:44 بعد از ظهر</small>
                                            </div>
                                        </div>
                                        <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> پاسخ </a>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-muted fst-italic p-3 bg-light rounded">" تعداد زیادی از معابر لورم اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند, با شوخ طبعی تزریق شده "</p>
                                    </div>

                                    <ul class="list-unstyled ps-4 ps-md-5 sub-comment">
                                        <li class="mt-4">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <a class="pe-3" href="#">
                                                        <img src="{{URL::asset('main/images/client/01.jpg')}}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                    </a>
                                                    <div class="commentor-detail">
                                                        <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">لورنزو پیترسون</a></h6>
                                                        <small class="text-muted">شانزدهم اردیبهشت 1400 در ساعت 03:44 بعد از ظهر</small>
                                                    </div>
                                                </div>
                                                <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> پاسخ </a>
                                            </div>
                                            <div class="mt-3">
                                                <p class="text-muted fst-italic p-3 bg-light rounded">" تعداد زیادی از معابر لورم اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند, با شوخ طبعی تزریق شده "</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card shadow rounded border-0 mt-4">
                        <div class="card-body">
                            <h5 class="card-title mb-0">ارسال نظر :</h5>

                            <form class="mt-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">نظر شما</label>
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
                                            <button type="submit" class="btn btn-primary">ارسال پیام</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div>
                    </div>

                    <div class="card shadow rounded border-0 mt-4">
                        <div class="card-body">
                            <h5 class="card-title mb-0">پست های اخیر :</h5>

                            <div class="row">
                                <div class="col-lg-6 mt-4 pt-2">
                                    <div class="card blog rounded border-0 shadow">
                                        <div class="position-relative">
                                            <img src="{{URL::asset('main/images/blog/01.jpg')}}" class="card-img-top rounded-top" alt="...">
                                            <div class="overlay rounded-top bg-dark"></div>
                                        </div>
                                        <div class="card-body content">
                                            <h5><a href="javascript:void(0)" class="card-title title text-dark">برنامه های خود را به روش خود طراحی کنید</a></h5>
                                            <div class="post-meta d-flex justify-content-between mt-3">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                                </ul>
                                                <a href="page-blog-detail.html" class="text-muted readmore">ادامه مطلب  <i class="uil uil-angle-left-b align-middle"></i></a>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <small class="text-light user d-block"><i class="uil uil-user"></i> کالوین لورس</small>
                                            <small class="text-light date"><i class="uil uil-calendar-alt"></i> اردیبهشت 1400</small>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-6 mt-4 pt-2">
                                    <div class="card blog rounded border-0 shadow">
                                        <div class="position-relative">
                                            <img src="{{URL::asset('main/images/blog/02.jpg')}}" class="card-img-top rounded-top" alt="...">
                                            <div class="overlay rounded-top bg-dark"></div>
                                        </div>
                                        <div class="card-body content">
                                            <h5><a href="javascript:void(0)" class="card-title title text-dark">برنامه ها چگونه دنیای اطلاعات را تغییر می دهند</a></h5>
                                            <div class="post-meta d-flex justify-content-between mt-3">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                                </ul>
                                                <a href="page-blog-detail.html" class="text-muted readmore">ادامه مطلب  <i class="uil uil-angle-left-b align-middle"></i></a>
                                            </div>
                                        </div>
                                        <div class="author">
                                            <small class="text-light user d-block"><i class="uil uil-user"></i> کالوین لورس</small>
                                            <small class="text-light date"><i class="uil uil-calendar-alt"></i> اردیبهشت 1400</small>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div>
                </div>
                <!-- BLog End -->

                <!-- START SIDEBAR -->
                <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 sidebar sticky-bar rounded shadow">
                        <div class="card-body">
                            <!-- SEARCH -->
                            <div class="widget">
                                <form role="search" method="get">
                                    <div class="input-group mb-3 border rounded">
                                        <input type="text" id="s" name="s" class="form-control border-0" placeholder="جستجوی کلمه کلیدی...">
                                        <button type="submit" class="input-group-text bg-transparent border-0" id="searchsubmit"><i class="uil uil-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!-- SEARCH -->

                            <!-- Categories -->
                            <div class="widget mb-4 pb-2">
                                <h5 class="widget-title">دسته بندیها </h5>
                                <ul class="list-unstyled mt-4 mb-0 blog-categories">
                                    <li><a href="jvascript:void(0)">مالی </a> <span class="float-end">13</span></li>
                                    <li><a href="jvascript:void(0)">شرکتی </a> <span class="float-end">90 </span></li>
                                    <li><a href="jvascript:void(0)">وبلاگ </a> <span class="float-end">18</span></li>
                                    <li><a href="jvascript:void(0)">کسب و کار</a> <span class="float-end">20</span></li>
                                    <li><a href="jvascript:void(0)">سرمایه گذاری </a> <span class="float-end">22</span></li>
                                </ul>
                            </div>
                            <!-- Categories -->

                            <!-- پست های اخیر -->
                            <div class="widget mb-4 pb-2">
                                <h5 class="widget-title">پست های اخیر</h5>
                                <div class="mt-4">
                                    <div class="clearfix post-recent">
                                        <div class="post-recent-thumb float-start"> <a href="jvascript:void(0)"> <img alt="img" src="images/blog/07.jpg" class="img-fluid rounded"></a></div>
                                        <div class="post-recent-content float-start"><a href="jvascript:void(0)">مشاوره شرکتی </a><span class="text-muted mt-2">اردیبهشت 1400</span></div>
                                    </div>
                                    <div class="clearfix post-recent">
                                        <div class="post-recent-thumb float-start"> <a href="jvascript:void(0)"> <img alt="img" src="images/blog/08.jpg" class="img-fluid rounded"></a></div>
                                        <div class="post-recent-content float-start"><a href="jvascript:void(0)">به تعادل باشکوه نگاه کنید</a> <span class="text-muted mt-2">اردیبهشت 1400</span></div>
                                    </div>
                                    <div class="clearfix post-recent">
                                        <div class="post-recent-thumb float-start"> <a href="jvascript:void(0)"> <img alt="img" src="images/blog/01.jpg" class="img-fluid rounded"></a></div>
                                        <div class="post-recent-content float-start"><a href="jvascript:void(0)">تحقیقات مالی.</a> <span class="text-muted mt-2">اردیبهشت 1400</span></div>
                                    </div>
                                </div>
                            </div>
                            <!-- پست های اخیر -->

                            <!-- TAG CLOUDS -->
                            <div class="widget mb-4 pb-2">
                                <h5 class="widget-title">برچسب های ابری</h5>
                                <div class="tagcloud mt-4">
                                    <a href="jvascript:void(0)" class="rounded">کسب و کار </a>
                                    <a href="jvascript:void(0)" class="rounded">مالی </a>
                                    <a href="jvascript:void(0)" class="rounded">بازاریابی</a>
                                    <a href="jvascript:void(0)" class="rounded">مدل </a>
                                    <a href="jvascript:void(0)" class="rounded"> عروس </a>
                                    <a href="jvascript:void(0)" class="rounded">سبک زندگی </a>
                                    <a href="jvascript:void(0)" class="rounded">مسافرت </a>
                                    <a href="jvascript:void(0)" class="rounded">زیبایی </a>
                                    <a href="jvascript:void(0)" class="rounded">ویدئو </a>
                                    <a href="jvascript:void(0)" class="rounded">صدا </a>
                                </div>
                            </div>
                            <!-- TAG CLOUDS -->

                            <!-- SOCIAL -->
                            <div class="widget">
                                <h5 class="widget-title">دنبال کردن ما</h5>
                                <ul class="list-unstyled social-icon mb-0 mt-4">
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
                                </ul><!--end icon-->
                            </div>
                            <!-- SOCIAL -->
                        </div>
                    </div>
                </div><!--end col-->
                <!-- END SIDEBAR -->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Blog End -->
@endsection
@section('custom_js')

@endsection

