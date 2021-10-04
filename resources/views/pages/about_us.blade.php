@extends('layouts.master_front')
@section('title','درباره ما')
@section('custom_css')
@endsection
@section('content')
    <!-- Hero Start -->
    <section class="bg-half d-table w-100" style="background: url('{{ URL::asset('front/img/shop/about.jpg')}}') center center;background-size: cover">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h3 class="title text-white title-dark"> از ما بیشتر بدانید </h3>
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

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mt-4">از ما بیشتر بدانید</h2>

                            <p class="text-muted" style="text-align: justify">
                                کارشناسان مجرب شرکت <span class="text-primary fw-bold">پیدا سرویس ماندگار</span> پس از سال‌ها تجربه و کار با تعهد به این نتیجه رسیدند که گارانتی‌های موجود باعث ایجاد رضایت لازم و کافی در مشتریان نخواهند شد و نیازهای اساسی ایشان را برآورده نمی‌کنند. پس از تحقیق و بررسی‌های بسیار در زمینه گارانتی محصولات الکترونیکی، شرکت پیدا سرویس ماندگار تصمیم بر ارائه خدمات فراگارانتی در حوزه گوشی‌های همراه و بعضی لوازم الکترونیک گرفت.
                            </p>
                            <p class="text-muted" style="text-align: justify">
                                شرکت پیدا سرویس ماندگار در تاریخ 02/04/1399 با شماره ثبت 560070 و شناسه ملی 14009225883 تأسیس شد. هدف از تأسیس، ارائه‌ی خدمات به مشتریانِ دارای گوشی‌های آکبند و دست دو است. پیدا سرویس ماندگار باور دارد که همه‌ی افراد و اقشار جامعه شایسته دریافت فراگارانتی برای محصولات الکترونیک خود اعم از تلفن همراه، تبلت و لپ‌تاپ هستند.
                            </p>
                            <p class="text-muted" style="text-align: justify">
                                با افزایش هزینه‌ها و ایجاد مصرف‌گرایی بین مردم دغدغه‌های زیادی برای افراد ایجاد شده‌است، پیدا سرویس در راستای کم کردن این معضلات و هزینه‌های مشتریان گرامی در تلاش است که با کم‌ترین میزان دریافتی، بهترین فراگارانتی را در اختیار مشتریان ارجمند خود قرار دهد.
                            </p>
                            <p class="text-muted" style="text-align: justify">
                                عرضه‌ی خدمات با کیفیت برای شرکت پیدا سرویس بسیار حائز اهمیت است. ما مشتریان خود را تنها نمی‌گذاریم و <span class="text-warning">#تاهمیشه </span> کنارتان خواهیم بود. با پیدا سرویس ماندگار هیچ‌گاه احساس تنهایی نخواهید کرد، در سخت‌ترین لحظات شما عزیزان می‌توانید از بهترین و کامل‌ترین فراگارانتی بهره‌مند شوید و مهم‌ترین وسیله‌ی شخصی‌تان را از گزند حوادث و بلایا در امان نگاه دارید.
                            </p>
                            <p class="text-muted" style="text-align: justify">
                                گارانتی‌های موجود در بازار تمام آسیب‌های وارد شده به وسایل الکترونیکی را پوشش نمی‌دهند و در ضمن قابل تمدید هم نیستند یعنی عملا کاربرد و فایده خاصی ندارند و بسیار سخت از مشتری حمایت می‌کنند اما در پیدا سرویس ماندگار خیال شما مشتری نازنین از هر لحاظ راحت و آسوده خواهد بود چرا که ما موارد بسیار زیادی را تحت پوشش خود قرار داده‌ایم که در بخش‌های دیگر به توضیح کامل آن‌ها خواهیم پرداخت.
                            </p>

                            <!--   <h5 class="mt-4">نظرات :</h5>

                               <ul class="media-list list-unstyled mb-0">
                                   <li class="mt-4">
                                       <div class="d-flex justify-content-between">
                                           <div class="d-flex align-items-center">
                                               <a class="pe-3" href="#">
                                                   <img src="images/client/01.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                               </a>
                                               <div class="flex-1 commentor-detail">
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
                                                   <img src="images/client/02.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                               </a>
                                               <div class="flex-1 commentor-detail">
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
                                                   <img src="images/client/03.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                               </a>
                                               <div class="flex-1 commentor-detail">
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
                                                           <img src="images/client/01.jpg" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                       </a>
                                                       <div class="flex-1 commentor-detail">
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

                               <h5 class="mt-4">ارسال نظر :</h5>

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
                                       </div>&lt;!&ndash;end col&ndash;&gt;

                                       <div class="col-lg-6">
                                           <div class="mb-3">
                                               <label class="form-label">نام  <span class="text-danger">*</span></label>
                                               <div class="form-icon position-relative">
                                                   <i data-feather="user" class="fea icon-sm icons"></i>
                                                   <input id="name" name="name" type="text" placeholder="نام" class="form-control ps-5" required="">
                                               </div>
                                           </div>
                                       </div>&lt;!&ndash;end col&ndash;&gt;

                                       <div class="col-lg-6">
                                           <div class="mb-3">
                                               <label class="form-label">ایمیل شما <span class="text-danger">*</span></label>
                                               <div class="form-icon position-relative">
                                                   <i data-feather="mail" class="fea icon-sm icons"></i>
                                                   <input id="email" type="email" placeholder="ایمیل" name="email" class="form-control ps-5" required="">
                                               </div>
                                           </div>
                                       </div>&lt;!&ndash;end col&ndash;&gt;

                                       <div class="col-md-12">
                                           <div class="send d-grid">
                                               <button type="submit" class="btn btn-primary">ارسال پیام</button>
                                           </div>
                                       </div>&lt;!&ndash;end col&ndash;&gt;
                                   </div>&lt;!&ndash;end row&ndash;&gt;
                               </form>--><!--end form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom_js')

@endsection
