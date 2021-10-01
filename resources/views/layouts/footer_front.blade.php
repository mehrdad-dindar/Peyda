<!-- Footer Start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2" data-aos="fade-up" data-aos-duration="1000">
                <a href="#" class="logo-footer">
                    <img src="{{ URL::asset('front/img/logo-white-1.png')}}" height="90" alt="">
                </a>
                <p class="mt-4" style="text-align: justify">پیدا سرویس ماندگار، بزرگترین و تخصصی ترین مرکز خصوصی ارائه دهنده خدمات فراگارانتی گوشی های تلفن همراه در ایران !</p>

                <li style="list-style: none"><a href="https://goo.gl/maps/nqiQebt1khAX4Js27" class="text-foot"><i class="uil uil-map-marker me-1"></i> تجریش، خیابان مقدس اردبیلی، پلاک 144، مجتمع تجاری میلان، طبقه اول تجاری، واحد 28</a></li>
                <li style="list-style: none"><a href="tel:+982188540034" class="text-foot"><i class="uil uil-phone me-1"></i> 02188540034 - 02188540111 </a></li>
                <li style="list-style: none"><a href="mailto:info@peydaservice.com" class="text-foot"><i class="uil uil-envelope me-1"></i> info@peydaservice.com </a></li>
                <li style="list-style: none"><a href="#" class="text-foot"><i class="uil uil-mailbox me-1"></i> 1985675124 </a></li>

            </div><!--end col-->

            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0" data-aos="fade-up" data-aos-duration="1400">
                <h5 class="text-light footer-head mt-5">پیدا سرویس ماندگار </h5>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="{{route('about_us')}}" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> فراگارانتی چیست؟ </a></li>
                    <li><a href="{{route('our_services')}}" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> خدمات تحت پوشش  </a></li>
                    <li><a href="{{route('panel')}}" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> خرید فراگارانتی </a></li>
                    <li><a href="{{route('use_services')}}" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> شرایط و ضوابط </a></li>
                    <li><a href="{{route('archive_blog')}}" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> آخرین اخبار و مقالات </a></li>
                    <li><a href="{{route('about_us')}}" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> درباره ما </a></li>
                    <li><a href="{{route('contact_us')}}" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> تماس با ما </a></li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0" data-aos="fade-up" data-aos-duration="1800">
                <h5 class="text-light footer-head mt-5">لینک های مفید </h5>
                <ul class="list-unstyled footer-list mt-4">
                    <li><a href="{{route('login')}}" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> 	ورود / عضویت
                        </a></li>
                    <li><a href="{{route('shop')}}" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> فروشگاه محصولات  </a></li>
                    <li><a href="#" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> سایر خدمات </a></li>
                    <li><a href="#" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> بیمه آتش‌سوزی منزل </a><span
                            class="badge bg-primary ms-2">به زودی</span></li>
                    <li><a href="#" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> بیمه زلزله </a><span
                            class="badge bg-primary ms-2">به زودی</span></li>
                    <li><a href="#" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> بیمه اعضای بدن </a><span
                            class="badge bg-primary ms-2">به زودی</span></li>
                    <li><a href="#" class="text-foot"><i class="uil uil-angle-left-b me-1"></i> هر ایرانی یک وکیل  </a><span
                            class="badge bg-primary ms-2">به زودی</span></li>
                </ul>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0" data-aos="fade-up" data-aos-duration="2200">
                <h5 class="text-light footer-head mt-5">خبرنامه </h5>
                <p class="mt-4">ثبت نام کنید و آخرین اخبار و تخفیفات را از طریق ایمیل دریافت کنید.</p>
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="foot-subscribe mb-3">
                                <label class="form-label">ایمیل خود را بنویسید <span
                                        class="text-danger">*</span></label>
                                <div class="form-icon position-relative">
                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                    <input type="email" name="email" id="emailsubscribe"
                                           class="form-control ps-5 rounded" placeholder="ایمیل شما: " required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-grid">
                                <input type="submit" id="submitsubscribe" name="send" class="btn btn-soft-primary"
                                       value="خبرنامه">
                            </div>
                        </div>
                        <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook"
                                                                                                         class="fea icon-sm fea-social"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="https://instagram.com/peydaservice" class="rounded"><i
                                        data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter"
                                                                                                         class="fea icon-sm fea-social"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin"
                                                                                                         class="fea icon-sm fea-social"></i></a>
                            </li>
                        </ul><!--end icon-->
                    </div>
                </form>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-8">
                <div class="text-sm-start">
                    <p class="mb-0">© 2021 Copyright ©
                        طراحی، توسعه و دیجیتال مارکتینگ تخصصی
                        <a href="https://nokarto.com" target="_blank" class="text-success">شرکت
                            انفورماتیک صنعتی نوکارتو</a>
                    </p>
                </div>
            </div><!--end col-->

            <div class="col-sm-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <ul class="list-unstyled text-sm-end mb-0">
                    <li class="list-inline-item"><a href="https://nokarto.com" target="_blank"><img
                                src="{{ URL::asset('main/images/nokarto-logo-white.png')}}"
                                class="avatar avatar-ex-sm nokarto"
                                title="شرکت انفورماتیک صنعتی نوکارتو" alt=""></a></li>
                </ul>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</footer><!--end footer-->
<!-- Footer End -->

<!-- Back to top -->
<a onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i
        data-feather="arrow-up" class="icons"></i></a>
<!-- Back to top -->


<!-- javascript -->
<script src="{{ URL::asset('main/js/bootstrap.bundle.min.js')}}"></script>
<!-- SLIDER -->
<script src="{{ URL::asset('main/js/tiny-slider.js')}}"></script>
<!-- Animation -->
<script src="{{ URL::asset('main/js/aos.js')}}"></script>
<!-- Icons -->
<script src="{{ URL::asset('main/js/feather.min.js')}}"></script>
<!-- Switcher -->
<script src="{{ URL::asset('main/js/switcher.js')}}"></script>
<!-- Main Js -->
<script src="{{ URL::asset('main/js/plugins.init.js')}}"></script>
<!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
<script src="{{ URL::asset('main/js/app.js')}}"></script>
<!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const topIMG = "{{ URL::asset('front/img/logo-white-1.png') }}";
        const sclIMG = "{{ URL::asset('front/img/logo-colored-1.png') }}";
        const logo = document.getElementById("img_logo");
        if (screen.width >= 991) {
            logo.src = topIMG;
        }else {
            logo.src= sclIMG;
        }
    });
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
                if (screen.width > 991) {
                    logo.src = topIMG;
                }else {
                    logo.src= sclIMG;
                }
            }
        }
    }

    window.addEventListener('scroll', (ev) => {
        ev.preventDefault();
        windowScroll();
    })
</script>
@yield('custom_js')
