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
                                <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="{{route('ticketOverviews')}}">مرور کلی</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item my-1">
                                <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active" href="{{route('tickets')}}">تیکت ها</a>
                            </li>
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
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-xl-row p-7">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-xl-15 mb-20 mb-xl-0">
                            <!--begin::Tickets-->
                            <div class="mb-0">
                                <!--begin::Heading-->
                                <h1 class="text-dark mb-10">تیکت ها</h1>
                                <!--end::Heading-->
                                <!--begin::Tickets List-->
                                <div class="mb-10">
                                    <!--begin::Ticket-->
                                    @foreach($tickets as $ticket)
                                        <div class="d-flex mb-10">
                                            <!--begin::Symbol-->
                                            <!--begin::Svg Icon | path: icons/duotone/Files/File-done.svg-->
                                            <span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-success">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                        <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--end::Symbol-->
                                            <!--begin::Section-->
                                            <div class="d-flex flex-column">
                                                <!--begin::Content-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <!--begin::Title-->
                                                    <a href="{{route('viewTicket',$ticket->id)}}" class="text-dark text-hover-primary fs-4 me-3 fw-bold">{{$ticket->title}}</a>
                                                    <!--end::Title-->
                                                    <!--begin::Label-->
                                                    <span class="badge badge-light my-1">{{$ticket->unit->name}}</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Text-->
                                                <span class="text-muted fw-bold fs-6"></span>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                    @endforeach
                                    <!--end::Ticket-->
                                </div>
                                <!--end::Tickets List-->
                                <!--begin::Pagination-->
                                {{--<ul class="pagination">
                                    <li class="page-item previous disabled">
                                        <a href="#" class="page-link">
                                            <i class="previous"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">6</a>
                                    </li>
                                    <li class="page-item next">
                                        <a href="#" class="page-link">
                                            <i class="next"></i>
                                        </a>
                                    </li>
                                </ul>--}}
                                <!--end::Pagination-->
                            </div>
                            <!--end::Tickets-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Layout-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
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
