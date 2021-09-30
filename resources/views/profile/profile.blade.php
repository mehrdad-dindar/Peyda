@extends('profile.layouts.master')
@section('title','پروفایل کاربری')
@section('content')
    <div id="kt_content_container" class="container">
    @if(!$user->status)
        <!--begin::Notice-->
            <div class="notice mb-5 d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                <!--begin::Icon-->
                <!--begin::Svg Icon | path: icons/duotone/Code/Warning-1-circle.svg-->
                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                 viewBox="0 0 24 24" version="1.1">
												<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
												<rect fill="#000000" x="11" y="7" width="2" height="8" rx="1"/>
												<rect fill="#000000" x="11" y="16" width="2" height="2" rx="1"/>
											</svg>
										</span>
                <!--end::Svg Icon-->
                <!--end::Icon-->

                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-grow-1">
                    <!--begin::Content-->
                    <div class="fw-bold">
                        <h4 class="text-gray-900 fw-bolder">پروفایل کاربری خود را تکمیل نمایید !</h4>
                        <div class="fs-6 text-gray-700">جهت استفاده از تمام امکانات سایت لطفا
                            <a class="fw-bolder" href="{{route('edit_profile')}}">پروفایل کاربری</a>
                            خود را تکمیل نمایید.
                        </div>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Notice-->
    @endif
        <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img src="@if($user->avatar)
                            {{URL::asset('uploads/avatars').'/'.$user->avatar}}
                            @else
                            {{ URL::asset('profile/media/avatars/user.jpg') }}
                            @endif" alt="image"/>
                            <div
                                class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
                        </div>
                    </div>
                    <!--end::Pic-->
                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="{{ route('profile') }}"
                                       class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{ $user->f_name." ".$user->l_name }}</a>
                                    <a href="{{ route('profile') }}">
                                        <!--begin::Svg Icon | path: icons/duotone/Design/Verified.svg-->
                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                     height="24px" viewBox="0 0 24 24" version="1.1">
																	<path
                                                                        d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                                                                        fill="#00A3FF"/>
																	<path class="permanent"
                                                                          d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                                                                          fill="white"/>
																</svg>
															</span>
                                        <!--end::Svg Icon-->
                                    </a>
                                </div>
                                <!--end::Name-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                    <a href="#"
                                       class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
															<svg xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                 height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
                                                                   fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24"/>
																	<path
                                                                        d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        opacity="0.3"/>
																	<path
                                                                        d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                                        fill="#000000" fill-rule="nonzero"/>
																</g>
															</svg>
														</span>
                                                {{$user->role->title_fa}}
                                    <!--end::Svg Icon--></a>
                                    @if($user->city)
                                        <a href="#"
                                           class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <!--begin::Svg Icon | path: icons/duotone/Map/Marker1.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
															<svg xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                 height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none"
                                                                   fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"/>
																	<path
                                                                        d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z"
                                                                        fill="#000000" fill-rule="nonzero"/>
																</g>
															</svg>
														</span>
                                            <!--end::Svg Icon-->{{ $user->city->name }}</a>
                                    @endif
                                    @if($user->email)
                                        <a href="" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <!--begin::Svg Icon | path: icons/duotone/Communication/Mail-at.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                     height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <path
                                                                        d="M11.575,21.2 C6.175,21.2 2.85,17.4 2.85,12.575 C2.85,6.875 7.375,3.05 12.525,3.05 C17.45,3.05 21.125,6.075 21.125,10.85 C21.125,15.2 18.825,16.925 16.525,16.925 C15.4,16.925 14.475,16.4 14.075,15.65 C13.3,16.4 12.125,16.875 11,16.875 C8.25,16.875 6.85,14.925 6.85,12.575 C6.85,9.55 9.05,7.1 12.275,7.1 C13.2,7.1 13.95,7.35 14.525,7.775 L14.625,7.35 L17,7.35 L15.825,12.85 C15.6,13.95 15.85,14.825 16.925,14.825 C18.25,14.825 19.025,13.725 19.025,10.8 C19.025,6.9 15.95,5.075 12.5,5.075 C8.625,5.075 5.05,7.75 5.05,12.575 C5.05,16.525 7.575,19.1 11.575,19.1 C13.075,19.1 14.625,18.775 15.975,18.075 L16.8,20.1 C15.25,20.8 13.2,21.2 11.575,21.2 Z M11.4,14.525 C12.05,14.525 12.7,14.35 13.225,13.825 L14.025,10.125 C13.575,9.65 12.925,9.425 12.3,9.425 C10.65,9.425 9.45,10.7 9.45,12.375 C9.45,13.675 10.075,14.525 11.4,14.525 Z"
                                                                        fill="#000000"/>
                                                                </svg>
                                                            </span>
                                            <!--end::Svg Icon-->{{ $user->email }}</a>
                                    @endif
                                    <a href="" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotone/Communication/Mail-at.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
    <path d="M11.914857,14.1427403 L14.1188827,11.9387145 C14.7276032,11.329994 14.8785122,10.4000511 14.4935235,9.63007378 L14.3686433,9.38031323 C13.9836546,8.61033591 14.1345636,7.680393 14.7432841,7.07167248 L17.4760882,4.33886839 C17.6713503,4.14360624 17.9879328,4.14360624 18.183195,4.33886839 C18.2211956,4.37686904 18.2528214,4.42074752 18.2768552,4.46881498 L19.3808309,6.67676638 C20.2253855,8.3658756 19.8943345,10.4059034 18.5589765,11.7412615 L12.560151,17.740087 C11.1066115,19.1936265 8.95659008,19.7011777 7.00646221,19.0511351 L4.5919826,18.2463085 C4.33001094,18.1589846 4.18843095,17.8758246 4.27575484,17.613853 C4.30030124,17.5402138 4.34165566,17.4733009 4.39654309,17.4184135 L7.04781491,14.7671417 C7.65653544,14.1584211 8.58647835,14.0075122 9.35645567,14.3925008 L9.60621621,14.5173811 C10.3761935,14.9023698 11.3061364,14.7514608 11.914857,14.1427403 Z" id="Path-76" fill="#000000"></path>
