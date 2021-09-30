@extends('profile.layouts.master')
@section('title','تیکت')
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <!--begin::Hero card-->
            <div class="card">
                <!--begin::Header-->
                <div class="card-header card-header-stretch">
                    <!--begin::Title-->
                    <div class="card-title">
                        <h3 class="m-0 text-gray-800">اعلانات</h3>
                    </div>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    {{--<div class="card-toolbar m-0">
                        <!--begin::Tab nav-->
                        <ul class="nav nav-stretch fs-5 fw-bold nav-line-tabs border-transparent" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_year_tab" class="nav-link text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_referrals_1">This Year</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_2019_tab" class="nav-link text-active-gray-800 me-4" data-bs-toggle="tab" role="tab" href="#kt_referrals_2">2019</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_2018_tab" class="nav-link text-active-gray-800 me-4" data-bs-toggle="tab" role="tab" href="#kt_referrals_3">2018</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_referrals_2017_tab" class="nav-link text-active-gray-800 ms-8" data-bs-toggle="tab" role="tab" href="#kt_referrals_4">2017</a>
                            </li>
                        </ul>
                        <!--end::Tab nav-->
                    </div>--}}
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Tab Content-->
                <div id="kt_referred_users_tab_content" class="tab-content">
                    <!--begin::Tab panel-->
                    <div id="kt_referrals_1" class="card-body p-0 tab-pane fade show active" role="tabpanel">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                <!--begin::Thead-->
                                <thead class="border-gray-200 fs-5 fw-bold bg-lighten">
                                <tr>
                                    <th class="min-w-150px ps-9">تاریخ</th>
                                    <th class="min-w-175px px-0">موضوع</th>
                                    <th class="min-w-350px">توضیحات</th>
                                    <th class="min-w-125px">وضعیت</th>
                                    <th class="min-w-125px text-center">لینک ارجاع</th>
                                </tr>
                                </thead>
                                <!--end::Thead-->
                                <!--begin::Tbody-->
                                <tbody class="fs-6 fw-bold text-gray-600">
                                @foreach($notifications as $notif)
                                    <tr>
                                        <td class="ps-9">{{\Hekmatinasser\Verta\Verta::instance($notif->created_at)->format('Y/m/d')}}</td>
                                        <td class="ps-0">{{$notif->notifications->title}}</td>
                                        <td>{{$notif->notifications->body}}</td>
                                        @if($notif->notifications->seen)
                                            <td class="text-success">مشاهده شده</td>
                                        @else
                                            <td class="text-danger">مشاهده نشده</td>
                                        @endif
                                        <td class="text-center">
                                            <button class="btn btn-light btn-sm btn-active-light-primary">لینک</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <!--end::Tbody-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div id="kt_referrals_2" class="card-body p-0 tab-pane fade" role="tabpanel">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                <!--begin::Thead-->
                                <thead class="border-gray-200 fs-5 fw-bold bg-lighten">
                                <tr>
                                    <th class="min-w-175px ps-9">Date</th>
                                    <th class="min-w-150px px-0">Order ID</th>
                                    <th class="min-w-350px">Details</th>
                                    <th class="min-w-125px">Amount</th>
                                    <th class="min-w-125px text-center">Invoice</th>
                                </tr>
                                </thead>
                                <!--end::Thead-->
                                <!--begin::Tbody-->
                                <tbody class="fs-6 fw-bold text-gray-600">
                                <tr>
                                    <td class="ps-9">May 30, 2020</td>
                                    <td class="ps-0">523445943</td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-1.30</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Apr 22, 2020</td>
                                    <td class="ps-0">231445943</td>
                                    <td>Parcel Shipping / Delivery Service App</td>
                                    <td class="text-success">$204.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Feb 09, 2020</td>
                                    <td class="ps-0">426445943</td>
                                    <td>Visual Design Illustration</td>
                                    <td class="text-success">$31.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Nov 01, 2020</td>
                                    <td class="ps-0">984445943</td>
                                    <td>Abstract Vusial Pack</td>
                                    <td class="text-success">$52.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Jan 04, 2020</td>
                                    <td class="ps-0">324442313</td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-0.80</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Nov 01, 2020</td>
                                    <td class="ps-0">102445788</td>
                                    <td>Darknight transparency 36 Icons Pack</td>
                                    <td class="text-success">$38.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Oct 24, 2020</td>
                                    <td class="ps-0">423445721</td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-2.60</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Oct 08, 2020</td>
                                    <td class="ps-0">312445984</td>
                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                    <td class="text-success">$76.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Sep 15, 2020</td>
                                    <td class="ps-0">312445984</td>
                                    <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                    <td class="text-success">$5.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                </tbody>
                                <!--end::Tbody-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div id="kt_referrals_3" class="card-body p-0 tab-pane fade" role="tabpanel">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                <!--begin::Thead-->
                                <thead class="border-gray-200 fs-5 fw-bold bg-lighten">
                                <tr>
                                    <th class="min-w-175px ps-9">Date</th>
                                    <th class="min-w-150px px-0">Order ID</th>
                                    <th class="min-w-350px">Details</th>
                                    <th class="min-w-125px">Amount</th>
                                    <th class="min-w-125px text-center">Invoice</th>
                                </tr>
                                </thead>
                                <!--end::Thead-->
                                <!--begin::Tbody-->
                                <tbody class="fs-6 fw-bold text-gray-600">
                                <tr>
                                    <td class="ps-9">Feb 09, 2020</td>
                                    <td class="ps-0">426445943</td>
                                    <td>Visual Design Illustration</td>
                                    <td class="text-success">$31.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Nov 01, 2020</td>
                                    <td class="ps-0">984445943</td>
                                    <td>Abstract Vusial Pack</td>
                                    <td class="text-success">$52.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Jan 04, 2020</td>
                                    <td class="ps-0">324442313</td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-0.80</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Sep 15, 2020</td>
                                    <td class="ps-0">312445984</td>
                                    <td>Iphone 12 Pro Mockup Mega Bundle</td>
                                    <td class="text-success">$5.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Nov 01, 2020</td>
                                    <td class="ps-0">102445788</td>
                                    <td>Darknight transparency 36 Icons Pack</td>
                                    <td class="text-success">$38.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Oct 24, 2020</td>
                                    <td class="ps-0">423445721</td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-2.60</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Oct 08, 2020</td>
                                    <td class="ps-0">312445984</td>
                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                    <td class="text-success">$76.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">May 30, 2020</td>
                                    <td class="ps-0">523445943</td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-1.30</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Apr 22, 2020</td>
                                    <td class="ps-0">231445943</td>
                                    <td>Parcel Shipping / Delivery Service App</td>
                                    <td class="text-success">$204.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                </tbody>
                                <!--end::Tbody-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div id="kt_referrals_4" class="card-body p-0 tab-pane fade" role="tabpanel">
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                <!--begin::Thead-->
                                <thead class="border-gray-200 fs-5 fw-bold bg-lighten">
                                <tr>
                                    <th class="min-w-175px ps-9">Date</th>
                                    <th class="min-w-150px px-0">Order ID</th>
                                    <th class="min-w-350px">Details</th>
                                    <th class="min-w-125px">Amount</th>
                                    <th class="min-w-125px text-center">Invoice</th>
                                </tr>
                                </thead>
                                <!--end::Thead-->
                                <!--begin::Tbody-->
                                <tbody class="fs-6 fw-bold text-gray-600">
                                <tr>
                                    <td class="ps-9">Nov 01, 2020</td>
                                    <td class="ps-0">102445788</td>
                                    <td>Darknight transparency 36 Icons Pack</td>
                                    <td class="text-success">$38.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Oct 24, 2020</td>
                                    <td class="ps-0">423445721</td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-2.60</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Nov 01, 2020</td>
                                    <td class="ps-0">102445788</td>
                                    <td>Darknight transparency 36 Icons Pack</td>
                                    <td class="text-success">$38.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Oct 24, 2020</td>
                                    <td class="ps-0">423445721</td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-2.60</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Feb 09, 2020</td>
                                    <td class="ps-0">426445943</td>
                                    <td>Visual Design Illustration</td>
                                    <td class="text-success">$31.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Nov 01, 2020</td>
                                    <td class="ps-0">984445943</td>
                                    <td>Abstract Vusial Pack</td>
                                    <td class="text-success">$52.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Jan 04, 2020</td>
                                    <td class="ps-0">324442313</td>
                                    <td>Seller Fee</td>
                                    <td class="text-danger">$-0.80</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Oct 08, 2020</td>
                                    <td class="ps-0">312445984</td>
                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                    <td class="text-success">$76.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Oct 08, 2020</td>
                                    <td class="ps-0">312445984</td>
                                    <td>Cartoon Mobile Emoji Phone Pack</td>
                                    <td class="text-success">$76.00</td>
                                    <td class="text-center">
                                        <button class="btn btn-light btn-sm btn-active-light-primary">Download</button>
                                    </td>
                                </tr>
                                </tbody>
                                <!--end::Tbody-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Tab panel-->
                </div>
                <!--end::Tab Content-->
            </div>
            {{--<!--begin::Modal - Support Center - Create Ticket-->
            <div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-750px">
                    <!--begin::Modal content-->
                    <div class="modal-content rounded">
                        <!--begin::Modal header-->
                        <div class="modal-header pb-0 border-0 justify-content-end">
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
															<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
															<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
														</g>
													</svg>
												</span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--begin::Modal header-->
                        <!--begin::Modal body-->
                    --}}{{--
                        <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                            <!--begin:Form-->
                            <form id="kt_modal_new_ticket_form" class="form" method="post" action="{{route('storeTicket')}}">
                                @csrf
                                <!--begin::Heading-->
                                <div class="mb-13 text-center">
                                    <!--begin::Title-->
                                    <h1 class="mb-3">ثبت تیکت پشتیبانی</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-gray-400 fw-bold fs-5"> تیم پشتیبانی ما در اسرع وقت پاسخگوی شما خواهند بود.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                        <span class="required">موضوع</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="برای تیکت خود موضوع مشخص نمایید"></i>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="موضوع خود را وارد نمایید" name="subject" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row g-9 mb-8">
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-bold mb-2">درجه اهمیت</label>
                                        <select data-dropdown-parent="#kt_modal_new_ticket" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="درجه اهمیت انتخاب کنید" name="importance">
                                            <option value="1">کم</option>
                                            <option value="2">عادی</option>
                                            <option value="3">زیاد</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6 fv-row">
                                        <label class="required fs-6 fw-bold mb-2">واحد مربوطه</label>
                                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="unit">
                                            @foreach($units as $unit)
                                                <option value="{{$unit->id}}">{{$unit->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <label class=" required fs-6 fw-bold mb-2">توضیحات</label>
                                    <textarea class="form-control form-control-solid" rows="4" name="descriptions" placeholder="توضیحات خود را اینجا بنویسید."></textarea>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="reset" id="kt_modal_new_ticket_cancel" class="btn btn-light me-3">لغو</button>
                                    <button type="submit" id="kt_modal_new_ticket_submit" class="btn btn-primary">
                                        <span class="indicator-label">ثبت</span>
                                        <span class="indicator-progress">لطفا صبر کنید...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end:Form-->
                        </div>--}}{{--
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Support Center - Create Ticket-->--}}
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
@endsection
@section('custom_js')
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ URL::asset('profile/assets/js/custom/apps/support-center/tickets/create.js')}}"></script>
    <script src="{{ URL::asset('profile/assets/js/custom/documentation/documentation.js')}}"></script>
    <script src="{{ URL::asset('profile/assets/js/custom/widgets.js')}}"></script>
    <script src="{{ URL::asset('profile/assets/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{ URL::asset('profile/assets/js/custom/modals/create-app.js')}}"></script>
    <script src="{{ URL::asset('profile/assets/js/custom/modals/upgrade-plan.js')}}"></script>
    <!--end::Page Custom Javascript-->
@endsection
