@extends('layouts.master_front')
@section('title','استعلام فراگارانتی پیدا سرویس')
@section('custom_css')
@endsection
@section('content')

    <section class="bg-invoice bg-light">
        <div class="container">
            <div class="row mt-5 pt-4 pt-sm-0 justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow rounded border-0">
                        @if($isValid)
                            <div class="card-body">
                                <div class="pb-4 border-bottom">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="logo-invoice mb-2">
                                                <img src="{{URL::asset('front/img/logo-colored-1.png')}}" alt=""
                                                     height="70">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6 mt-4 mt-sm-0">
                                            <h5>آدرس : </h5>
                                            <dl class="row mb-0">
                                                <dt class="col-2 text-muted">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-map-pin fea icon-sm">
                                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                        <circle cx="12" cy="10" r="3"></circle>
                                                    </svg>
                                                </dt>
                                                <dd class="col-10 text-muted">
                                                    <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7915.525673176609!2d46.32542404246615!3d38.06389198146334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDAzJzUzLjgiTiA0NsKwMTknMzkuNCJF!5e0!3m2!1sen!2s!4v1545664085241"
                                                       data-type="iframe" class="video-play-icon text-muted lightbox">
                                                        <p class="mb-0">تهران، خیابان مطهری، ...</p>
                                                    </a>
                                                </dd>

                                                <dt class="col-2 text-muted"><i class="uil uil-envelope"></i></dt>
                                                <dd class="col-10 text-muted">
                                                    <a href="mailto:contact@example.com" class="text-muted">info@peydaservice.com</a>
                                                </dd>

                                                <dt class="col-2 text-muted">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-phone fea icon-sm">
                                                        <path
                                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                                    </svg>
                                                </dt>
                                                <dd class="col-10 text-muted">
                                                    <a href="tel:+152534-468-854" class="text-muted">(+12)
                                                        1546-456-856</a>
                                                </dd>
                                            </dl>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>

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
                                                    <div class="col-7 text-muted">{{$warranty->user->getFullName()}}</div>
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
                                                    <div class="col-7 text-muted">{{\Hekmatinasser\Verta\Verta::instance($warranty->activation_date)->format('Y/m/d')}}</div>
                                                </div>
                                                <div class="row mb-3">

                                                    <div class="col-5 fw-normal">اعتبار تا :</div>
                                                    <div class="col-7 text-muted">{{\Hekmatinasser\Verta\Verta::instance($warranty->expiry_date)->format('Y/m/d')}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
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
                                        </div>
                                    </div>
                                </div>

                                <div class="invoice-footer border-top pt-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="text-sm-start text-muted text-center">
                                                <h6 class="mb-0">خدمات مشتری : <a href="tel:+152534-468-854"
                                                                                  class="text-warning">(+12)
                                                        1546-456-856</a></h6>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="text-sm-end text-muted text-center">
                                                <h6 class="mb-0"><a href="page-terms.html" target="_blank"
                                                                    class="text-primary">شرایط و ضوابط</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="card-body">
                                <div class="pb-4 border-bottom">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="logo-invoice mb-2">
                                                <img src="{{URL::asset('front/img/logo-colored-1.png')}}" alt=""
                                                     height="70">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6 mt-4 mt-sm-0">
                                            <h5>آدرس : </h5>
                                            <dl class="row mb-0">
                                                <dt class="col-2 text-muted">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-map-pin fea icon-sm">
                                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                        <circle cx="12" cy="10" r="3"></circle>
                                                    </svg>
                                                </dt>
                                                <dd class="col-10 text-muted">
                                                    <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7915.525673176609!2d46.32542404246615!3d38.06389198146334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDAzJzUzLjgiTiA0NsKwMTknMzkuNCJF!5e0!3m2!1sen!2s!4v1545664085241"
                                                       data-type="iframe" class="video-play-icon text-muted lightbox">
                                                        <p class="mb-0">تهران، خیابان مطهری، ...</p>
                                                    </a>
                                                </dd>

                                                <dt class="col-2 text-muted"><i class="uil uil-envelope"></i></dt>
                                                <dd class="col-10 text-muted">
                                                    <a href="mailto:contact@example.com" class="text-muted">info@peydaservice.com</a>
                                                </dd>

                                                <dt class="col-2 text-muted">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-phone fea icon-sm">
                                                        <path
                                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                                    </svg>
                                                </dt>
                                                <dd class="col-10 text-muted">
                                                    <a href="tel:+152534-468-854" class="text-muted">(+12)
                                                        1546-456-856</a>
                                                </dd>
                                            </dl>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>

                                <div class="py-4">
                                    <div class="container mt-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-block">
                                                    <div class="alert alert-outline-danger alert-pills mb-0 w-100" role="alert">
                                                        <span class="badge rounded-pill bg-danger me-1"> خطا </span>
                                                        <span class="content">متأسفانه چیزی یافت نشد ! <a href="{{route('index')}}" class="text-primary float-end">بازگشت <i class="uil uil-angle-left-b"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="invoice-footer border-top pt-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="text-sm-start text-muted text-center">
                                                <h6 class="mb-0">خدمات مشتری : <a href="tel:+152534-468-854"
                                                                                  class="text-warning">(+12)
                                                        1546-456-856</a></h6>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="text-sm-end text-muted text-center">
                                                <h6 class="mb-0"><a href="page-terms.html" target="_blank"
                                                                    class="text-primary">شرایط و ضوابط</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>

@endsection
@section('custom_js')
@endsection
