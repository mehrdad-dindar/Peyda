@extends('layouts.master_front')
@section('title','صفحه نخست')
@section('custom_css')
@endsection
@section('content')<!-- Hero Start -->
<section class="bg-half d-table w-100" style="background: url('{{ URL::asset('main/images/blog/03.jpg')}}') center center;">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="page-next-level">
                    <h2 class="text-white"> اینترنت ملی چیست؟ نمونه‌هایی در کوبا، کره شمالی، روسیه و چین </h2>
                    <ul class="list-unstyled mt-4">
                        <li class="list-inline-item h6 user text-light me-2"><i class="mdi mdi-account"></i> نویسنده پیدا سرویس
                        </li>
                        <li class="list-inline-item h6 date text-light"><i class="mdi mdi-calendar-check"></i> مهر
                            1400
                        </li>
                    </ul>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            <ul class="breadcrumb bg-white rounded shadow mb-0">
                                <li class="breadcrumb-item"><a href="index.html">پیدا سرویس </a></li>
                                <li class="breadcrumb-item"><a href="#">وبلاگ </a></li>
                                <li class="breadcrumb-item active" aria-current="page">اینترنت ملی چیست؟ نمونه‌هایی در کوبا، کره شمالی، روسیه و چین</li>
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
                    <img src="{{ URL::asset('main/images/blog/03.jpg')}}" class="img-fluid rounded-top" alt="">
                    <div class="card-body content">
                        {{--<h6><i class="mdi mdi-tag text-primary me-1"></i><a href="javscript:void(0)"
                                                                            class="text-primary">نرم افزار </a>, <a
                                href="javscript:void(0)" class="text-primary"> اپلیکیشن </a></h6>--}}
                        <p class="text-muted mt-3 text-justify">طرح صیانت از فضای مجازی یا اینترنت ملی طرحی است که اخیراً در مجلس مطرح شده است. عملی شدن این طرح می‌تواند اینترنت و مسائل مربوط به آن را در کشور ایران به میزان چشمگیری دگرگون کند. مجلس اخیراً طرح صیانت از حقوق افراد در فضای مجازی را برای تجزیه‌‌وتحلیل به کمیسیون‌ها فرستاد تا اگر تصویب شد جهت پیاده‌‌سازی به شورای نگهبان ارسال گردد. با تصویب این طرح در مجلس، اینترنت در کشور عزیزمان ایران مرحله‌‌ای دیگر در جهت ملی شدن پیش خواهد برد. این مسئله اهمیت زیادی برای کاربران داخل کشور دارد.</p>
                        <blockquote class="blockquote mt-3 p-3">
                            <p class="text-muted mb-0 fst-italic">اینک پس از حواشی‌ این طرح، بار دیگر این موضوع بیان شده است. در ادامه خواهیم دانست که اینترنت ملی به چه معناست و با عملی شدن آن، چه تحولاتی در اینترنت صورت خواهد گرفت.</p>
                        </blockquote>
                        <h2 class="text-muted mt-3"> اینترنت ملی چیست؟</h2>
                        <p class="text-muted mt-3 text-justify">اینترنت ملی نوعی پلتفرم بسته بر مبنای پروتکل‌های اینترنتی است که به‌وسیله دولت کشورها و به‌جای اینترنت جهانی و جهت نظارت اطلاعات و داده‌های مبادله شده درون شبکه استفاده می‌شود. اینترنت ملی اغلب شامل خدماتی است که به‌‌جای سرویس‌های خارجی مثل موتور جستجو، سرویس ایمیل، شبکه‌های اجتماعی و موارد دیگر استفاده می‌‌شوند.</p>
                        <h2 class="text-muted mt-3"> اینترنت ملی ایران چیست؟</h2>
                        <p class="text-muted mt-3 text-justify">اینترنت ملی ایران یا شبکه ملی اطلاعات، طرحی برای ایجاد پایه‌‌های مناسب و بادوام برای شبکه اینترانت ایران است. این طرح اول در سال 84 در وزارت ارتباطات طرح شد و پس از مطالعات‌‌ گوناگون در سال 89 به قانون پنجم توسعه اضافه شد و بنابر بیانات حجت‌الاسلام سعید رضا عاملی، دبیر شورای عالی انقلاب فرهنگی تا سال 98 تقریباً 19 هزار میلیارد تومان خرج داشته است.</p>
                        <p class="text-muted mt-3 text-justify">بر طبق صحبت‌‌های مسئولان، اینترانت ملی ایران می‌‌خواهد از خارج شدن ریکوئست‌های دسترسی از مراکز داده‌ای که درون کشور می‌‌باشند، جلوگیری کرده و به‌گونه‌ای این ریکوئست‌ها درون یک شبکه داخلی از طریق ارتباطات امن و خصوصی پردازش شوند. بااین‌وجود، همچنان مفاد طرح اینترنت ملی در ایران به شکل دقیق و مشخص بیان نشده و حدس‌های زیادی در رابطه با آن وجود دارد.</p>
                        <p class="text-muted mt-3 text-justify">در مدلی که تا الآن برای اینترانت ملی ایران بیان‌شده، ملی شدن اینترنت ایران به معنای قطع ارتباط با اینترنت جهانی نخواهد بود. این امر موردی است که وزیر ارتباطات آذری جهرمی نیز مکرراً روی آن تأکید داشته است. درواقع، طرح ملی برای شبکه جهانی اینترنت قرار است دسترسی به سایت‌های داخلی را سریع‌تر و با قیمت کمتر برای کاربران امکان‌‌پذیر کند.</p>
                        <p class="text-muted mt-3 text-justify">علاوه‌‌براین، اگر در شبکه ملی اطلاعات از سرورهای داخلی استفاده شود، امکان شناسایی صاحبان سایت‌ها و هاست‌های آنان فراهم می‌گردد و این‌گونه اشخاص می‌‌بایست از قانون‌‌های داخلی کشور حمایت کنند. همچنین، آن‌ها نسبت به اخبار، خدمات و اطلاعاتی که در اختیار کاربران قرار می‌دهند نیز وظیفه دارند. شرکت‌ها هم می‌‌بایست از دیتاسنترهای ایرانی استفاده و آدرس IP خویش را ثبت کنند.</p>
                        <p class="text-muted mt-3 text-justify">همچنین طبق صحبت‌‌های ابوالحسن فیروزآبادی، دبیر شورای عالی فضای مجازی، همه کاربران باید برای ادامه اعمال خود در فضای مجازی احراز هویت شوند. به همین علت، در سال 97 وزارت ارتباطات سامانه شاهکار را معرفی کرد. در این سامانه برنامه‌ها و سوشال مدیا‌های ایرانی توسط وصل شدن به آن قادرند کاربران خویش را با شماره تلفن و کد ملی احراز هویت کنند.</p>
                        <p class="text-muted mt-3 text-justify">یکی دیگر از مزایای‌ شبکه ملی اطلاعات این است که با ایجاد و کامل کردن آن در مواقعی مانند عدم برقراری ارتباط با اینترنت جهانی در مواقع چالش‌برانگیز، کاربران هنوز قادرند از سایت‌ها و خدمات اینترنتی که درون کشور وجود دارند، استفاده کنند. وقتی‌‌که در جریان قطع شدن کامل اینترنت در ایران در سال 98 ایجاد شد و دسترسی به اینترنت جهانی از 25 آبان تا 3 آذر قطع شد، سایت‌هایی که سرور آن‌ها درون کشور بود هنوز قادر به ادامه اعمال خود بود به کار خود بود.</p>
                        <h2 class="text-muted mt-3"> شبکه ملی اطلاعات کشورهای دیگر</h2>
                        <p class="text-muted mt-3 text-justify">استفاده از اینترنت ملی تا اکنون در بعضی از کشورها با اشکال گوناگونی وجود داشته است. کشورهای بسیاری جهت وجود ارتباط بین سازمان‌های خود یک شبکه اینترانت به وجود آورده‌‌اند، ولی این شبکه‌ها فقط ویژه سازمان‌های دولتی یا مصارف محدود بوده و مثل طرح اینترانت ملی ایران نیستند؛ برای نمونه، شبکه گلو (Glow) در اسکاتلند شبکه اینترانت آموزشی برای دانش‌‌آموزان و دانشجویان است که توسط اینترنت دسترسی خواهد داشت؛ اما شبکه ملی اطلاعات به‌طور گسترده‌‌تر در کشورهای دیگر مثل کره شمالی، کوبا، چین و روسیه عملی گشته است. در ذیل به شیوه کار اینترنت ملی در این کشورها و محدودیت‌های اینترنت در آن‌ها پرداخته شده است:</p>
                        <ol>
                            <li class="text-muted mt-3 h3">
                                <h3 class="text-muted mt-3"> اینترنت ملی کره شمالی با نام کوانگ‌میونگ</h3>
                            </li>
                            <p class="text-muted mt-3 text-justify">کره شمالی از جمله کشورهایی است که کمترین ارتباط را با دنیا دارد و اینترنت آن‌ها نیز به همین صورت است. شبکه ملی اطلاعات کشور شمالی کوانگ‌میونگ به معنای نور درخشان است. این شبکه طرح ملی برای شبکه جهانی اینترنت کره شمالی است و با وسواس بسیار به‌وسیله دولت این کشور نظارت می‌شود.</p>
                            <p class="text-muted mt-3 text-justify">خدمات و ارتباطات داخل این شبکه به‌وسیله دولت کنترل می‌شود و افراد به شکل جداگانه اجازه ایجاد هیچ‌گونه سایتی را ندارند و قبل از هر اقدامی می‌‌بایست توسط شبکه‌‌های دولتی این کار را انجام دهند. علاوه بر محدودیت‌های اینترنت در این کشور، با کمک سیستم‌‌عامل مبتنی بر لینوکس Red Star که به‌وسیله دولت این کشور ایجاد شده است، کلیه اعمال افراد دارای کامپیوتر و گوشی‌‌های هوشمند در کره شمالی تحت نظارت قرار دارد.</p>
                            <p class="text-muted mt-3 text-justify">کوانگ‌میونگ محدودترین گونه اینترنت ملی در دنیا است که حدوداً به شکل کامل از اینترنت جهانی سوا شده است. حتی در این شبکه جهت استفاده از کدهای HTML نیز قاعده‌‌های دیگری وضع شده است! مثلاً اندازه فونت اسم رهبران در کره شمالی می‌‌بایست در تمام سایت‌ها 20 درصد بزرگ‌تر از سایر حروف باشد.</p>
                            <li class="text-muted mt-3 h3">
                                <h3 class="text-muted mt-3"> شبکه ملی اطلاعات کوبا با نام ردکوبانا</h3>
                            </li>
                            <p class="text-muted mt-3 text-justify">اینترنت کوبا همانند کره شمالی محدود نیست و کاربران از داخل این کشور می‌‌توانند به اینترنت جهانی متصل شوند اما سرعت اینترنت جهانی در مقایسه با اینترنت داخلی کمتر‌ است. اینترنت داخلی این کشور به اسم ردکوبانا نمونه کوبایی ویکی‌پدیا، سرویس ایمیل و نقشه و موتور جستجوی ملی و غیره است.</p>
                            <p class="text-muted mt-3 text-justify">البته پایه‌‌های اینترنت در کشور کوبا همچنان در حال پیشرفت است؛ برای نمونه، اخیراً در سال 2018 اینترنت موبایل در کشور کوبا عرضه شد و یک سال بعد هم متصل شدن به اینترنت توسط WiFi خانگی قانونی شد. به همین سبب، با توسعه گسترده اینترنت امکان حفظ رقابت و محبوبیت گذشته اینترنت ملی در این کشور تقریباً غیرممکن است.</p>
                            <li class="text-muted mt-3 h3">
                                <h3 class="text-muted mt-3"> اینترنت ملی روسیه با نام رونت</h3>
                            </li>
                            <p class="text-muted mt-3 text-justify">ایجاد اینترنت ملی روسیه همچنان نیازمند بررسی‌‌های متعدد است. با توجه به زیرساخت‌های بسیاری که برای آن در نظر گرفته شده است، شبکه ملی اینترنت این کشور در حالت تئوری تشابه بسیاری به اینترانت ملی کشور ایران و چین دارد و در آینده‌‌ای نزدیک کلیه ترافیک داخلی این کشور را درون شبکه ملی اینترانت حفظ می‌‌کند. برقراری ارتباط با اینترنت جهانی فقط توسط درگاه‌های ویژه‌‌ای که قابل فیلتر شدن و کنترل بر محتوا هستند، امکان‌‌پذیر خواهد بود.</p>
                            <li class="text-muted mt-3 h3">
                                <h3 class="text-muted mt-3"> شبکه ملی اطلاعات چین با نام دیوار آتشین</h3>
                            </li>
                            <p class="text-muted mt-3 text-justify">دیوار آتشین که طبق صحبت‌‌های سعیدرضا عاملی نمونه‌‌ای از اینترانت ملی ایران نیز است درواقع، یک کانال ملی مثل کوانگ‌میونگ در کره شمالی و رونت در روسیه نخواهد بود. باوجود محدودیت‌های بسیار سخت‌گیرانه اینترنت در چین ازنظر سانسور و فیلتر کردن سایت‌ها، اینترنت این کشور به یک تافته جدا بافته از اینترنت جهانی تبدیل گشته است.</p>
                            <p class="text-muted mt-3 text-justify">دیوار آتشین چین مثل شبکه ملی اطلاعات ایران کانال جداگانه ندارد؛ بلکه از یک شبکه وسیع از برنامه‌ها و سرویس‌‌های گوناگون است. چینی‌ها خود را از اینترنت جهانی سوا نکردند و در عمل یک اجتماع کامل از سرویس‌‌ها و اپلیکیشن‌‌های گوناگون ملی ایجاد کرده و آن‌ها را به‌جای سرویس‌های جهانی فیلتر شده موجود در این کشور مورداستفاده قراردادند؛ مانند WeChat که با بیش از 1 میلیارد کاربر در ماه جایگزین برای FaceBook شده یا WeiBo که یک جایگزین برای twitter است.</p>
                            <p class="text-muted mt-3 text-justify">درواقع، دیوار آتشین چین یک اینترنت ملی محسوب نمی‌شود ولی بااین‌وجود کلیه محدودیت‌های ایجادشده توسط شبکه ملی اطلاعات را در خود دارد و به الگویی برای کشورهای دیگر که متقاضی اینترنت ملی هستند بدا گشته است.</p>
                        </ol>
                        <h2 class="text-muted mt-3"> پاسخ به چند سؤال مهم درزمینه اینترنت ملی ایران</h2>
                        <ol>
                            <li class="text-muted mt-3 h4">
                                <h4 class="text-muted mt-3"> آیا اینترنت ایران ملی خواهد شد؟</h4>
                            </li>
                            <p class="text-muted mt-3 text-justify">اینترنت ایران از سال 84 در روند ملی شدن بوده است و با توجه به اخباری که در طول چند سال اخیر انتشاریافته و طرح صیانت در مجلس، احتمال عملی شدن این طرح در آینده بسیار بالا است.</p>
                            <li class="text-muted mt-3 h4">
                                <h4 class="text-muted mt-3"> در صورت ملی شدن اینترنت، چه مسائلی مبنای کار آن قرار خواهد گرفت؟</h4>
                            </li>
                            <p class="text-muted mt-3 text-justify">با ملی شدن اینترنت، اپلیکیشن‌ها و سایت‌های داخلی باید از دیتاسنترهای ایرانی استفاده کنند. این امر موجب می‌‌شود ترافیک داخلی همانند گذشته از کشور خارج نشود و با سرعت بالاتری منتقل شود. علاوه‌‌برآن، با توجه به اینکه خدمات و سرویس‌های داخلی به سرورهای خارجی وابسته نیستند، در شرایط بحرانی و قطعی اینترنت جهانی امکان ادامه سرویس‌دهی خود را خواهند داشت.</p>
                            <p class="text-muted mt-3 text-justify">علاوه‌‌براین، طبق سخنان رئیس شورای عالی فضای مجازی، پس از ملی شدن اینترنت کلیه کاربرانی که از سایت‌ها و اپلیکیشن‌های ایرانی استفاده می‌کنند، توسط سامانه شاهکار احراز هویت خواهند گشت.</p>
                            <li class="text-muted mt-3 h4">
                                <h4 class="text-muted mt-3"> روش استفاده از اینترنت ملی به چه صورت است؟</h4>
                            </li>
                            <p class="text-muted mt-3 text-justify">جهت استفاده از شبکه ملی اطلاعات کار نیازمند انجام اقدام ویژه‌‌ای نیست. ارتباط کاربران به‌‌صورت خودکار توسط اپراتور نظارت شده و ایجاد می‌شود. درصورتی‌که سایت یا برنامه‌‌ی مورداستفاده ایرانی باشد، به‌صورت خودکار از شبکه ملی اطلاعات استفاده می‌کند؛ وگرنه به اینترنت جهانی متصل خواهند شد.</p>
                        </ol>
                        <h2 class="text-muted mt-3"> کلام آخر</h2>
                        <p class="text-muted mt-3 text-justify">طبق خبرهای تاکنون، اینترنت ملی ایران در آینده‌‌ای نزدیک راه‌‌اندازی شده و احتمالاً اینترنتی مثل دیوار آتشین چین را در کشور خود خواهیم داشت. آیا شما خوانندگان نیز اینترنت ملی را در راستای اهداف کشور و رشد آن تلقی می‌‌کنید؟</p>
                        <div class="post-meta mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                                                          class="text-muted like"><i
                                            class="uil uil-heart me-1"></i>33</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i
                                            class="uil uil-comment me-1"></i>0</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{--<div class="card shadow rounded border-0 mt-4">
                    <div class="card-body">
                        <h5 class="card-title mb-0">نظرات :</h5>

                        <ul class="media-list list-unstyled mb-0">
                            <li class="mt-4">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a class="pe-3" href="#">
                                            <img src="images/client/01.jpg"
                                                 class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                        </a>
                                        <div class="commentor-detail">
                                            <h6 class="mb-0"><a href="javascript:void(0)"
                                                                class="text-dark media-heading">لورنزو پیترسون</a></h6>
                                            <small class="text-muted">اردیبهشت 1400 - ساعت 14:40 بعد ظهر</small>
                                        </div>
                                    </div>
                                    <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> پاسخ </a>
                                </div>
                                <div class="mt-3">
                                    <p class="text-muted fst-italic p-3 bg-light rounded">" تعداد زیادی از معابر لورم
                                        اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند, با شوخ طبعی
                                        تزریق شده "</p>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a class="pe-3" href="#">
                                            <img src="images/client/02.jpg"
                                                 class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                        </a>
                                        <div class="commentor-detail">
                                            <h6 class="mb-0"><a href="javascript:void(0)"
                                                                class="media-heading text-dark">تامی کاماچو</a></h6>
                                            <small class="text-muted">اردیبهشت 1400 - ساعت 15:40 بعد ظهر</small>
                                        </div>
                                    </div>
                                    <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> پاسخ </a>
                                </div>
                                <div class="mt-3">
                                    <p class="text-muted fst-italic p-3 bg-light rounded">" تعداد زیادی از معابر لورم
                                        اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند, با شوخ طبعی
                                        تزریق شده "</p>
                                </div>
                            </li>

                            <li class="mt-4">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a class="pe-3" href="#">
                                            <img src="images/client/03.jpg"
                                                 class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                        </a>
                                        <div class="commentor-detail">
                                            <h6 class="mb-0"><a href="javascript:void(0)"
                                                                class="media-heading text-dark">تامی کاماچو</a></h6>
                                            <small class="text-muted">شانزدهم اردیبهشت 1400 در ساعت 03:44 بعد از
                                                ظهر</small>
                                        </div>
                                    </div>
                                    <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> پاسخ </a>
                                </div>
                                <div class="mt-3">
                                    <p class="text-muted fst-italic p-3 bg-light rounded">" تعداد زیادی از معابر لورم
                                        اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند, با شوخ طبعی
                                        تزریق شده "</p>
                                </div>

                                <ul class="list-unstyled ps-4 ps-md-5 sub-comment">
                                    <li class="mt-4">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <a class="pe-3" href="#">
                                                    <img src="images/client/01.jpg"
                                                         class="img-fluid avatar avatar-md-sm rounded-circle shadow"
                                                         alt="img">
                                                </a>
                                                <div class="commentor-detail">
                                                    <h6 class="mb-0"><a href="javascript:void(0)"
                                                                        class="text-dark media-heading">لورنزو
                                                            پیترسون</a></h6>
                                                    <small class="text-muted">شانزدهم اردیبهشت 1400 در ساعت 03:44 بعد از
                                                        ظهر</small>
                                                </div>
                                            </div>
                                            <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> پاسخ </a>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-muted fst-italic p-3 bg-light rounded">" تعداد زیادی از معابر
                                                لورم اپیسون در دسترس است ، اما اکثر آنها به نوعی دچار تغییر شده اند, با
                                                شوخ طبعی تزریق شده "</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>--}}

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
                                            <textarea id="message" placeholder="کامنت شما" rows="5" name="message"
                                                      class="form-control ps-5" required=""></textarea>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">نام <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input id="name" name="name" type="text" placeholder="نام"
                                                   class="form-control ps-5" required="">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">ایمیل شما <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input id="email" type="email" placeholder="ایمیل" name="email"
                                                   class="form-control ps-5" required="">
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

                {{--<div class="card shadow rounded border-0 mt-4">
                    <div class="card-body">
                        <h5 class="card-title mb-0">پست های اخیر :</h5>

                        <div class="row">
                            <div class="col-lg-6 mt-4 pt-2">
                                <div class="card blog rounded border-0 shadow">
                                    <div class="position-relative">
                                        <img src="images/blog/01.jpg" class="card-img-top rounded-top" alt="...">
                                        <div class="overlay rounded-top bg-dark"></div>
                                    </div>
                                    <div class="card-body content">
                                        <h5><a href="javascript:void(0)" class="card-title title text-dark">برنامه های
                                                خود را به روش خود طراحی کنید</a></h5>
                                        <div class="post-meta d-flex justify-content-between mt-3">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                                                                          class="text-muted like"><i
                                                            class="uil uil-heart me-1"></i>33</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"
                                                                                class="text-muted comments"><i
                                                            class="uil uil-comment me-1"></i>08</a></li>
                                            </ul>
                                            <a href="page-blog-detail.html" class="text-muted readmore">ادامه مطلب <i
                                                    class="uil uil-angle-left-b align-middle"></i></a>
                                        </div>
                                    </div>
                                    <div class="author">
                                        <small class="text-light user d-block"><i class="uil uil-user"></i> کالوین لورس</small>
                                        <small class="text-light date"><i class="uil uil-calendar-alt"></i> اردیبهشت
                                            1400</small>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-6 mt-4 pt-2">
                                <div class="card blog rounded border-0 shadow">
                                    <div class="position-relative">
                                        <img src="images/blog/02.jpg" class="card-img-top rounded-top" alt="...">
                                        <div class="overlay rounded-top bg-dark"></div>
                                    </div>
                                    <div class="card-body content">
                                        <h5><a href="javascript:void(0)" class="card-title title text-dark">برنامه ها
                                                چگونه دنیای اطلاعات را تغییر می دهند</a></h5>
                                        <div class="post-meta d-flex justify-content-between mt-3">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)"
                                                                                          class="text-muted like"><i
                                                            class="uil uil-heart me-1"></i>33</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)"
                                                                                class="text-muted comments"><i
                                                            class="uil uil-comment me-1"></i>08</a></li>
                                            </ul>
                                            <a href="page-blog-detail.html" class="text-muted readmore">ادامه مطلب <i
                                                    class="uil uil-angle-left-b align-middle"></i></a>
                                        </div>
                                    </div>
                                    <div class="author">
                                        <small class="text-light user d-block"><i class="uil uil-user"></i> کالوین لورس</small>
                                        <small class="text-light date"><i class="uil uil-calendar-alt"></i> اردیبهشت
                                            1400</small>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div>--}}
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
                                    <input type="text" id="s" name="s" class="form-control border-0"
                                           placeholder="جستجوی کلمه کلیدی...">
                                    <button type="submit" class="input-group-text bg-transparent border-0"
                                            id="searchsubmit"><i class="uil uil-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- SEARCH -->

                        <!-- Categories -->
                        <div class="widget mb-4 pb-2">
                            <h5 class="widget-title">دسته بندیها </h5>
                            {{--<ul class="list-unstyled mt-4 mb-0 blog-categories">
                                <li><a href="jvascript:void(0)">مالی </a> <span class="float-end">13</span></li>
                                <li><a href="jvascript:void(0)">شرکتی </a> <span class="float-end">90 </span></li>
                                <li><a href="jvascript:void(0)">وبلاگ </a> <span class="float-end">18</span></li>
                                <li><a href="jvascript:void(0)">کسب و کار</a> <span class="float-end">20</span></li>
                                <li><a href="jvascript:void(0)">سرمایه گذاری </a> <span class="float-end">22</span></li>
                            </ul>--}}
                        </div>
                        <!-- Categories -->

                        <!-- پست های اخیر -->
                        <div class="widget mb-4 pb-2">
                            <h5 class="widget-title">پست های اخیر</h5>
                            {{--<div class="mt-4">
                                <div class="clearfix post-recent">
                                    <div class="post-recent-thumb float-start"><a href="jvascript:void(0)"> <img
                                                alt="img" src="images/blog/07.jpg" class="img-fluid rounded"></a></div>
                                    <div class="post-recent-content float-start"><a href="jvascript:void(0)">مشاوره
                                            شرکتی </a><span class="text-muted mt-2">اردیبهشت 1400</span></div>
                                </div>
                                <div class="clearfix post-recent">
                                    <div class="post-recent-thumb float-start"><a href="jvascript:void(0)"> <img
                                                alt="img" src="images/blog/08.jpg" class="img-fluid rounded"></a></div>
                                    <div class="post-recent-content float-start"><a href="jvascript:void(0)">به تعادل
                                            باشکوه نگاه کنید</a> <span class="text-muted mt-2">اردیبهشت 1400</span>
                                    </div>
                                </div>
                                <div class="clearfix post-recent">
                                    <div class="post-recent-thumb float-start"><a href="jvascript:void(0)"> <img
                                                alt="img" src="images/blog/01.jpg" class="img-fluid rounded"></a></div>
                                    <div class="post-recent-content float-start"><a href="jvascript:void(0)">تحقیقات
                                            مالی.</a> <span class="text-muted mt-2">اردیبهشت 1400</span></div>
                                </div>
                            </div>--}}
                        </div>
                        <!-- پست های اخیر -->

                        <!-- TAG CLOUDS -->
                        <div class="widget mb-4 pb-2">
                            <h5 class="widget-title">برچسب های ابری</h5>
                            {{--<div class="tagcloud mt-4">
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
                            </div>--}}
                        </div>
                        <!-- TAG CLOUDS -->

                        <!-- SOCIAL -->
                        <div class="widget">
                            <h5 class="widget-title">دنبال کردن ما</h5>
                            <ul class="list-unstyled social-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                            data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                            data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                            data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                            data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                            data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                            data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
                                            data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
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
