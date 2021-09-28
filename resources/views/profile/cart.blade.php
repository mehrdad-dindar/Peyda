@extends('profile.layouts.master')
@section('title','افزودن فراگارانتی')
@section('content')
    <!--begin::Container-->
    <div id="kt_content_container" class="container">
        <!--begin::Invoice 2 main-->
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-20">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-xl-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
                        <!--begin::Invoice 2 content-->
                        <div class="mt-n1">
                            <!--begin::Top-->
                            <div class="d-flex flex-stack pb-10">
                                <!--begin::Logo-->
                                <a href="#">
                                    <img alt="Logo" src="{{ URL::asset('front/img/logo-colored-1.png')}}" height="80"/>
                                </a>
                                <!--end::Logo-->
                            </div>
                            <!--end::Top-->
                            <!--begin::Wrapper-->
                            <div class="m-0">
                                <!--begin::Label-->
                                <div class="fw-bolder fs-3 text-gray-800 mb-8">شماره فاکتور : #{{$invoice->id}}</div>
                                <!--end::Label-->
                                <!--begin::Row-->
                                <div class="row g-5 mb-11">
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">تاریخ صدور:</div>
                                        <!--end::Label-->
                                        <!--end::Col-->
                                        <div
                                            class="fw-bolder fs-6 text-gray-800 ltr text-start">{{--{{ verta()->format('Y/n/j H:i')}}--}}
                                            اعلام پس از تأیید
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Col-->
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">تاریخ سر رسید:</div>
                                        <!--end::Label-->
                                        <!--end::Info-->
                                        <div class="fw-bolder fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                            <span class="pe-2">{{--{{ verta()->addYear()->format('Y/n/j')}}--}}اعلام پس از تأیید</span>
                                            <span class="fs-7 text-danger d-flex align-items-center">
																<span class="bullet bullet-dot bg-danger me-2"></span>1 سال</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-5 mb-12">
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">متقاضی فراگارانتی:</div>
                                        <!--end::Label-->
                                        <!--end::Text-->
                                        <div
                                            class="fw-bolder fs-6 text-gray-800">{{auth()->user()->f_name." ".auth()->user()->l_name}}</div>
                                        <!--end::Text-->
                                        <!--end::Description-->
                                        <div class="fw-bold fs-7 text-gray-600">{{auth()->user()->address}}</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Col-->
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">ارائه دهنده فراگارانتی:</div>
                                        <!--end::Label-->
                                        <!--end::Text-->
                                        <div class="fw-bolder fs-6 text-gray-800">پیدا سرویس</div>
                                        <!--end::Text-->
                                        <!--end::Description-->
                                        <div class="fw-bold fs-7 text-gray-600">مطهری - نرسیده به مدرس - پلاک 197</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Content-->
                                <div class="flex-grow-1">
                                    <!--begin::Table-->
                                    <div class="table-responsive border-bottom mb-9">
                                        <table class="table mb-3">
                                            <thead>
                                            <tr class="border-bottom fs-6 fw-bolder text-muted">
                                                <th class="min-w-175px pb-2">عنوان</th>
                                                <th class="min-w-100px text-center pb-2">مبلغ</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                <td class="d-flex align-items-center pt-6">
                                                    <i class="fa fa-genderless text-info fs-2 me-2"></i>فراگارانتی پیدا
                                                    سرویس
                                                    <span class="badge badge-white fs-8">

                                                        {{$invoice->phone_name}}

                                                    </span>
                                                </td>
                                                <td class="pt-6 text-dark fw-boldest text-center">{{ number_format($invoice->Commitment_ceiling->price, 0, ',', ',') }}
                                                    تومان
                                                </td>
                                            </tr>
                                            <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                <td class="d-flex align-items-center">
                                                    <i class="fa fa-genderless text-success fs-2 me-2"></i>
                                                    @if($invoice->addition_fire_commitment_id == null)هدیه @endifبیمه آتش سوزی
                                                    @if($invoice->addition_fire_commitment_id != null)
                                                        <span class="badge badge-white fs-8">
                                                            سقف تعهد {{ 50+((int)$invoice->Fire_commitment_ceiling->addition_price)}} میلیون تومان
                                                        </span>
                                                    @else
                                                        <span class="badge badge-white fs-8">
                                                            سقف تعهد 50 میلیون تومان
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="fs-5 text-dark fw-boldest text-center">
                                                    @if($invoice->addition_fire_commitment_id == null)
                                                        0 تومان
                                                    @else
                                                        {{ number_format($invoice->Fire_commitment_ceiling->price, 0, ',', ',') }}
                                                        تومان
                                                    @endif
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                    <!--begin::Container-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Section-->
                                        <div class="mw-300px">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Accountname-->
                                                <div class="fw-bold pe-10 text-gray-600 fs-7">جمع جزء</div>
                                                <!--end::Accountname-->
                                                <!--begin::Label-->
                                                <div
                                                    class="text-end fw-bolder fs-6 text-gray-800">
                                                    {{$invoice->addition_fire_commitment_id!=null ? number_format($invoice->Fire_commitment_ceiling->price+$invoice->Commitment_ceiling->price, 0, ',', ',') : number_format($invoice->Commitment_ceiling->price, 0, ',', ',')  }}
                                                    تومان
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Accountname-->
                                                <div class="fw-bold pe-10 text-gray-600 fs-7">مالیات 9%</div>
                                                <!--end::Accountname-->
                                                <!--begin::Label-->
                                                <div class="text-end fw-bolder fs-6 text-gray-800">{{number_format($invoice->tax, 0, ',', ',')}} تومان</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Code-->
                                                <div class="fw-bold pe-10 text-gray-600 fs-7">جمع کل</div>
                                                <!--end::Code-->
                                                <!--begin::Label-->
                                                <div
                                                    class="text-end fw-bolder fs-6 text-gray-800">
                                                    {{$invoice->addition_fire_commitment_id!=null ? number_format($invoice->Fire_commitment_ceiling->price+$invoice->Commitment_ceiling->price+$invoice->tax, 0, ',', ',') : number_format($invoice->Commitment_ceiling->price+$invoice->tax, 0, ',', ',')  }}
                                                    تومان
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Container-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Invoice 2 content-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Sidebar-->
                    <form method="get" action="{{route('purchase',$invoice->id)}}" class="m-0">
                        <!--begin::Invoice 2 sidebar-->
                        <div
                            class="d-print-none border border-dashed border-gray-300 card-rounded h-lg-100 min-w-md-350px p-9 bg-lighten">
                            <!--begin::Title-->
                            <h6 class="mb-8 fw-boldest text-gray-600 fs-2 text-hover-primary">شیوه پرداخت</h6>
                            <!--end::Title-->
                            <!--begin::Item-->
                            <div class="mb-6">
                                <div class="fw-boldest text-gray-600 fs-4 text-hover-primary">زرین پال:</div>
                                <label
                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                    <span
                                        class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">پرداخت امن زرین پال</span>
                                    <input class="form-check-input" type="radio" checked="checked" name="pay_methode"
                                           value="1">
                                </label>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mb-6">
                                <div class="fw-boldest text-gray-600 fs-4 text-hover-primary">کیف پول:</div>
                                <label
                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">پرداخت از اعتبار کیف پول<br>
                                        <span class="fs-7 text-danger d-flex align-items-center">
                                            <span id="wallet"
                                                  class="me-2">{{Crypt::decryptString($wallet->value)}}</span>
                                            تومان
                                        </span>
                                    </span>
                                    <input class="form-check-input" type="radio" name="pay_methode" value="2">
                                </label>
                            </div>
                            <!--end::Item-->
                            <div class="mb-8">
                                <!--begin::Action-->
                                <a class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#purchase">پرداخت</a>
                                <div class="modal fade" id="purchase" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">شرایط خدمات فراگارانتی موبایل پیدا سرویس را با هم مرور می‌کنیم</h5>
                                            </div>
                                            <div class="modal-body">
                                                <ol style="text-align: justify">
                                                    <li>فراگارانتی پیدا سرویس از تاریخ صدور به مدت یک‌سال فعال بوده و دارای اعتبار است.</li>
                                                    <li>به منظور جبران کامل خسارت‌های وارده در صورت وقوع خسارت استهلاک از دستگاه شما کسر نمی‌شود و مجموعا تا سقف ارزش روز مراجعه به مرکز تخصصی صدور و پشتیبانی فراگارانتی پیدا سرویس حداکثر تا سقف 200.000.000 ریال تحت پوشش خواهدبود.</li>
                                                    <li>گواهی فراگارانتی پیدا سرویس پس از پرداخت یک‌بار خسارت (جزئی یا کلی) دیگر اعتبار نخواهد داشت.</li>
                                                    <li>در خسارت کلى، دستگاه معیوب و تمام لوازم جانبى آن متعلق به بیمه‌گر بوده و در صورت عدم ارائه هر یک از لوازم جانبى، ارزش آن‌ها بر اساس قیمت روز محاسبه و از مبلغ خسارت کسر می‌گردد.</li>
                                                    <li>مرکز تخصصى صدور و پشتیبانى فراگارانتی پیدا سرویس هیچ مسئولیتی نسبت به تهیه نسخه پشتیبان از اطلاعات دستگاه‌های تحویل داده شده ندارد.</li>
                                                    <li>حفظ اطلاعات موجود بر روى دستگاه آسیب‌دیده فیزیکى معمولاً امکان‌پذیر نبوده و این مرکز نسبت به حفظ یا بازگردانى آن مسئولیتى نخواهد داشت.</li>
                                                    <li>دوره انتظار جهت دریافت خسارت، حداکثر 15 روز از صدور گواهى فراگارانتی پیدا سرویس است.</li>
                                                    <li>فرانشیز، بخشی از خسارت است که پرداخت آن بر عهده‌ی دارنده‌ی گواهی فراگارانتی پیدا سرویس نیست به‌جز در خسارات کلی که 30 درصد است.</li>
                                                    <li>لطفا در حفظ و نگهداری رسید الکترونیک پذیرش خدمات دقت فرمایید، زیرا آورنده‌ی آن، صاحب کالا یا نماینده‌ی ذی‌صلاح وی محسوب می‌شود.</li>
                                                    <li>تمام حقوق و عوارض گمرکی و رجیستری به عهده مشتری کالا است.</li>
                                                    <li>شرکت  پیدا سرویس ماندگار تعهدی بابت اصل و فرع بودن دستگاه و لوازم جانبی آن ندارد و مسئولیت محتویات داخل جعبه به عهده مشتری کالا است و در صورت اثبات غیر اصل بودن، فراگارانتی بدون عودت وجه ابطال می‌گردد و حق پیگیری قضایی برای مجموعه پیدا سرویس با عنوان تقلب و کلاهبرداری محفوظ است.</li>
                                                    <li>در هنگام بارگذاری عکس از روی دستگاه مشاهده IMEI و یا سریال دستگاه بر روی صفحه نمایش الزامی‌ست به‌گونه‌ای که چهارچوب دستگاه مشاهده شود (نمونه‌ی عکس در فرم ثبت گواهی فراگارانتی پیدا سرویس قابل رؤیت است) در غیر این صورت شرکت پیدا سرویس ماندگار تعهدی بابت پرداخت خسارت ندارد (گرفتن اسکرین‌شات از صفحه مورد تائید نیست).</li>
                                                    <li>گواهی فراگارانتی پیدا سرویس فقط شامل گروه کالای موبایل، تبلت، لپ‌تاپ و ساعت هوشمند است و سایر گروه کالاها را شامل نمی‌شود.</li>
                                                    <li>استاندارد انجام تعمیرات در پیدا سرویس ماندگار، حداکثر 15 روز کاری است. با این همه با توجه به اهمیت استفاده از بهترین قطعات یدکی در تعمیر دستگاه‌ها، ممکن است در برخی موارد زمان کارشناسی و تعمیرات دستگاه طولانی‌تر شده که به مشتری اطلاع داده خواهدشد.</li>
                                                    <li>جهت بهره‌مندی از پوشش کامل تائیدیه، پرداخت و مدارک فراگارانتی پیدا سرویس الزامی است.</li>
                                                    <li>جهت بهره‌مندی از حداکثر پوشش خسارت، تسویه حساب کامل فراگارانتی پیدا سرویس و ورود صحیح ارزش دستگاه زمان صدور آن الزامی است. در غیر این‌صورت به نسبت اختلاف قیمت دستگاه با ارزش ثبت شده (بیشتر یا کمتر بودن ارزش اعلامی)، از خسارت پرداختی کسر خواهد شد.</li>
                                                    <li>در زمان وقوع خسارت و تحویل دستگاه به مرکز خدمات، ارائه فراگارانتی پیدا سرویس به همراه کارتن دستگاه و لوازم آن الزامی است. در غیر این‌صورت هزینه تعمیرات طبق تعرفه تعمیرگاه مربوطه و فاکتور از مشتری دریافت خواهد شد.</li>
                                                    <li>آثار ناشی از بازکردن دستگاه، دست‌کاری قطعات، تعمیر، ارتقاء و تغییر در قطعات و مشخصات دستگاه توسط مراکز و یا کارشناسان غیر از مرکز خدمات مورد تائید شرکت پیدا سرویس (که در سایت و اینستاگرام شرکت اعلام گردیده است)، استفاده در محیط‌های آلوده و پر گرد و غبار، به‌کارگیری آداپتورهای متفرقه، موجب ابطال فراگارانتی پیدا سرویس دستگاه مورد نظر خواهد شد و هزینه‌های آن طبق تعرفه تعمیرگاه مربوطه و فاکتور از مشتری دریافت خواهد شد.</li>
                                                    <li>مشکلات نرم‌افزاری، سیستم عامل و هرگونه عملیات و تغییرات نرم‌افزاری شامل ریکاوری، نصب درایور، ویروس‌یابی، بازیابی و کپی اطلاعات، عملیات روت کردن، نصب و یا تغییر سیستم‌عامل و رام‌های اصلی به غیر رسمی، عمل قفل‌گشایی بر روی راه‌اندازی‌ها (Unlock-Bootloader)، به‌کارگیری نرم‌افزارهای کاربردی غیر رسمی و یا آلودگی به ویروس، به دلیل این‌که موجب کاهش ضریب ایمنی دستگاه و افزایش امکان Brick شدن و از کارافتادن دستگاه می‌گردد، همچنین هرگونه صدمه مانند شکستگی صفحه نمایش و قاب پشت آن و یا اثرات هرگونه ضربه بر روی دستگاه که هنگام انتقال و تحویل توسط پست، پیک، شرکت‌های حمل و نقل و... پدید آید، موجب ابطال فراگارانتی پیدا سرویس خواهد شد و مرکز تامین خسارت بیمه‌نامه حمل یا خود شرکت یا فرد حمل کننده (پیک، اسنپ، پست و غیره) است و هزینه‌های آن طبق تعرفه تعمیرگاه مربوطه و فاکتور از مشتری دریافت خواهد شد. </li>
                                                    <li>مخدوش بودن فراگارانتی پیدا سرویس، موجب ابطال فراگارانتی پیدا سرویس خواهد شد.</li>
                                                    <li>لوازم جانبی و مصرفی (باتری، شارژر، کابل‌ها، سوکت و پورت‌ها) تحت پوشش این خدمات فراگارانتی نیست.</li>
                                                    <li>به دلیل حذف کامل فرانشیز جهت رفاه حال مشتریان ارجمند (و ایجاد تمایز از رقبا) از این خدمات هزینه حمل دستگاه برای استفاده از خدمات بر عهده مشتری است.</li>
                                                    <li>در شرایط خسارت تحت پوشش فراگارانتی پیدا سرویس، واحدهای تعمیرگاهی مورد تائید این مجموعه فقط یک‌بار خسارت وارده را در طول مدت فراگارانتی پیدا سرویس، برابر ارزش روز دستگاه و حداکثر تا میزان مبلغ مندرج در فاکتور خرید و همچنین فراگارانتی پیدا سرویس؛ بدون کسر  فرانشیز و استهلاک از طریق تعمیر دستگاه، و پرداخت حداکثر 70 درصد ارزش دستگاه در هنگام تعـویض آن یا پرداخت نقدی جبران خواهد کد.</li>
                                                    <li>در صورت بروز حادثه، دستگاه خسارت دیده تا حد امکان تعمیر خواهد شد و مرجع تشخیص دهنده تعمیر، تعویض جزئی و تعویض کلی مراکز خدمات مورد تائید و شرکت  پیدا سرویس است.</li>
                                                    <li>در شرایط بروز حادثه حداقل زمان ارائه خدمات (تعمیر یا تعویض) و یا جبران خسارت حداقل 10 روز کاری است.</li>
                                                    <li>در صورت تعویض کلی دستگاه، کارت ضمانت و فراگارانتی پیدا سرویس دستگاه معیوب باطل و با درخواست مشتری با پرداخت هزینه مصوب شرکت، فراگارانتی پیدا سرویس جدید برای دستگاه صادر می‌گردد.</li>
                                                    <li>جهت بهره‌مندی از پوشش " نوسانات ولتاژ برق " پوشش گارانتی و همچنین زمان وقوع خسارت، ارائه تائید از شرکت گارانتی (برای دستگاه دارای گارانتی) الزامی است.</li>
                                                    <li>در صورتی‌که واحد کارشناسی پیدا سرویس ماندگار تائید کند، دستگاه قبل و یا بعد از صدور گواهی فراگارانتی پیدا سرویس باز و یا تعمیر شده، تحت پوشش فراگارانتی قرار نگرفته و پیدا سرویس هیچ مسئولیتی در قبال پرداخت خسارت بر عهده نخواهد داشت.</li>
                                                </ol>
                                                <div class="mb-6 bg-danger p-3 rounded">
                                                    <label class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" required oninvalid="this.setCustomValidity('جهت ثبت سفارش موافقت با شرایط و ضوابط فراگارانتی پیدا سرویس الزامی‌ است')" oninput="setCustomValidity('')"/>
                                                        <span class="fw-bolder text-white fs-6 form-check-label">شرایط خدمات فراگارانتی موبایل پیدا سرویس را قبول دارم !</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لغو</button>
                                                <button type="submit" name="submit" class="btn btn-primary">تأیید شرایط و پرداخت</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Action-->
                            </div>
                        </div>
                        <!--end::Invoice 2 sidebar-->
                    </form>
                    <!--end::Sidebar-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Invoice 2 main-->
    </div>
    <!--end::Container-->
@endsection
@section('custom_js')
    <script>
        $('#wallet').number(true, 0);
    </script>
@endsection
