@extends('profile.layouts.master')
@section('title','افزودن بیمه نامه')
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
                                    <img alt="Logo" src="{{ URL::asset('front/img/Logo.png')}}"/>
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

                                                        {{$invoice->phone_model->phone_brand->name . " / ".$invoice->phone_model->name}}

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
                                                <div class="fw-bold pe-10 text-gray-600 fs-7">مالیات 0%</div>
                                                <!--end::Accountname-->
                                                <!--begin::Label-->
                                                <div class="text-end fw-bolder fs-6 text-gray-800">0</div>
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
                                                    {{$invoice->addition_fire_commitment_id!=null ? number_format($invoice->Fire_commitment_ceiling->price+$invoice->Commitment_ceiling->price, 0, ',', ',') : number_format($invoice->Commitment_ceiling->price, 0, ',', ',')  }}
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
                            <!--begin::Item-->
                            <div class="mb-6">
                                <div class="fw-bold text-gray-600 fs-7">سیاست حفظ حریم خصوصی</div>
                                <div class="fw-bolder fs-7 text-gray-500">
                                    <p>
                                        اطلاعات شخصی شما برای پردازش سفارش شما<br>
                                        و پشتیبانی از تجربه شما در این وبسایت<br>
                                        و برای اهداف دیگری که در <a href="#" class="link-primary ps-1">سیاست حفظ حریم
                                            خصوصی</a><br>
                                        توضیح داده شده است استفاده می‌شود.
                                    </p>
                                </div>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mb-6">
                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" required/>
                                    <span class="fw-bolder text-gray-800 fs-6 form-check-label">با سیاست حفظ حریم خصوصی موافقم !</span>
                                </label>
                            </div>
                            <!--end::Item-->
                            <div class="mb-8">
                                <!--begin::Action-->
                                <button type="submit" name="submit" class="btn btn-sm btn-success">پرداخت</button>
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
