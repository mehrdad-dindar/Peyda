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
                                <a href="#" class="btn btn-sm btn-success">Pay Now</a>
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
                                        <div class="fw-bolder fs-6 text-gray-800">{{$}}</div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Col-->
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">Due Date:</div>
                                        <!--end::Label-->
                                        <!--end::Info-->
                                        <div class="fw-bolder fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                            <span class="pe-2">02 May 2021</span>
                                            <span class="fs-7 text-danger d-flex align-items-center">
																<span class="bullet bullet-dot bg-danger me-2"></span>Due in 7 days</span>
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
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">Issue For:</div>
                                        <!--end::Label-->
                                        <!--end::Text-->
                                        <div class="fw-bolder fs-6 text-gray-800">KeenThemes Inc.</div>
                                        <!--end::Text-->
                                        <!--end::Description-->
                                        <div class="fw-bold fs-7 text-gray-600">8692 Wild Rose Drive
                                            <br>Livonia, MI 48150</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Col-->
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-bold fs-7 text-gray-600 mb-1">Issued By:</div>
                                        <!--end::Label-->
                                        <!--end::Text-->
                                        <div class="fw-bolder fs-6 text-gray-800">CodeLab Inc.</div>
                                        <!--end::Text-->
                                        <!--end::Description-->
                                        <div class="fw-bold fs-7 text-gray-600">9858 South 53rd Ave.
                                            <br>Matthews, NC 28104</div>
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
                                                <th class="min-w-175px pb-2">Description</th>
                                                <th class="min-w-70px text-end pb-2">Hours</th>
                                                <th class="min-w-80px text-end pb-2">Rate</th>
                                                <th class="min-w-100px text-end pb-2">Amount</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                <td class="d-flex align-items-center pt-6">
                                                    <i class="fa fa-genderless text-danger fs-2 me-2"></i>Creative Design</td>
                                                <td class="pt-6">80</td>
                                                <td class="pt-6">$40.00</td>
                                                <td class="pt-6 text-dark fw-boldest">$3200.00</td>
                                            </tr>
                                            <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                <td class="d-flex align-items-center">
                                                    <i class="fa fa-genderless text-success fs-2 me-2"></i>Logo Design</td>
                                                <td>120</td>
                                                <td>$40.00</td>
                                                <td class="fs-5 text-dark fw-boldest">$4800.00</td>
                                            </tr>
                                            <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                                <td class="d-flex align-items-center">
                                                    <i class="fa fa-genderless text-primary fs-2 me-2"></i>Web Development</td>
                                                <td>210</td>
                                                <td>$60.00</td>
                                                <td class="fs-5 text-dark fw-boldest">$12600.00</td>
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
                                                <div class="fw-bold pe-10 text-gray-600 fs-7">Subtotal:</div>
                                                <!--end::Accountname-->
                                                <!--begin::Label-->
                                                <div class="text-end fw-bolder fs-6 text-gray-800">$ 20,600.00</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Accountname-->
                                                <div class="fw-bold pe-10 text-gray-600 fs-7">VAT 0%</div>
                                                <!--end::Accountname-->
                                                <!--begin::Label-->
                                                <div class="text-end fw-bolder fs-6 text-gray-800">0.00</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack mb-3">
                                                <!--begin::Accountnumber-->
                                                <div class="fw-bold pe-10 text-gray-600 fs-7">Subtotal + VAT</div>
                                                <!--end::Accountnumber-->
                                                <!--begin::Number-->
                                                <div class="text-end fw-bolder fs-6 text-gray-800">$ 20,600.00</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Code-->
                                                <div class="fw-bold pe-10 text-gray-600 fs-7">Total</div>
                                                <!--end::Code-->
                                                <!--begin::Label-->
                                                <div class="text-end fw-bolder fs-6 text-gray-800">$ 20,600.00</div>
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
