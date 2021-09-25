@extends('profile.layouts.master')
@section('title','پروفایل کاربری')
@section('content')
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
                                    <img alt="Logo" src="{{URL::asset('front/img/Logo.png')}}">
                                    {{-- // TODO change logo --}}
                                </a>
                                <!--end::Logo-->
                                <!--begin::Action-->
                                <a href="{{route('htmlPdf',$warranty->id)}}" class="btn btn-sm btn-success fw-bolder fs-6">چاپ</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Top-->
                            <!--begin::Wrapper-->
                            <div class="m-0">
                                <!--begin::Label-->
                                <div class="fw-bolder fs-3 text-gray-800 mb-8">اطلاعات فراگارانتی</div>
                                <!--end::Label-->
                                <!--begin::Row-->
                                <div class="row g-5 mb-11">
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">شناسه:</div>
                                        <!--end::Label-->
                                        <!--end::Col-->
                                        <div class="fw-bolder fs-6 text-gray-800">{{$warranty->activation_code}}</div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Col-->
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">تاریخ شروع:</div>
                                        <!--end::Label-->
                                        <!--end::Info-->
                                        <div class="fw-bolder fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                            <span class="pe-2">{{$warranty->start_date}}</span>
                                            <span class="fs-7 text-danger d-flex align-items-center">
																<span class="bullet bullet-dot bg-danger me-2"></span>زمان سررسید در {{$warranty['remained_days']}} روز دیگر</span>
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
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">وضعیت:</div>
                                        <!--end::Label-->
                                        <!--end::Text-->


                                            <p class="d-flex align-items-center justify-content-between font-16">* میزان مجاز جهت استفاده از فراگارانتی </p>
                                            <div class="progress h-8 w-75">
                                                <div class="progress-bar bg-success" role="progressbar" style="width:{{$warranty->usable_percentage}}%;" aria-valuenow="{{$warranty->usable_percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-3 mb-0 font-16 d-block">{{$warranty->usable_percentage}}٪ باقیمانده</p>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Col-->
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">برند و مدل گوشی:</div>
                                        <!--end::Label-->
                                        <!--end::Text-->
                                        <div class="fw-bolder fs-6 text-gray-800">{{$warranty->phoneName}}</div>
                                        <!--end::Text-->
                                        <!--end::Description-->
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
                                                <th class="min-w-175px pb-2">عنوان درخواست استفاده</th>
                                                <th class="min-w-70px text-end pb-2">میزان مصرف (از ۱۰۰)</th>
                                                <th class="min-w-80px text-end pb-2">تاریخ ثبت درخواست</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($uses as $use)
                                                <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                    <td class="d-flex align-items-center pt-6">
                                                        <i class="fa fa-genderless text-info fs-2 me-2"></i>{{$use['title']}}</td>
                                                    <td class="pt-6">{{$use['percentage']}}</td>
                                                    <td class="pt-6">{{$use['created_at_shamsi']}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Invoice 2 content-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Invoice 2 main-->
    </div>
@endsection
@section('custom_js')
@endsection
