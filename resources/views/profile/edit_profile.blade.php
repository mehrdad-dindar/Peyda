@extends('profile.layouts.master')
@section('title','ویرایش اطلاعات حساب کاربری')
@section('custom_head')
    <link rel="stylesheet" href="{{ URL::asset('profile/js/custom/p_datepicker/persian-datepicker-blue.min.css')}}"/>
@endsection
@section('content')
    <div id="kt_content_container" class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-circle symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img
                                src="@if($user->avatar){{URL::asset('uploads/avatars').'/'.$user->avatar}} @else{{ URL::asset('profile/media/avatars/user.jpg') }}@endif"
                                alt="image"/>
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
                                        @switch($user->user_type)
                                            @case('admin')
                                            مدیر سیستم
                                            @break
                                            @case('author')
                                            نویسنده
                                            @break
                                            @case('employee')
                                            کاربر سیستم
                                            @break
                                            @case('customer')
                                            مشتری
                                        @break
                                    @endswitch
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
                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
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
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->
            </div>
        </div>
        <!--end::Navbar-->
        <!--begin::Basic info-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                 data-bs-target="#kt_account_profile_details" aria-expanded="true"
                 aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">اطلاعات کاربری</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
            <!--begin::Content-->
            <div id="kt_account_profile_details" class="collapse show">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
            <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" method="post"
                      action="{{ route('save_profile_info') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">تصویر کاربر</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Image input-->
                                <div class="image-input image-input-circle" data-kt-image-input="true"
                                     style="background-image: url('{{ URL::asset('profile/media/avatars/user.jpg') }}')">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px"
                                         style="background-image: url('@if($user->avatar){{URL::asset('avatars').'/'.$user->avatar}} @else{{ URL::asset('profile/media/avatars/user.jpg') }}@endif')"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg"/>
                                        <input type="hidden" name="avatar_remove"/>
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        title="Cancel avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        title="Remove avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
                                    <!--end::Remove-->
                                </div>

                                <!--end::Image input-->
                                <!--begin::Hint-->
                                <div class="form-text">تصویر 3*4 خود را آپلود نمایید فرمت های(png, jpg, jpeg.) مجاز می
                                    باشد.
                                </div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">نام</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <input type="text" name="f_name"
                                       class="@error('f_name') is-invalid @enderror form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                       placeholder="نام " value="{{ $user->f_name }}"/>
                            </div>
                            <!--end::Col-->

                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">نام خانوادگی</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <input type="text" name="l_name"
                                       class="@error('l_name') is-invalid @enderror form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                       placeholder="نام خانوادگی " value="{{ $user->l_name }}"/>
                            </div>
                            <!--end::Col-->

                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">تاریخ تولد</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                {{--<input type="text" class="example1" />--}}
                                <input type="hidden" value="{{$v = Verta::instance($user->birthday)}}">
                                <input class="form-control form-control-solid" id="birthday"
                                       value="@if($user->birthday != null){{ $v->format('Y-n-j') }}@endif"
                                       placeholder="--/--/----"/>
                                <input type="hidden" name="birthday_tmp" id="birthday_tmp"/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">کد ملی</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <input type="text" name="melli_code"
                                       class="@error('melli_code') is-invalid @enderror form-control form-control-lg form-control-solid"
                                       value="@if($user->melli_code != null){{$user->melli_code}}@endif"/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">عکس کارت ملی</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Image input-->
                                <div class="image-input " data-kt-image-input="true"
                                     style="background-image: url('{{ URL::asset('profile/media/mellicard/sample.jpg') }}')">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-225px h-150px"
                                         style="background-image: url('@if($user->melli_card!=null){{URL::asset('melli_cards').'/'.$user->melli_card}}@endif')"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="melli_card" accept=".png, .jpg, .jpeg"/>
                                        <input type="hidden" name="melli_card_remove"/>
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        title="Cancel avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        title="Remove avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
                                    <!--end::Remove-->
                                </div>

                                <!--end::Image input-->
                                <!--begin::Hint-->
                                <div class="form-text">عکس کارت ملی خود را آپلود کنید</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="">شماره تلفن همراه</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                   title="Phone number must be active"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <input type="tel" name="phone_num"
                                       class="form-control form-control-lg form-control-solid"
                                       placeholder="Phone number"
                                       value="{{$user->phone_num}}"/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">استان</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row ">
                                <select name="city_id" id="city_id" aria-label="Select a city"
                                        data-control="select2"
                                        data-placeholder="استان محل سکونت خود را انتخاب کنید"
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                    <option value="">انتخاب استان</option>
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}" @if($user->city_id == $city->id) selected @endif>{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">آدرس</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <input type="text" name="address"
                                       class="form-control form-control-lg form-control-solid"
                                       value="{{$user->address}}">
                            </div>

                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">کد پستی</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <input type="text" name="postal_code"
                                       class="form-control form-control-lg form-control-solid"
                                       value="{{$user->postal_code}}">
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6 ">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="">برند گوشی</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row ">
                                <select name="phone_brand_id" id="phone_brand" aria-label="Select a Country"
                                        data-control="select2"
                                        data-placeholder="برند گوشی خود را انتخاب کنید"
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                    <option value="">انتخاب برند گوشی</option>
                                    @foreach($phone_brands as $brand)
                                        <option value="{{$brand->id}}" @if($user->phone_brand_id == $brand->id) selected @endif>{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->


                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="">مدل گوشی</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <select name="phone_model_id" id="phone_model" aria-label="Select a Country"
                                        data-control="select2"
                                        data-placeholder="مدل گوشی خود را انتخاب کنید"
                                        class="form-select form-select-solid form-select-lg fw-bold">
                                    <option value="">انتخاب مدل گوشی</option>
                                    @foreach($phone_models as $model)
                                        <option value="{{$model->id}}"
                                                @if($user->phone_model_id == $model->id) selected @endif>{{$model->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">شماره شبا</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <div class="input-group ltr">
                                    <span class="input-group-text" id="basic-addon1">IR</span>
                                    <input type="text" name="bank_shaba"
                                           class="@error('shaba') is-invalid @enderror form-control form-control-lg form-control-solid"
                                           value="{{$user->bank_shaba}}"/>
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">شماره کارت</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <input type="text" name="bank_card"
                                       class="@error('bank_card') is-invalid @enderror form-control form-control-lg form-control-solid"
                                       value="{{$user->bank_card}}"/>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label  fw-bold fs-6">شماره حساب</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row">
                                <input type="text" name="bank_id"
                                       class="@error('bank_id') is-invalid @enderror form-control form-control-lg form-control-solid"
                                       value="{{$user->bank_id}}"/>

                                <div class="form-text">شماره حساب باید به نام شخص باشد
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">ذخیره
                            اطلاعات
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Basic info-->
        <!--begin::Sign-in Method-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                 data-bs-target="#kt_account_signin_method">
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">تغییر رمز عبور</h3>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Content-->
            <div id="kt_account_signin_method" class="collapse show">
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <div id="kt_signin_email_button" class="d-none ms-auto">
                        <input id="kt_signin_cancel">
                        <button class="btn btn-light btn-active-light-primary"></button>
                    </div>
                    <!--begin::Password-->
                    <div class="d-flex flex-wrap align-items-center mb-10">
                        <!--begin::Label-->
                        <div id="kt_signin_password">
                            <div class="fs-6 fw-bolder mb-1">رمز عبور</div>
                            <div class="fw-bold text-gray-600">************</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Edit-->
                        <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                            <!--begin::Form-->
                            <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                                <div class="row mb-1">
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0">
                                            <label for="currentpassword" class="form-label fs-6 fw-bolder mb-3">رمز عبور فعلی</label>
                                            <input type="password"
                                                   class="form-control form-control-lg form-control-solid"
                                                   name="currentpassword" id="currentpassword"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0">
                                            <label for="newpassword" class="form-label fs-6 fw-bolder mb-3">رمز عبور جدید</label>
                                            <input type="password"
                                                   class="form-control form-control-lg form-control-solid"
                                                   name="newpassword" id="newpassword"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0">
                                            <label for="confirmpassword" class="form-label fs-6 fw-bolder mb-3">تکرار رمز عبور جدید</label>
                                            <input type="password"
                                                   class="form-control form-control-lg form-control-solid"
                                                   name="confirmpassword" id="confirmpassword"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-text mb-5">رمز عبور باید شامل حداقل 8 کاراکتر باشد.
                                </div>
                                <div class="d-flex">
                                    <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">
                                        بروزرسانی رمز عبور
                                    </button>
                                    <button id="kt_password_cancel" type="button"
                                            class="btn btn-color-gray-400 btn-active-light-primary px-6">لغو
                                    </button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Edit-->
                        <!--begin::Action-->
                        <div id="kt_signin_password_button" class="ms-auto">
                            <button class="btn btn-light btn-active-light-primary">تغییر رمز عبور</button>
                        </div>
                        <!--end::Action-->
                    </div>
                    <!--end::Password-->
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotone/General/Shield-check.svg-->
                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
												<svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                     height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"/>
														<path
                                                            d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                            fill="#000000" opacity="0.3"/>
														<path
                                                            d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z"
                                                            fill="#000000"/>
													</g>
												</svg>
											</span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                            <!--begin::Content-->
                            <div class="mb-3 mb-md-0 fw-bold">
                                <h4 class="text-gray-900 fw-bolder">توجه !</h4>
                                <div class="fs-6 text-gray-700 pe-7">جهت افزایش امنیت حساب کاربری هنگام تغییر رمز از علائم و حروف کوچک و بزرگ و اعداد استفاده کنید.
                                </div>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Sign-in Method-->
    </div>
@endsection
@section('custom_js')
    <script src="{{ URL::asset('profile/js/custom/account/settings/signin-methods.js') }}"></script>

    <script src="{{ URL::asset('profile/js/custom/p_datepicker/persian-date.min.js')}}"></script>
    <script src="{{ URL::asset('profile/js/custom/p_datepicker/persian-datepicker.min.js')}}"></script>
    <script>
        $('#city_id').val('{{$user->city_id}}');
        $('#phone_brand').val('{{$user->phone_brand_id}}');
        $('#phone_model').val('{{$user->phone_model_id}}');
    </script>
    <script type="text/javascript">
        $('#birthday').persianDatepicker({
            observer: true,
            autoClose: true,
            format: 'YYYY/MM/DD',
            altField: '#birthday_tmp',
            initialValueType: 'persian',
            initialValue: false,
            z: '+3:30',
        });
        persianDate().format('x');
    </script>
    <script>

        $(document).ready(function(){

            $('#phone_brand').on('change',function(){


                var new_val = $("#phone_brand option:selected").val();
                //alert(new_val);
                $.ajax({
                    type: "POST",
                    url: "http://localhost:8000/panel/mobile_change",
                    cache:false,
                    data: {"_token": "{{ csrf_token() }}"
                        ,"id" : new_val},
                    error: function (xhr) {
                        alert(xhr.responseText);
                    },
                    success: function(data) {
                        // Check the output of ajax call on firebug console
                        //console.log(data);
                        //alert(data);
                        $('#phone_model').html(data);
                    }
                });

            });
        });

    </script>

@endsection

