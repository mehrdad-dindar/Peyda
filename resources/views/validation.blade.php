@extends('layouts.master_front')
@section('title','استعلام فراگارانتی پیدا سرویس')
@section('custom_css')
@endsection
@section('content')
    <!-- Hero Start -->
    <section class="bg-half d-table w-100"
             style="background: url('{{ URL::asset('front/img/q-banner.jpg')}}') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h3 class="title text-white title-dark"> استعلام فراگارانتی پیدا سرویس </h3>
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
        <div class="shape overflow-hidden text-light">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <!-- Hero End -->
    <section class="bg-invoice bg-light">
        <div class="container">
            <div class="row mt-5 pt-4 pt-sm-0 justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow rounded border-0">

                        <div class="card-body">
                            <div class="pb-4 border-bottom">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="logo-invoice mb-2">
                                            <img src="{{URL::asset('front/img/logo-colored-1.png')}}" alt=""
                                                 height="70">
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-7 mt-4 mt-sm-0">
                                        <h6>اطلاعات تماس</h6>
                                        <dl class="row mb-0">
                                            <dt class="col-3 text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-map-pin fea icon-sm">
                                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg>
                                                <span style="font-size: 14px">آدرس:</span>
                                            </dt>
                                            <dd class="col-9 text-muted">
                                                <a href="https://goo.gl/maps/nqiQebt1khAX4Js27"
                                                   class="text-muted">
                                                    <p class="mb-0">تجریش، خیابان مقدس اردبیلی، پلاک 144، مجتمع تجاری
                                                        میلان، طبقه اول تجاری، واحد 28</p>
                                                </a>
                                            </dd>

                                            <dt class="col-3 text-muted">
                                                <i class="uil uil-envelope"></i>
                                                <span style="font-size: 14px">کد پستی:</span>
                                            </dt>
                                            <dd class="col-9 text-muted">
                                                <a class="text-muted">1985675124</a>
                                            </dd>


                                            <dt class="col-3 text-muted">
                                                <i class="uil uil-at"></i>
                                                <span style="font-size: 14px">ایمیل:</span>
                                            </dt>
                                            <dd class="col-9 text-muted">
                                                <a href="mailto:info@peydaservice.com" class="text-muted">info@peydaservice.com</a>
                                            </dd>
                                        </dl>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                            @if($isValid)
                                <div class="py-4">
                                    <div class="row border-bottom border-dashed">
                                        <div class="col-md-6">
                                            <h5 class="mb-4">جزئیات فراگارانتی :</h5>
                                        </div>
                                        <div class="col-md-6 text-end" dir="ltr">
                                            <span class="h4 text-muted">#{{$warranty->activation_code}}</span>
                                        </div>
                                    </div>
                                    <div class="container mt-4 fs-">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <div class="col-5 fw-normal">مالک فراگارانتی :</div>
                                                    <div
                                                        class="col-7 text-muted">{{$warranty->user->getFullName()}}</div>
                                                </div>
                                                <div class="row mb-3">

                                                    <div class="col-5 fw-normal">دستگاه :</div>
                                                    <div class="col-7 text-muted">{{$warranty->phone_name}}</div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12 fw-normal mb-4">وضعیت :</div>
                                                    <div class="col-12 text-muted">
                                                        <div class="progress-box">
                                                            <div class="progress">
                                                                <div class="progress-bar position-relative bg-success"
                                                                     style="width:{{$warranty->usable_percentage}}%;">
                                                                    <div class="progress-value d-block text-muted h6">
                                                                        {{$warranty->usable_percentage}}%
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 text-muted">* میزان مجاز جهت استفاده از
                                                        فراگارانتی
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row mb-3">
                                                    <div class="col-5 fw-normal">اعتبار از :</div>
                                                    <div
                                                        class="col-7 text-muted">{{\Hekmatinasser\Verta\Verta::instance($warranty->activation_date)->format('Y/m/d')}}</div>
                                                </div>
                                                <div class="row mb-3">

                                                    <div class="col-5 fw-normal">اعتبار تا :</div>
                                                    <div
                                                        class="col-7 text-muted">{{\Hekmatinasser\Verta\Verta::instance($warranty->expiry_date)->addYear()->format('Y/m/d')}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<div class="row mt-5">
                                            <div class="col-6 border-bottom">
                                                <h4>توضیحات</h4>
                                            </div>
                                            <div class="col-12 p-3">
                                                <ul>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Blanditiis doloremque maiores molestias quas rem. Alias cum
                                                        expedita laboriosam maiores quae tenetur voluptates? Aliquam
                                                        asperiores culpa distinctio exercitationem fugit pariatur rerum.
                                                    </li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae
                                                        blanditiis consectetur cumque dicta dolorum fuga ipsum, iusto
                                                        labore mollitia necessitatibus neque, optio qui quibusdam quis
                                                        similique suscipit tenetur! Maiores, optio.
                                                    </li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                                        assumenda beatae consectetur cupiditate dolor eligendi esse
                                                        fugiat harum illum maxime molestiae neque perferendis quibusdam
                                                        quidem reprehenderit unde ut, velit vitae!
                                                    </li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab
                                                        accusantium ad adipisci alias asperiores blanditiis dignissimos
                                                        earum eveniet, impedit incidunt iure nihil nisi provident quidem
                                                        reiciendis reprehenderit velit veritatis voluptas?
                                                    </li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                                                        accusamus accusantium deleniti, ea enim et eum, expedita ipsam
                                                        ipsum iure molestias nobis porro rerum, similique voluptatem?
                                                        Perspiciatis porro repellendus tenetur!
                                                    </li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Accusamus dignissimos excepturi laborum, quidem sapiente ullam
                                                        vitae voluptatem! Consequatur ex explicabo incidunt itaque
                                                        molestiae nisi qui tenetur. Aspernatur placeat quisquam
                                                        reiciendis!
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>--}}
                                    </div>
                                </div>
                            @else
                                <div class="py-4">
                                    <div class="container mt-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-block">
                                                    <div class="alert alert-outline-danger alert-pills mb-0 w-100"
                                                         role="alert">
                                                        <span class="badge rounded-pill bg-danger me-1"> خطا </span>
                                                        <span class="content">متأسفانه چیزی یافت نشد ! <a
                                                                href="{{route('index')}}"
                                                                class="text-primary float-end">بازگشت <i
                                                                    class="uil uil-angle-left-b"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="invoice-footer border-top pt-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="text-sm-start text-muted text-center">
                                            <h6 class="mb-0">مرکز تماس خدمات مشتریان : <a href="tel:+982188540034"
                                                                                          class="text-warning">02188540034</a>
                                            </h6>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="text-sm-end text-muted text-center">
                                            <h6 class="mb-0"><a href="{{route('use_services')}}" target="_blank"
                                                                class="text-primary">شرایط و ضوابط</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>

@endsection
@section('custom_js')
@endsection