</svg>

                                                            </span>
                                        <!--end::Svg Icon-->{{ $user->phone_num }}</a>
                                </div>
                                <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                    <a href="#"
                                       class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                                        @if($user->status==0)
                                            <div class="col-lg-8 d-flex align-items-center">
                                                <span class="badge badge-danger">احراز هویت تایید نشده</span>
                                            </div>
                                        @else
                                            <div class="col-lg-8 d-flex align-items-center">
                                                <span class="badge badge-success">احراز هویت تایید شده</span>
                                            </div>
                                        @endif
                                        </a>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <div class="fs-2 fw-bolder counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$"><span id="wallet-val">{{\App\Helpers\Helpers::toPersianNum(Crypt::decryptString($wallet->value))}}</span> تومان</div>
                                            </div>
                                            <!--end::Number-->
                                            <!--begin::Label-->
                                            <div class="fw-bold fs-6 text-gray-400">اعتبار کیف پول</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->
            </div>
        </div>
        <!--end::Navbar-->
        <!--begin::details View-->
        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
            <!--begin::Card header-->
            <div class="card-header cursor-pointer">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">اطلاعات کاربری</h3>
                </div>
                <!--end::Card title-->
                <!--begin::Action-->
                <a @if(!auth()->user()->status) href="{{route('edit_profile')}}" @else onclick="javascript: return alert('بعد از احراز هویت تنها از طریق ارسال تیکت میتوانید مشخصات خود را ویرایش نمایید.');" @endif class="btn btn-primary align-self-center">ویرایش اطلاعات</a>
                <!--end::Action-->
            </div>
            <!--begin::Card header-->
            <!--begin::Card body-->
            <div class="card-body p-9">
                <!--begin::Row-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-bold text-muted">نام و نام خانوادگی</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <span class="fw-bolder fs-6 text-gray-800">{{ $user->f_name." ".$user->l_name }}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Input group-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-bold text-muted">استان</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <span
                            class="fw-bold text-gray-800 fs-6">{{ $user->city_id != null ? $user->city->name : "--------" }}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-bold text-muted">آدرس</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <span
                            class="fw-bold text-gray-800 fs-6">{{ $user->address != null ? $user->address : "--------" }}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <!--begin::Input group-->
                <!--end::Input group-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-bold text-muted">شماره تلفن همراه
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                           title="شماره تلفن همراه باید تایید شود"></i></label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 d-flex align-items-center">
                        <span
                            class="fw-bolder fs-6 text-gray-800 me-2">{{ $user->phone_num != null ? $user->phone_num : "--------" }}</span>
                        @if($user->phone_num)
                            @if($user->phone_num_verified_at)
                                <span class="badge badge-success">تایید شده</span>
                            @else
                                <span class="badge badge-danger">تایید نشده</span>
                            @endif
                        @endif
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-bold text-muted">کد ملی</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <span
                            class="fw-bold text-gray-800 fs-6">{{ $user->melli_code != null ? \App\Helpers\Helpers::toPersianNumOnly($user->melli_code) : "--------" }}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--end::Input group-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-bold text-muted">تصویر کارت ملی
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                           title="کارت ملی باید تایید شود"></i></label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 d-flex align-items-center">
                        @if($user->melli_card)
                            <div class="symbol w-225px h-150px symbol-fixed position-relative">
                                <img src="{{ URL::asset('uploads/melli_cards/'.$user->melli_card) }}" class="w-225px h-150px"/>
                            </div>
                        @else
                            <div class="col-lg-8 d-flex align-items-center">
                                <span class="badge badge-danger">تصویر کارت ملی آپلود نشده</span>
                            </div>
                        @endif
                    </div>

                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--end::Input group-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-bold text-muted">تصویر پشت کارت ملی
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                           title="تصویر پشت کارت ملی باید تایید شود"></i></label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 d-flex align-items-center">
                        @if($user->melli_card_back)
                            <div class="symbol w-225px h-150px symbol-fixed position-relative">
                                <img src="{{ URL::asset('uploads/melli_cards/'.$user->melli_card_back) }}" class="w-225px h-150px"/>
                            </div>
                        @else
                            <div class="col-lg-8 d-flex align-items-center">
                                <span class="badge badge-danger">تصویر پشت کارت ملی آپلود نشده</span>
                            </div>
                        @endif
                    </div>

                    <!--end::Col-->
                </div>
                <!--end::Input group-->


                <!--begin::Input group-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-bold text-muted">تاریخ تولد</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <span
                            class="fw-bold text-gray-800 fs-6">{{ $user->birthday != null ? \App\Helpers\Helpers::toPersianNumOnly(Verta($user->birthday)->format('Y/m/d')) : "--/--/----" }}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-bold text-muted">برند موبایل شخصی</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <span
                            class="fw-bold text-gray-800 fs-6">{{ $user->phone_model_id != null ? $user->phone_model->phone_brand->name : "----------------" }}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-bold text-muted">مدل موبایل شخصی</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <span
                            class="fw-bold text-gray-800 fs-6">{{ $user->phone_model_id != null ? $user->phone_model->name : "----------------" }}</span>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--end::Input group-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-bold text-muted">آدرس ایمیل
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                           title="آدرس ایمیل باید تایید شود"></i></label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 d-flex align-items-center">
                        <span
                            class="fw-bolder fs-6 text-gray-800 me-2">{{ $user->email != null ? $user->email : "xxxxxxx@xxxxx.xxx" }}</span>
                        @if($user->email)
                            @if($user->email_verified_at)
                                <span class="badge badge-success">تایید شده</span>
                            @else
                                <span class="badge badge-danger">تایید نشده</span>
                            @endif
                        @endif
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

            </div>
            <!--end::Card body-->
        </div>
        <!--end::details View-->
    </div>
@endsection
@section('custom_js')
    @if(isset($msg))
        <script>
            toastr.success('{{$msg}}','اطلاعات تکمیل شد!')
        </script>
    @endif
@endsection
