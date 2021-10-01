@extends('layouts.master_front')
@section('title','فراگارانتی پیدا سرویس چیست؟')
@section('custom_css')
@endsection
@section('content')
    <!-- Hero Start -->
    <section class="bg-half d-table w-100"
             style="background: url('{{ URL::asset('front/img/shop/faragaranti.jpg')}}') center center;background-size: cover">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h3 class="title text-white title-dark"> فراگارانتی پیدا سرویس چیست ؟ </h3>
                        {{--<div class="page-next">
                             <nav aria-label="breadcrumb" class="d-inline-block">
                                 <ul class="breadcrumb bg-white rounded shadow mb-0">
                                     <li class="breadcrumb-item"><a href="index.html">لنـدریـک </a></li>
                                     <li class="breadcrumb-item"><a href="#">وبلاگ </a></li>
                                     <li class="breadcrumb-item active" aria-current="page">جزئیات وبلاگ</li>
                                 </ul>
                             </nav>
                        </div>--}}
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
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="title-heading mt-4">
                        <h1 class="heading mb-3"> فراگارانتی پیدا سرویس چیست؟</h1>
                        <p class="para-desc text-muted" style="text-align: justify">
                            شرکت پیدا سرویس ماندگار برای حمایت از مشتریان عزیز به ارائه‌ی خدمات فراگارانتی می‌پردازد.
                            جالب است بدانید که این خدمات بدون واسطه و در خود شرکت انجام می‌شود بنابراین شما می‌توانید در
                            کوتاه‌ترین زمان بدون اتلاف وقت و با خیال راحت در امنیت کامل خدمت مورد نیاز خود را دریافت
                            نمایید.
                        </p>
                        <!--<div class="mt-4 pt-2">
                            <a href="page-services.html" class="btn btn-primary m-1">Our خدمات </a>
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-icon btn-pills btn-primary m-1 lightbox"><i data-feather="video" class="icons"></i></a><span class="fw-bold text-uppercase small align-middle ms-2">اکنون تماشا کنید </span>
                        </div>-->
                    </div>
                </div><!--end col-->

                <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <img src="{{URL::asset('main/images/MAIN.png')}}" class="img-fluid" alt="">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->
    <!-- Feature Start
    <section class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-flip-h h1 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>ساخته شده برای همه</h5>
                            <p class="text-muted mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است..</p>
                        </div>
                    </div>
                </div>end col

                <div class="col-md-4 col-12 mt-5 mt-sm-0">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-minus-path h1 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>طراحی تعاملی</h5>
                            <p class="text-muted mb-0">گفته می شود ، یک محقق لاتین با تدوین کلمه ای غیر معمول ، اصل متن ایجاد شده را تأسیس کرد.</p>
                        </div>
                    </div>
                </div>end col

                <div class="col-md-4 col-12 mt-5 mt-sm-0">
                    <div class="features text-center">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-layers-alt h1 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>همه چیز را بساز</h5>
                            <p class="text-muted mb-0">گفته می شود ، یک محقق لاتین با تدوین کلمه ای غیر معمول ، اصل متن ایجاد شده را تأسیس کرد.</p>
                        </div>
                    </div>
                </div>end col
            </div>end row
        </div>end container
    </section>end section
     Feature End -->
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">فراگارانتی <a href="" data-bs-toggle="tooltip"
                                                             data-bs-placement="top"
                                                             title=" (گوشی همراه، تبلت و لپ‌تاپ)">تجهیزات الکترونیک</a>
                            شرکت پیدا سرویس </h4>
                        <p class="text-muted para-desc mx-auto mb-0">پوشش‌های خدمات عبارتند از:</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div>


    <!-- counter Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title me-lg-5">
                        <h4 class="title mb-4">شکستگی بر اثر ضربه </h4>
                        <p class="text-muted" style="text-align: justify">
                            سرعت زندگی این روزها بسیار زیاد شده است. برای عقب نماندن از حرکت سریع جهان ما هم باید دقت و
                            سرعت عمل‌مان را بالا ببریم. اما ممکن است گاهی در لابه‌لای مشغله و دویدن‌ها گوشی از
                            دست‌هایمان بلغزد و بر زمین بیافتد! اصلا جای نگرانی نیست سرعت‌تان را کاهش ندهید شرکت <span
                                class="text-primary fw-bold">پیدا سرویس ماندگار</span> بدون اتلاف وقت خسارت وارده را
                            جبران می‌کند و در کوتاه‌ترین زمان گوشی تلفن همراه‌تان را تعمیر خواهدکرد.
                        </p>
                        <!--<a href="javascript:void(0)" class="btn btn-outline-primary">شروع کنید <i class="uil uil-angle-left-b"></i></a>-->
                    </div>
                </div><!--end col-->

                <div class="col-md-6 order-1 order-md-2">
                    <img src="{{ URL::asset('main/images/broken.png')}}" class="img-fluid" alt="">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <!--<div class="container mt-100 mt-60">
            <div class="row justify-content-center" id="counter">
                <div class="col-md-4 mt-4 pt-2">
                    <div class="counter-box text-center px-lg-4">
                        <h2 class="mb-0 text-primary display-4"><span class="counter-value" data-target="97">3</span>%</h2>
                        <h5 class="counter-head">مشتریان خوشحال </h5>
                        <p class="text-muted mb-0">به نظر می رسد که تنها تکه هایی از متن اصلی در متن لورم اپیسوم که امروزه استفاده می شود باقی مانده است.</p>
                    </div>&lt;!&ndash;end counter box&ndash;&gt;
                </div>&lt;!&ndash;end col&ndash;&gt;

                <div class="col-md-4 mt-4 pt-2">
                    <div class="counter-box text-center px-lg-4">
                        <h2 class="mb-0 text-primary display-4"><span class="counter-value" data-target="15">1</span>+</h2>
                        <h5 class="counter-head">جوایز </h5>
                        <p class="text-muted mb-0">به نظر می رسد که تنها تکه هایی از متن اصلی در متن لورم اپیسوم که امروزه استفاده می شود باقی مانده است.</p>
                    </div>&lt;!&ndash;end counter box&ndash;&gt;
                </div>&lt;!&ndash;end col&ndash;&gt;

                <div class="col-md-4 mt-4 pt-2">
                    <div class="counter-box text-center px-lg-4">
                        <h2 class="mb-0 text-primary display-4"><span class="counter-value" data-target="98">3</span>%</h2>
                        <h5 class="counter-head">پروژه های تکمیلی</h5>
                        <p class="text-muted mb-0">به نظر می رسد که تنها تکه هایی از متن اصلی در متن لورم اپیسوم که امروزه استفاده می شود باقی مانده است.</p>
                    </div>&lt;!&ndash;end counter box&ndash;&gt;
                </div>&lt;!&ndash;end col&ndash;&gt;
            </div>&lt;!&ndash;end row&ndash;&gt;
        </div>--><!--end container-->
    </section><!--end section-->
    <!-- counter End -->

    <!-- Testimonial Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{URL::asset('main/images/watered.png')}}" class="img-fluid me-md-4" alt="">
                </div><!--end col-->

                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-4">آب‌خوردگی و نفوذ مایعات</h4>
                        <p class="text-muted" style="text-align: justify">
                            معمولا شرکت‌های سازنده موبایل، حتی برای گوشی‌های ضدآب، زیان‌های وارده از رطوبت‌دیدگی و
                            آب‌خوردگی را پشتیبانی نمی‌کنند پس اگر گوشی همراه شما در اثر تماس با آب دچار آسیب شود، شامل
                            ضوابط گارانتی شرکت طرف قرارداد نیست. بهترین راه جلوگیری از این اتفاق، داشتن فراگارانتی شرکت
                            پیدا سرویس با هزینه قابل قبول سالیانه برای گوشی‌های همراه شما است. با دارا بودن فراگارانتی
                            پیدا سرویس، در صورت خیس شدن تلفن همراه‌تان لازم نیست برای تعمیرات هزینه‌ی اضافی پرداخت
                            نمائید تنها کاری که باید انجام دهید تحویل گوشی سالم از شرکت پیدا سرویس است.
                        </p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <!--   <div class="container mt-100 mt-60">
               <div class="row justify-content-center">
                   <div class="col-12 text-center">
                       <div class="section-title mb-4 pb-2">
                           <h4 class="title mb-4">مشتریان خوشحال ما</h4>
                           <p class="text-muted para-desc mx-auto mb-0">شروع به کار با <span class="text-primary fw-bold"> لنـدریـک  </span> که می تواند هر آنچه را که شما برای ایجاد آگاهی ، ایجاد ترافیک ، اتصال به آن نیاز دارید فراهم کند.</p>
                       </div>
                   </div>&lt;!&ndash;end col&ndash;&gt;
               </div>&lt;!&ndash;end row&ndash;&gt;

               <div class="row">
                   <div class="col-12 mt-4">
                       <div class="tiny-three-item">
                           <div class="tiny-slide text-center">
                               <div class="client-testi rounded shadow m-2 p-4">
                                   <img src="images/client/amazon.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                   <p class="text-muted mt-4">" به نظر می رسد که تنها تکه هایی از متن اصلی در متن لورم اپیسوم که امروزه استفاده می شود باقی مانده است. "</p>
                                   <h6 class="text-primary">- توماس لوری</h6>
                               </div>
                           </div>

                           <div class="tiny-slide text-center">
                               <div class="client-testi rounded shadow m-2 p-4">
                                   <img src="images/client/google.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                   <p class="text-muted mt-4">" به نظر می رسد که تنها تکه هایی از متن اصلی در متن لورم اپیسوم که امروزه استفاده می شود باقی مانده است. "</p>
                                   <h6 class="text-primary">- کارلوس</h6>
                               </div>
                           </div>

                           <div class="tiny-slide text-center">
                               <div class="client-testi rounded shadow m-2 p-4">
                                   <img src="images/client/lenovo.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                   <p class="text-muted mt-4">" به نظر می رسد که تنها تکه هایی از متن اصلی در متن لورم اپیسوم که امروزه استفاده می شود باقی مانده است. "</p>
                                   <h6 class="text-primary">- باباکارما</h6>
                               </div>
                           </div>

                           <div class="tiny-slide text-center">
                               <div class="client-testi rounded shadow m-2 p-4">
                                   <img src="images/client/paypal.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                   <p class="text-muted mt-4">" به نظر می رسد که تنها تکه هایی از متن اصلی در متن لورم اپیسوم که امروزه استفاده می شود باقی مانده است. "</p>
                                   <h6 class="text-primary">- جیل شبی</h6>
                               </div>
                           </div>

                           <div class="tiny-slide text-center">
                               <div class="client-testi rounded shadow m-2 p-4">
                                   <img src="images/client/shopify.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                   <p class="text-muted mt-4">" به نظر می رسد که تنها تکه هایی از متن اصلی در متن لورم اپیسوم که امروزه استفاده می شود باقی مانده است. "</p>
                                   <h6 class="text-primary">- دین لوس</h6>
                               </div>
                           </div>

                           <div class="tiny-slide text-center">
                               <div class="client-testi rounded shadow m-2 p-4">
                                   <img src="images/client/spotify.svg" class="img-fluid avatar avatar-ex-sm mx-auto" alt="">
                                   <p class="text-muted mt-4">" به نظر می رسد که تنها تکه هایی از متن اصلی در متن لورم اپیسوم که امروزه استفاده می شود باقی مانده است. "</p>
                                   <h6 class="text-primary">- چری استین </h6>
                               </div>
                           </div>
                       </div>
                   </div>&lt;!&ndash;end col&ndash;&gt;
               </div>&lt;!&ndash;end row&ndash;&gt;
           </div>--><!--end container-->

        <!--           <div class="container mt-100 mt-60">
                       <div class="row justify-content-center">
                           <div class="col-12 text-center">
                               <div class="section-title mb-4 pb-2">
                                   <h4 class="title mb-4">برای نامه اخبار جدید ما مشترک شوید</h4>
                                   <p class="text-muted para-desc mx-auto mb-0">شروع به کار با <span class="text-primary fw-bold"> لنـدریـک  </span> که می تواند هر آنچه را که شما برای ایجاد آگاهی ، ایجاد ترافیک ، اتصال به آن نیاز دارید فراهم کند.</p>
                               </div>
                           </div>&lt;!&ndash;end col&ndash;&gt;
                       </div>&lt;!&ndash;end row&ndash;&gt;

                       <div class="row justify-content-center mt-4 pt-2">
                           <div class="col-lg-7 col-md-10">
                               <div class="subcribe-form">
                                   <form class="ms-0">
                                       <input type="email" id="email" name="email" class="bg-white shadow rounded-pill" placeholder="ایمیل:">
                                       <button type="submit" class="btn btn-pills btn-primary">ارسال  <i class="uil uil-arrow-right"></i></button>
                                   </form>&lt;!&ndash;end form&ndash;&gt;
                               </div>&lt;!&ndash;end مشترک شدن فرم&ndash;&gt;
                           </div>&lt;!&ndash;end col&ndash;&gt;
                       </div>&lt;!&ndash;end row&ndash;&gt;
                   </div>--><!--end container-->
    </section><!--end section-->
    <!-- Testimonial End -->

    <!-- counter Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title me-lg-5">
                        <h4 class="title mb-4">نوسانات ولتاژ برق </h4>
                        <p class="text-muted" style="text-align: justify">
                            برای هر وسیله‌ی برقی امکان وقوع اتصالی وجود دارد. نوسان‌های برقی ممکن است باعث ایجاد مشکل در
                            سیستم‌عامل یا نرم‌افزارهای گوشی همراه شوند و در ادامه‌ی زیان‌های وارده ممکن است مدار محافظ
                            ورودی، شارژر و یا آی‌سی تلفن هم بسوزد. قطع به یقین خرید لوازم، هزینه و وقت زیادی خواهد گرفت.
                            افزون بر این اطمینان از اصل بودن لوازم جایگزین شده هم بسیار سخت است اما شما می‌توانید با
                            خرید فراگارانتی پیدا سرویس میزان خسارت‌های وارده را تا حد امکان کم کنید.
                        </p>
                        <!--<a href="javascript:void(0)" class="btn btn-outline-primary">شروع کنید <i class="uil uil-angle-left-b"></i></a>-->
                    </div>
                </div><!--end col-->

                <div class="col-md-6 order-1 order-md-2">
                    <img src="{{URL::asset ('main/images/electricity.png')}}" class="img-fluid" alt="">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

    </section><!--end section-->
    <!-- counter End -->

    <!-- Testimonial Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{URL::asset('main/images/chemical.png')}}" class="img-fluid me-md-4" alt="">
                </div><!--end col-->

                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-4">الکل و نفوذ مواد شیمیایی</h4>
                        <p class="text-muted" style="text-align: justify">
                            با شیوع روزافزون کرونا استفاده از الکل و مواد شیمیایی جهت ضدعفونی کردن سطوح و گوشی‌های همراه
                            رواج و افزایش پیدا کرده است. خالی از لطف نیست که بدانید مواد ضدعفونی و الکل به درگاه شارژر،
                            هندزفری و همین‌طور اسپیکرها نفوذ می‌کنند و باعث آسیب جدی تلفن خواهند شد. با خرید فراگارانتی
                            پیدا سرویس شما می‌توانید تا 70 درصد خسارت‌های وارده را جبران شده بدانید. </p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

    </section><!--end section-->
    <!-- Testimonial End -->

    <!-- counter Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title me-lg-5">
                        <h4 class="title mb-4">حوادث طبیعی و غیرمترقبه </h4>
                        <p class="text-muted" style="text-align: justify">
                            تلفن همراه مانند اتومبیل و خانه پیوسته در معرض خطر آتش‌سوزی یا خطر افتادن در آب، و یا آسیب
                            دیدن در زلزله است. شرکت <span class="text-primary fw-bold">پیدا سرویس ماندگار</span> تمام
                            بلایای طبیعی را تحت پوشش قرار می‌دهد. پیدا سرویس در همه‌ی حوادث و<span class="text-warning"> #تاهمیشه</span>
                            کنار شما خواهد ماند. </p>

                    </div>
                </div><!--end col-->

                <div class="col-md-6 order-1 order-md-2">
                    <img src="{{URL::asset('main/images/natural-accident.png')}}" class="img-fluid" alt="">
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

    </section><!--end section-->
    <!-- counter End -->

    <!-- Testimonial Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{URL::asset('main/images/hardware.png')}}" class="img-fluid me-md-4" alt="">
                </div><!--end col-->

                <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-4">مشکلات سخت‌افزاری</h4>
                        <p class="text-muted" style="text-align: justify">
                            به اختلالاتی گفته می‌شود که به دلیل بروزشان، عملکرد بخش یا تمامی قسمت‌های یک تلفن همراه با
                            مشکل مواجه می‌شود. سخت‌افزار قطعات فیزیکی و قابل لمس گوشی است. از مهم‌ترین قطعه‌های
                            سخت‌افزاری تلفن همراه هوشمند می‌توان به صفحه نمایشگر، دوربین‌ها، بلندگوها، مودم‌ها، حافظه و
                            ذخیره‌سازی، پردازنده تصویر و ویدئو، پردازنده گرافیکی، پردازنده مرکزی، آی‌سی‌ها و بردها اشاره
                            کرد. چنان‌چه به مشکلات سخت‌افزاری برخوردید کار را به <span class="text-primary fw-bold">پیدا سرویس ماندگار </span>
                            بسپارید.
                        </p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

    </section><!--end section-->
    <!-- Testimonial End -->
@endsection
@section('custom_js')

@endsection

