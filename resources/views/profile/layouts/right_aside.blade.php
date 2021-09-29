<style>
    .disabled-a:hover{
        cursor: not-allowed;
    }
</style>
<div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo py-8" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="{{ route('index') }}" class="d-flex align-items-center">
            <img alt="Logo" src="{{ URL::asset('front/img/logo-white.png')}}" class="h-90px logo"/>
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true"
             data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
             data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div
                class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold"
                id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item py-2">
                    <a class="menu-link active menu-center" href="{{ route('panel') }}" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="left">
										<span class="menu-icon me-0">
											<i class="bi bi-house fs-2"></i>
										</span>
                        <span class="menu-title">داشبورد</span>
                    </a>
                </div>
                <div data-kt-menu-trigger="click" data-kt-menu-placement="left-start" class="menu-item py-2">
                    <span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click"
                          data-bs-placement="left">
                        <span class="menu-icon me-0">
                            <i class="bi bi-file-earmark-lock fs-2"></i>
                        </span>
                        <span class="menu-title">فراگارانتی</span>
                    </span>
                    <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                        <div class="menu-item">
                            <div class="menu-content">
                                <span class="menu-section fs-5 fw-bolder ps-1 py-1">فراگارانتی ها</span>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a @if(auth()->user()->status==1) class="menu-link"
                               href="{{ route('bimeh_add') }}"
                               @else
                               class="menu-link disabled-a"

                                @endif >
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">افزودن</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a @if(auth()->user()->status==1) class="menu-link"
                                   href="{{ route('bimeh_all') }}"
                               @else
                                class="menu-link disabled-a"

                               @endif >
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">همه</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a @if(auth()->user()->status==1) class="menu-link"
                               href="{{ route('receive_create') }}"
                               @else
                               class="menu-link disabled-a"

                                @endif >
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">دریافت فراگارانتی از شخص دیگر</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a @if(auth()->user()->status==1) class="menu-link"
                               href="{{ route('use_all') }}"
                               @else
                               class="menu-link disabled-a"

                                @endif >
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">استفاده از فراگارانتی</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="menu-item py-2">
                    <a class="menu-link menu-center position-relative" href="{{ route('tickets') }}" data-bs-trigger="hover"
                       data-bs-dismiss="click" data-bs-placement="left">
										<span class="menu-icon me-0">
											<i class="bi bi-messenger fs-2"></i>
										</span>
                        <span class="menu-title">پشتیبانی</span>
                        @if(\App\Http\Controllers\Controller::getTicketNum()>0)
                            <span class="badge rounded-circle badge-danger position-absolute top-25 end-0 p-2 me-2 mt-2">{{\App\Http\Controllers\Controller::getTicketNum()}}</span>
                        @endif
                    </a>
                </div>

            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
    {{-- <!--begin::Footer-->

    <div class="aside-footer flex-column-auto" id="kt_aside_footer">
        <!--begin::Menu-->
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btm-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click"
                    data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-kt-menu-flip="top-end"
                    data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" title="دسترسی       سریع">
                <!--begin::Svg Icon | path: icons/duotone/Communication/Dial-numbers.svg-->
                <span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                         viewBox="0 0 24 24" version="1.1">
										<rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="2"/>
										<rect fill="#000000" x="4" y="10" width="4" height="4" rx="2"/>
										<rect fill="#000000" x="10" y="4" width="4" height="4" rx="2"/>
										<rect fill="#000000" x="10" y="10" width="4" height="4" rx="2"/>
										<rect fill="#000000" x="16" y="4" width="4" height="4" rx="2"/>
										<rect fill="#000000" x="16" y="10" width="4" height="4" rx="2"/>
										<rect fill="#000000" x="4" y="16" width="4" height="4" rx="2"/>
										<rect fill="#000000" x="10" y="16" width="4" height="4" rx="2"/>
										<rect fill="#000000" x="16" y="16" width="4" height="4" rx="2"/>
									</svg>
								</span>
                <!--end::Svg Icon-->
            </button>
            <!--begin::Menu 2-->
            <div
                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator mb-3 opacity-75"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">New Ticket</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">New Customer</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start"
                     data-kt-menu-flip="left-start, top">
                    <!--begin::Menu item-->
                    <a href="#" class="menu-link px-3">
                        <span class="menu-title">New Group</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <!--end::Menu item-->
                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Admin Group</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Staff Group</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Member Group</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">New Contact</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator mt-3 opacity-75"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content px-3 py-3">
                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                    </div>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu 2-->
        </div>
        <!--end::Menu-->
    </div>

    <!--end::Footer-->
    --}}
</div>
