@extends('profile.layouts.master')
@section('title','تیکت')
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <!--begin::Hero card-->
            <div class="card mb-12">
                <!--begin::Hero body-->
                <div class="card-body flex-column p-5">
                    <!--begin::Hero nav-->
                    <div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
                        <!--begin::Nav-->
                        <ul class="nav flex-wrap border-transparent fw-bolder">
                            <!--begin::Nav item-->
                            <li class="nav-item my-1">
                                <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active" href="{{route('tickets')}}">مرور کلی</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item my-1">
                                <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="{{route('tickets')}}">تیکت ها</a>
                            </li>
                            <!--end::Nav item-->
                            <!--end::Nav item-->
                        </ul>
                        <!--end::Nav-->
                        <!--begin::Action-->
                        <a href="{{route('createTicket')}}" class="btn btn-primary fw-bolder fs-8 fs-lg-base">ثبت تیکت پشتیبانی</a>
                        <!--end::Action-->
                    </div>
                    <!--end::Hero nav-->
                </div>
                <!--end::Hero body-->
            </div>
            <!--end::Hero card-->

            <!--begin::Row-->
            <div class="row gy-0 mb-12">
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card card-md-stretch me-md-3">
                        <!--begin::Body-->
                        <div class="card-body p-10 p-lg-15">
                            <!--begin::Header-->
                            <div class="d-flex flex-stack mb-7">
                                <!--begin::Title-->
                                <h1 class="fw-bolder text-dark">آموزش</h1>
                                <!--end::Title-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Link-->
                                    <a href="https://keenthemes.com/support" class="text-primary fw-bolder me-1">پیدا سرویس ماندگار</a>
                                    <!--begin::Link-->
                                    <!--begin::Arrow-->
                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-primary">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<polygon points="0 0 24 0 24 24 0 24" />
																<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
															</g>
														</svg>
													</span>
                                    <!--end::Svg Icon-->
                                    <!--end::Arrow-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Accordion-->
                            <!--begin::Section-->
                            <div class="m-0">
                                <!--begin::Heading-->
                                <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_1_1">
                                    <!--begin::Icon-->
                                    <div class="ms-n1 me-5">
                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-down.svg-->
                                        <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M8.2928955,3.20710089 C7.90237121,2.8165766 7.90237121,2.18341162 8.2928955,1.79288733 C8.6834198,1.40236304 9.31658478,1.40236304 9.70710907,1.79288733 L15.7071091,7.79288733 C16.085688,8.17146626 16.0989336,8.7810527 15.7371564,9.17571874 L10.2371564,15.1757187 C9.86396402,15.5828377 9.23139665,15.6103407 8.82427766,15.2371482 C8.41715867,14.8639558 8.38965574,14.2313885 8.76284815,13.8242695 L13.6158645,8.53006986 L8.2928955,3.20710089 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 8.499997) scale(-1, -1) rotate(-90.000000) translate(-12.000003, -8.499997)" />
																	<path d="M6.70710678,19.2071045 C6.31658249,19.5976288 5.68341751,19.5976288 5.29289322,19.2071045 C4.90236893,18.8165802 4.90236893,18.1834152 5.29289322,17.7928909 L11.2928932,11.7928909 C11.6714722,11.414312 12.2810586,11.4010664 12.6757246,11.7628436 L18.6757246,17.2628436 C19.0828436,17.636036 19.1103465,18.2686034 18.7371541,18.6757223 C18.3639617,19.0828413 17.7313944,19.1103443 17.3242754,18.7371519 L12.0300757,13.8841355 L6.70710678,19.2071045 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(12.000003, 15.499997) scale(-1, -1) rotate(-360.000000) translate(-12.000003, -15.499997)" />
																</g>
															</svg>
														</span>
                                        <!--end::Svg Icon-->
                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-right.svg-->
                                        <span class="svg-icon toggle-off svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
																</g>
															</svg>
														</span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-wrap">
                                        <!--begin::Title-->
                                        <h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">نحوه ثبت فراگارانتی</h3>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light my-1 d-block">پیدا سرویس ماندگار</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Body-->
                                <div id="kt_support_1_1" class="collapse show fs-6 ms-10">
                                    <!--begin::Block-->
                                    <div class="mb-4">
                                        <!--begin::Text-->
                                        <span class="text-muted fw-bold fs-5">با مراجعه به پنل اقدام به ثبت فراگارانتی نمایید...</span>
                                        <!--end::Text-->
                                        <!--begin::Link-->
                                        <a href="#" class="fs-5 link-primary fw-bold">پیدا سرویس ماندگار</a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Block-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Body-->
                            <!--begin::Section-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6">
                    <!--begin::Card-->
                    <div class="card card-md-stretch ms-md-3">
                        <!--begin::Body-->
                        <div class="card-body p-10 p-lg-15">
                            <!--begin::Header-->
                            <div class="d-flex flex-stack mb-7">
                                <!--begin::Title-->
                                <h1 class="fw-bolder text-dark">سوالات متداول</h1>
                                <!--end::Title-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Link-->
                                    <a href="#" class="text-primary fw-bolder me-1">لیست سوالات متداول</a>
                                    <!--begin::Link-->
                                    <!--begin::Arrow-->
                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Arrow-right.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-primary">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<polygon points="0 0 24 0 24 24 0 24" />
																<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
															</g>
														</svg>
													</span>
                                    <!--end::Svg Icon-->
                                    <!--end::Arrow-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Accordion-->
                            <!--begin::Section-->
                            <div class="m-0">
                                <!--begin::Heading-->
                                <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_support_2_1">
                                    <!--begin::Icon-->
                                    <div class="ms-n1 me-5">
                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-down.svg-->
                                        <span class="svg-icon toggle-on svg-icon-primary svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M8.2928955,3.20710089 C7.90237121,2.8165766 7.90237121,2.18341162 8.2928955,1.79288733 C8.6834198,1.40236304 9.31658478,1.40236304 9.70710907,1.79288733 L15.7071091,7.79288733 C16.085688,8.17146626 16.0989336,8.7810527 15.7371564,9.17571874 L10.2371564,15.1757187 C9.86396402,15.5828377 9.23139665,15.6103407 8.82427766,15.2371482 C8.41715867,14.8639558 8.38965574,14.2313885 8.76284815,13.8242695 L13.6158645,8.53006986 L8.2928955,3.20710089 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 8.499997) scale(-1, -1) rotate(-90.000000) translate(-12.000003, -8.499997)" />
																	<path d="M6.70710678,19.2071045 C6.31658249,19.5976288 5.68341751,19.5976288 5.29289322,19.2071045 C4.90236893,18.8165802 4.90236893,18.1834152 5.29289322,17.7928909 L11.2928932,11.7928909 C11.6714722,11.414312 12.2810586,11.4010664 12.6757246,11.7628436 L18.6757246,17.2628436 C19.0828436,17.636036 19.1103465,18.2686034 18.7371541,18.6757223 C18.3639617,19.0828413 17.7313944,19.1103443 17.3242754,18.7371519 L12.0300757,13.8841355 L6.70710678,19.2071045 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(12.000003, 15.499997) scale(-1, -1) rotate(-360.000000) translate(-12.000003, -15.499997)" />
																</g>
															</svg>
														</span>
                                        <!--end::Svg Icon-->
                                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-double-right.svg-->
                                        <span class="svg-icon toggle-off svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
																</g>
															</svg>
														</span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-wrap">
                                        <!--begin::Title-->
                                        <h3 class="text-gray-800 fw-bold cursor-pointer me-3 mb-0">چگونه پروفایل کاربری خود را تکمیل کنیم؟</h3>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <span class="badge badge-light my-1 d-none">پیدا سرویس ماندگار</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Body-->
                                <div id="kt_support_2_1" class="collapse show fs-6 ms-10">
                                    <!--begin::Block-->
                                    <div class="mb-4">
                                        <!--begin::Text-->
                                        <span class="text-muted fw-bold fs-5">با مراجعه به قسمت پروفایل...</span>
                                        <!--end::Text-->
                                        <!--begin::Link-->
                                        <a href="#" class="d-none"></a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Block-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Body-->
                            <!--begin::Section-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->{{--
            <!--begin::Modal - Support Center - Create Ticket-->
            <div class="modal fade" tabindex="-1" aria-hidden="true">
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
                        <!--begin::Modal header-->--}}{{--
                        <!--begin::Modal body-->
                        <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                            <!--begin:Form-->
                            <form id="kt_modal_new_ticket_form" method="post" action="{{route('storeTicket')}}">
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
                                    <textarea class="form-control form-control-solid" rows="4" name="description" placeholder="توضیحات خود را اینجا بنویسید."></textarea>
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
                        </div>
                        <!--end::Modal body-->--}}{{--
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
