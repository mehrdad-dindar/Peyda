@extends('layouts.master_front')
@section('title','هدیه ویژه ما به شما')
@section('custom_css')
@endsection
@section('content')
    <!-- Hero Start -->
    <section class="bg-half d-table w-100" style="background: url('{{ URL::asset('main/images/gift.png')}}') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h3 class="title text-white title-dark"> هدیه ویژه ما به شما </h3>
                        <!-- <div class="page-next">
                             <nav aria-label="breadcrumb" class="d-inline-block">
                                 <ul class="breadcrumb bg-white rounded shadow mb-0">
                                     <li class="breadcrumb-item"><a href="index.html">لنـدریـک </a></li>
                                     <li class="breadcrumb-item"><a href="#">وبلاگ </a></li>
                                     <li class="breadcrumb-item active" aria-current="page">جزئیات وبلاگ</li>
                                 </ul>
                             </nav>
                         </div>-->
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

    <!-- Start Terms & Conditions -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="card shadow border-0 rounded">
                        <div class="card-body">
                            <h5 class="card-title">هدیه ویژه ما به شما</h5>
                            <p class="text-muted" style="text-align: justify">
                                شرکت <span class="text-primary fw-bold">پیدا سرویس ماندگار</span> در جهت ارائه خدمات نوین و بی‌رقیب خود با تقدیم این هدیه‌ی ویژه و خاص به شما مشتریان گران‌قدر ثابت می‌کند تا چه اندازه به فکر رفاه و امنیت شما عزیزان است. خدماتی که شامل بیمه هستند می‌توانند در دسته‌ی جذاب‌ترین سرویس‌ها در نظر گرفته شوند. مدیران و کارشناسان مجرب شرکت پیدا سرویس ماندگار تصمیم گرفتند برای احترام هر چه بیشتر به مشتریان خود خدمات بیمه آتش‌سوزی منزل تا سقف 500،000،000 ریال را به صورت رایگان برای ایشان در نظر بگیرند. چنانچه تمایل داشته باشید مقدار ارزش بیمه را بیشتر نمائید می‌توانید با پرداخت هزینه‌ای جزئی اعتبارتان را افزایش دهید.
                            </p>

                            <p class="text-muted" style="text-align: justify">
                                لازم است بدانید که کشور عزیزمان ایران جزو ده کشور آسیب‌پذیر دنیا در بخش حوادث طبیعی به حساب می‌آید و متاسفانه آتش‌سوزی نیز یکی از پر تکرارترین حوادث رایج در ایران است. روزانه بیشتر از 50 حادثه‌ی آتش‌سوزی در شهرهای ایران اتفاق می‌افتد. حوادثی از این دست علاوه بر خسارت‌های جانی جبران‌ناپذیر، خسارت‌های مالی بسیاری برای افراد به وجود می‌آورد که البته با بیمه آتش‌سوزی می‌توان زیان‌های مالی را تا حد بسیار زیادی جبران کرد.
                            </p>

                            <p class="text-muted" style="text-align: justify">
                                لازم است بدانید که کشور عزیزمان ایران جزو ده کشور آسیب‌پذیر دنیا در بخش حوادث طبیعی به حساب می‌آید و متاسفانه آتش‌سوزی نیز یکی از پر تکرارترین حوادث رایج در ایران است. روزانه بیشتر از 50 حادثه‌ی آتش‌سوزی در شهرهای ایران اتفاق می‌افتد. حوادثی از این دست علاوه بر خسارت‌های جانی جبران‌ناپذیر، خسارت‌های مالی بسیاری برای افراد به وجود می‌آورد که البته با بیمه آتش‌سوزی می‌توان زیان‌های مالی را تا حد بسیار زیادی جبران کرد.
                            </p>

                            <p class="text-muted" style="text-align: justify">شرکت پیدا سرویس ماندگار <span class="text-warning"> #تاهمیشه</span> با افتخار کنار مشتریان خود می‌ایستد و تضمین می‌کند که خدماتی با عالی‌ترین کیفیت را عرضه نماید.      </p>




                            <!--<div class="accordion mt-4 pt-2" id="buyingquestion">
                                <div class="accordion-item rounded">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            چگونه کار می کند؟
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#buyingquestion">
                                        <div class="accordion-body text-muted bg-white">
                                            تعداد زیادی از معابر لورم اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item rounded mt-2">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            آیا برای استفاده از لندریک به طراح نیاز دارم؟
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#buyingquestion">
                                        <div class="accordion-body text-muted bg-white">
                                            تعداد زیادی از معابر لورم اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item rounded mt-2">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            برای شروع فروش چه کاری باید انجام دهم؟
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#buyingquestion">
                                        <div class="accordion-body text-muted bg-white">
                                            تعداد زیادی از معابر لورم اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item rounded mt-2">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button border-0 bg-light collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            با دریافت سفارش چه اتفاقی می افتد؟
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                                        data-bs-parent="#buyingquestion">
                                        <div class="accordion-body text-muted bg-white">
                                            تعداد زیادی از معابر لورم اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <a href="javascript:void(0)" class="btn btn-primary mt-2 me-2">تایید </a>
                                <a href="javascript:void(0)" class="btn btn-outline-primary mt-2">لغو </a>
                            </div>-->
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Terms & Conditions -->
@endsection
@section('custom_js')

@endsection
