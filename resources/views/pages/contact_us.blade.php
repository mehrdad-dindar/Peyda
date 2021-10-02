@extends('layouts.master_front')
@section('title','تماس با ما')
@section('custom_css')
@endsection
@section('content')
    <!-- شوع آن -->
    <section class="bg-half d-table w-100"
             style="background: url('{{ URL::asset('front/img/shop/contact.jpg')}}') center center; background-size: cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title text-shadow-title">تماس با ما</h4>
                        {{--<div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="index.html">لنـدریـک </a></li>
                                    <li class="breadcrumb-item"><a href="#">صفحه </a></li>
                                    <li class="breadcrumb-item"><a href="#">تماس با ما</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">تماس با ما یک</li>
                                </ul>
                            </nav>
                        </div>--}}
                    </div>
                </div>  <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- پایان آن -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Start Contact -->
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card border-0 text-center features feature-clean">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-phone d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-3">
                            <h5 class="fw-bold">تلفن </h5>
                            <p class="text-muted">ساعات پاسخگویی 8 الی 22</p>
                            <a href="#" class="text-primary">۰۲۱-۸۸۵۴۰۱۱۱
                            </a><br>
                            <a href="#" class="text-primary">
                                ۰۲۱-۸۸۵۴۰۰۳۴
                            </a><br>
                            <a href="#" class="text-primary">

                                ۰۲۱-۸۸۵۴۶۵۳۹</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-3 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 text-center features feature-clean">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-envelope d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-3">
                            <h5 class="fw-bold">ایمیل </h5>
                            <p class="text-muted">جهت ارتباط با ما به نشانی زیر ایمیل بزنید</p>
                            <a href="mailto:info@peydaservice.com" class="text-primary">info@peydaservice.com</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-3 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 text-center features feature-clean">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-map-marker d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-3">
                            <h5 class="fw-bold">موقعیت </h5>
                            <p class="text-muted">تجریش خیابان مقدس اردبیلی پلاک 144 مجتمع تجاری میلان طبقه اول تجاری
                                واحد 28 </p>
                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7915.525673176609!2d46.32542404246615!3d38.06389198146334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDAzJzUzLjgiTiA0NsKwMTknMzkuNCJF!5e0!3m2!1sen!2s!4v1545664085241"
                               data-type="iframe" class="video-play-icon text-primary lightbox">نمایش در گوگل</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 text-center features feature-clean">
                        <div class="icons text-primary text-center mx-auto">
                            <i class="uil uil-mailbox d-block rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-3">
                            <h5 class="fw-bold">کدپستی </h5>
                            <p class="text-muted">کد پستی ما</p>
                            <a href="#" class="text-primary">1985675124</a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 pt-2 pt-sm-0 order-2 order-md-1">
                    <div class="card shadow rounded border-0">
                        <div class="card-body py-5">
                            <h4 class="card-title">در تماس باشید !</h4>
                            <div class="mt-3">
                                <form method="POST" action="{{route('save_contact')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">نام شما <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="name" id="name" type="text" class="form-control ps-5" placeholder="نام و نام خانوادگی :" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">شماره همراه <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="phone" class="fea icon-sm icons"></i>
                                                    <input name="phone_num" id="phone_num" type="text" class="form-control ps-5"
                                                           required placeholder="0912xxxxxxx">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">ایمیل شما <span class="text-muted" style="font-size: 8px">( اختیاری)</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input name="email" id="email" type="email"
                                                           class="form-control ps-5" placeholder="test@example.com">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">موضوع <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="book" class="fea icon-sm icons"></i>
                                                    <input name="subject" id="subject" class="form-control ps-5"
                                                           placeholder="موضوع  :">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">نظرات <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="message-circle"
                                                       class="fea icon-sm icons clearfix"></i>
                                                    <textarea name="comments" id="comments" rows="4"
                                                              class="form-control ps-5" placeholder="پیام :"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @captcha
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <input type="submit" class="btn btn-primary" value="ارسال پیام">
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div><!--end custom-form-->
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 order-1 order-md-2">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <img src="{{URL::asset('front/img/contact.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container-fluid mt-100 mt-60">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="card map border-0">
                        <div class="card-body p-0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.1140039925394!2d51.40919461172771!3d35.79713446652771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e06162c8a49ff%3A0x8094d5252f917e0!2sMilan%20Shopping%20Center!5e0!3m2!1sen!2s!4v1632903020550!5m2!1sen!2s"
                                width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                            {{--  <iframe src="" style="border:0" allowfullscreen></iframe>--}}
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End contact -->
@endsection
@section('custom_js')

@endsection

