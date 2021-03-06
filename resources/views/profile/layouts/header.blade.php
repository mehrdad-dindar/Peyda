<div id="kt_header" style="" class="header align-items-stretch">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Aside mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n1 me-2" title="Show aside menu">
            <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                 id="kt_aside_mobile_toggle">
                <!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
                <span class="svg-icon svg-icon-2x mt-1">
										<svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                             viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"/>
												<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"/>
												<path
                                                    d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z"
                                                    fill="#000000" opacity="0.3"/>
											</g>
										</svg>
									</span>
                <!--end::Svg Icon-->
            </div>
        </div>
        <!--end::Aside mobile toggle-->
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center justify-content-center flex-grow-1 flex-lg-grow-0">
            <a href="{{ route('index') }}" class="d-lg-none">
                <img alt="Logo" src="{{ URL::asset('front/img/logo-colored-1.png')}}" class="h-30px"/>
            </a>
        </div>
        <!--end::Mobile logo-->
        <!--begin::Wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <!--begin::Navbar-->
            <div class="d-flex align-items-stretch" id="kt_header_nav">
                <!--begin::Menu wrapper-->
                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu"
                     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                     data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end"
                     data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true"
                     data-kt-swapper-mode="prepend"
                     data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                    <!--begin::Menu-->
                    <div
                        class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
                        id="#kt_header_menu" data-kt-menu="true">
                        <div class="menu-item here show me-lg-1">
                            <a class="menu-link active py-3" href="{{ route('index') }}">
                                <span class="menu-title">????????</span>
                            </a>
                        </div>
                        <div class="menu-item me-lg-1">
                            <a class="menu-link py-3" href="{{route('about_us')}}">
                                <span class="menu-title">???????????? ????</span>
                            </a>
                        </div>
                        <div class="menu-item me-lg-1">
                            <a class="menu-link py-3" href="{{route('our_services')}}">
                                <span class="menu-title">????????????????????</span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start"
                             class="menu-item menu-lg-down-accordion me-lg-1">
												<span class="menu-link py-3">
													<span class="menu-title">???????? ?????????? </span>
													<span class="menu-arrow ms-1"></span>
												</span>
                            <div
                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                     data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
														<span class="menu-link py-3">
															<span class="menu-icon">
																<i class="bi bi-sticky fs-3"></i>
															</span>
															<span class="menu-title">???????? ?????????????????</span>
                                                            <span
                                                                class="badge bg-primary ms-2">???? ????????</span>
														</span>
                                </div>
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                     data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
														<span class="menu-link py-3">
															<span class="menu-icon">
																<i class="bi bi-sticky fs-2"></i>
															</span>
															<span class="menu-title">???????? ??????????</span>
                                                            <span
                                                                class="badge bg-primary ms-2">???? ????????</span>
														</span>
                                </div>
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                     data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
														<span class="menu-link py-3">
															<span class="menu-icon">
																<i class="bi bi-sticky fs-3"></i>
															</span>
															<span class="menu-title">???????? ?????????? ??????</span>
                                                            <span
                                                                class="badge bg-primary ms-2">???? ????????</span>
														</span>

                                </div>
                                <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                     data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
														<span class="menu-link py-3">
															<span class="menu-icon">
																<i class="bi bi-sticky fs-3"></i>
															</span>
															<span class="menu-title">???? ???????????? ???? ????????</span>
                                                            <span
                                                                class="badge bg-primary ms-2">???? ????????</span>
														</span>

                                </div>
                            </div>
                        </div>
                        <div class="menu-item me-lg-1">
                            <a class="menu-link py-3" href="{{route('shop')}}">
                                <span class="menu-title">?????????????? ??????????????</span>
                            </a>
                        </div>
                        <div class="menu-item me-lg-1">
                            <a class="menu-link py-3" href="{{route('archive_blog')}}">
                                <span class="menu-title">?????????? ?? ????????????</span>
                            </a>
                        </div>
                        <div class="menu-item me-lg-1">
                            <a class="menu-link py-3" href="{{route('contact_us')}}">
                                <span class="menu-title">???????? ???? ????</span>
                            </a>
                        </div>
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Menu wrapper-->
            </div>
            <!--end::Navbar-->
            <!--begin::Topbar-->
            <div class="d-flex align-items-stretch flex-shrink-0">
                <!--begin::Toolbar wrapper-->
                <div class="d-flex align-items-stretch flex-shrink-0">
                    <!--begin::Activities-->
                    <div class="d-flex align-items-center ms-1 ms-lg-3">
                        <style>
                            .fa-stack[data-count]:after {
                                position: absolute;
                                right: 80%;
                                top: 39%;
                                content: attr(data-count);
                                font-size: 11%;
                                padding: .6em;
                                border-radius: 999px;
                                line-height: .75em;
                                color: white;
                                background: rgba(255, 0, 0, .85);
                                text-align: center;
                                min-width: 1em;
                                font-weight: bold;
                            }
                        </style>
                        <!--begin::Drawer toggle-->

                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                             id="kt_activities_toggle">

                            @if(sizeof(\App\Http\Controllers\Controller::getNotification(auth()->user()->id))>0)
                                <span class="fa-stack fa-5x has-badge"
                                      data-count="{{sizeof(\App\Http\Controllers\Controller::getNotification(auth()->user()->id))}}">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-bell fa-stack-1x fa-inverse"></i>
                                </span>
                            @endif
                            <i class="bi bi-bell fs-2"></i>
                        </div>
                        <!--end::Drawer toggle-->
                    </div>
                    <!--end::Activities-->
                    <!--begin::User-->
                    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                        <!--begin::Menu wrapper-->
                        <div class="cursor-pointer symbol symbol-circle symbol-30px symbol-md-40px"
                             data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                             data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                            <img
                                src="@if(auth()->user()->avatar){{URL::asset('uploads/avatars').'/'.auth()->user()->avatar}} @else{{ URL::asset('profile/media/avatars/user.jpg') }}@endif"
                                alt="metronic"/>
                        </div>
                        <!--begin::Menu-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-circle symbol-50px me-5">
                                        <img alt="Logo"
                                             src="@if(auth()->user()->avatar){{URL::asset('uploads/avatars').'/'.auth()->user()->avatar}} @else{{ URL::asset('profile/media/avatars/user.jpg') }}@endif"/>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5">{{Auth::user()->name}}
                                            {{--<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>--}}
                                        </div>
                                        <a href="#"
                                           class="fw-bold text-muted text-hover-primary fs-7">{{Auth::user()->email}}</a>
                                    </div>
                                    <!--end::Username-->
                                </div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="{{ route('wallet') }}" class="menu-link px-5">
                                    <span class="menu-text"><i class="bi bi-wallet-fill me-2"></i>?????? ??????</span>
                                    <span class="menu-badge">
                                        <span class="badge badge-light-danger fw-bolder fs-7">
                                            <span
                                                class="peyda_price">{{number_format(Crypt::decryptString($wallet->value))}}</span> ??????????
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="{{ route('profile') }}" class="menu-link px-5"><i class="bi bi-person-circle me-2"></i>?????????????? ????</a>
                            </div>
                            <div class="menu-item px-5">
                                <a href="{{ route('walletHistory') }}" class="menu-link px-5"><i class="bi bi-currency-dollar me-2"></i>?????????????? ???????????????????</a>
                            </div>
                            <!--end::Menu item-->
                        {{--<!--begin::Menu item-->
                        <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start" data-kt-menu-flip="bottom">
                            <a href="#" class="menu-link px-5">
                                <span class="menu-title">My Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo6/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo6/dist/account/billing.html" class="menu-link px-5">Billing</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo6/dist/account/statements.html" class="menu-link px-5">Payments</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo6/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                            <span class="form-check-label text-muted fs-7">Notifications</span>
                                        </label>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="../../demo6/dist/account/statements.html" class="menu-link px-5">My Statements</a>
                        </div>
                        <!--end::Menu item-->--}}
                        <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                        {{--<!--begin::Menu item-->
                        <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start" data-kt-menu-flip="bottom">
                            <a href="#" class="menu-link px-5">
                                <span class="menu-title position-relative">Language
                                    <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                        <img class="w-15px h-15px rounded-1 ms-2" src="{{ URL::asset('profile/media/flags/united-states.svg') }}" alt="metronic"
                                        /></span></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo6/dist/account/settings.html" class="menu-link d-flex px-5 active">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1" src="{{ URL::asset('profile/media/flags/united-states.svg')}}" alt="metronic" />
                                                        </span>English</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo6/dist/account/settings.html" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1" src="{{ URL::asset('profile/media/flags/spain.svg') }}" alt="metronic" />
                                                        </span>Spanish</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo6/dist/account/settings.html" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1" src="{{ URL::asset('profile/media/flags/germany.svg') }}" alt="metronic" />
                                                        </span>German</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo6/dist/account/settings.html" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1" src="{{ URL::asset('profile/media/flags/japan.svg') }}" alt="metronic" />
                                                        </span>Japanese</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo6/dist/account/settings.html" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            <img class="rounded-1" src="{{ URL::asset('profile/media/flags/france.svg') }}" alt="metronic" />
                                                        </span>French</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->--}}
                        <!--begin::Menu item-->
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="{{ route('logout') }}" class="menu-link px-5">
                                    <i class="bi bi-box-arrow-left me-2"></i>
                                    ???????? ???? ??????????
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::User -->
                    <!--begin::Heaeder menu toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-2" title="Show header menu">
                        <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                             id="kt_header_menu_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotone/Text/Toggle-Right.svg-->
                            <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24">
														<g stroke="none" stroke-width="1" fill="none"
                                                           fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"/>
															<path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M22 11.5C22 12.3284 21.3284 13 20.5 13H3.5C2.6716 13 2 12.3284 2 11.5C2 10.6716 2.6716 10 3.5 10H20.5C21.3284 10 22 10.6716 22 11.5Z"
                                                                  fill="black"/>
															<path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M14.5 20C15.3284 20 16 19.3284 16 18.5C16 17.6716 15.3284 17 14.5 17H3.5C2.6716 17 2 17.6716 2 18.5C2 19.3284 2.6716 20 3.5 20H14.5ZM8.5 6C9.3284 6 10 5.32843 10 4.5C10 3.67157 9.3284 3 8.5 3H3.5C2.6716 3 2 3.67157 2 4.5C2 5.32843 2.6716 6 3.5 6H8.5Z"
                                                                  fill="black"/>
														</g>
													</svg>
												</span>
                            <!--end::Svg Icon-->
                        </div>
                    </div>
                    <!--end::Heaeder menu toggle-->
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>
