@extends('profile.layouts.master')
@section('title','افزودن فراگارانتی')
@section('content')
    <div id="kt_content_container" class="container">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body p-0">
                <!--begin::Heading-->
                <div class="card-px text-center py-20 my-10">
                    <!--begin::Title-->
                    <h2 class="fs-2x fw-bolder mb-10">فراگارانتی </h2>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <p class="text-gray-500 fs-5 fw-bold mb-13">برای ایجاد فراگارانتی مورد نظر خود دکمه ایجاد را
                        بفشارید.</p>
                    <!--end::Description-->
                    <!--begin::Action-->
                    <a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal"
                       data-bs-target="#kt_modal_create_project">ایجاد فراگارانتی</a>
                    <!--end::Action-->
                </div>
                <!--end::Heading-->
                <!--begin::Illustration-->
                <div class="text-center px-5">
                    <img src="{{ URL::asset('profile/media/illustrations/networks.png')}}" alt=""
                         class="mw-100 mh-300px"/>
                </div>
                <!--end::Illustration-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
        <!--begin::Modal - Create Project-->
        <div class="modal fade" id="kt_modal_create_project" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-fullscreen p-9">
                <!--begin::Modal content-->
                <div class="modal-content rounded">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2>ایجاد فراگارانتی</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                            <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                         height="24px" viewBox="0 0 24 24" version="1.1">
														<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                           fill="#000000">
															<rect fill="#000000" x="0" y="7" width="16" height="2"
                                                                  rx="1"/>
															<rect fill="#000000" opacity="0.5"
                                                                  transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                                  x="0" y="7" width="16" height="2" rx="1"/>
														</g>
													</svg>
												</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y m-5">
                        <!--begin::Stepper-->


                        <!--begin::Stepper-->
                        <div class="stepper stepper-pills" id="kt_stepper_add_mobile_warranty">
                            <!--begin::Nav-->
                            <div class="stepper-nav flex-center flex-wrap mb-10">
                                <!--begin::Step 1-->
                                <div class="stepper-item mx-2 my-4 current" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->

                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            نوع فراگارانتی
                                        </h3>

                                        <div class="stepper-desc">
                                            Description
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>

                                <!--end::Step 1-->

                                <!--begin::Step 3-->
                                <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->

                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!--begin::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            تعیین بازه قیمت
                                        </h3>

                                        <div class="stepper-desc">
                                            Description
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 3-->
                            {{--
                                                            <!--begin::Step 4-->
                                                            <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                                                                <!--begin::Line-->
                                                                <div class="stepper-line w-40px"></div>
                                                                <!--end::Line-->

                                                                <!--begin::Icon-->
                                                                <div class="stepper-icon w-40px h-40px">
                                                                    <i class="stepper-check fas fa-check"></i>
                                                                    <span class="stepper-number">4</span>
                                                                </div>
                                                                <!--begin::Icon-->

                                                                <!--begin::Label-->
                                                                <div class="stepper-label">
                                                                    <h3 class="stepper-title">
                                                                        آپلود عکس موبایل
                                                                    </h3>

                                                                    <div class="stepper-desc">
                                                                        Description
                                                                    </div>
                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Step 4-->--}}
                            <!--begin::Step 4-->
                                <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->

                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--begin::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            هدیه همراه فراگارانتی
                                        </h3>

                                        <div class="stepper-desc">
                                            بیمه آتش سوزی منزل مسکونی
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 4-->
                            </div>
                            <!--end::Nav-->

                            <!--begin::Form-->
                            <form class="form w-lg-500px mx-auto" novalidate="novalidate"
                                  id="kt_stepper_add_mobile_warranty_form" method="POST" action="{{route('save')}}">
                                @csrf
                                <input type="hidden" name="owner_id" value="{{ auth()->user()->id }}">
                                <!--begin::Group-->
                                <div class="mb-5">
                                    <!--begin::Step 1-->
                                    <div class="flex-column current" data-kt-stepper-element="content">
                                        <!--begin::Type-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-7 pb-lg-12">
                                                    <!--begin::Title-->
                                                    <h1 class="fw-bolder text-dark">نوع فراگارانتی</h1>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <span
                                                        class="text-muted">برای چه دستگاهی فرا گارانتی ثبت میکنید ؟</span>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-15" data-kt-buttons="true">
                                                    <!--begin::Option-->
                                                    <label
                                                        class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6 active">
                                                        <!--begin::Input-->
                                                        <input class="btn-check" type="radio" checked
                                                               name="warranty_type" value="1"/>
                                                        <!--end::Input-->

                                                        <input type="hidden" name="my_phone_model"
                                                               value="{{auth()->user()->phone_model_id}}">
                                                        <!--begin::Label-->
                                                        <span class="d-flex" id="first_select">
																			<!--begin::Icon-->
                                                            <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
																			<span class="svg-icon svg-icon-3hx">
																				<svg xmlns="http://www.w3.org/2000/svg"
                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                     width="24px" height="24px"
                                                                                     viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1"
                                                                                       fill="none" fill-rule="evenodd">
																						<polygon
                                                                                            points="0 0 24 0 24 24 0 24"/>
																						<path
                                                                                            d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"
                                                                                            opacity="0.3"/>
																						<path
                                                                                            d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                                                            fill="#000000"
                                                                                            fill-rule="nonzero"/>
																					</g>
																				</svg>
																			</span>
                                                            <!--end::Svg Icon-->
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
																			<span class="ms-4">
																				<span
                                                                                    class="fs-3 fw-bolder text-gray-900 mb-2 d-block">فراگارانتی تلفن همراه خودم</span>
																				<span
                                                                                    class="fw-bold fs-4 text-muted">{{ $myPhoneName }}</span>
																			</span>
                                                            <!--end::Info-->
																		</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin::Option-->
                                                    <label
                                                        class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6">
                                                        <!--begin::Input-->
                                                        <input class="btn-check" type="radio" name="warranty_type"
                                                               value="2"/>
                                                        <!--end::Input-->
                                                        <!--begin::Label-->
                                                        <span class="d-flex" id="new_mobile_select_btn">
																			<!--begin::Icon-->
                                                            <!--begin::Svg Icon-->
																			<span class="svg-icon svg-icon-3hx">
																				<svg xmlns="http://www.w3.org/2000/svg"
                                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                     width="24px" height="24px"
                                                                                     viewBox="0 0 24 24" version="1.1">
																					<g stroke="none" stroke-width="1"
                                                                                       fill="none" fill-rule="evenodd">
																						<rect x="5" y="5" width="5"
                                                                                              height="5" rx="1"
                                                                                              fill="#000000"/>
																						<rect x="14" y="5" width="5"
                                                                                              height="5" rx="1"
                                                                                              fill="#000000"
                                                                                              opacity="0.3"/>
																						<rect x="5" y="14" width="5"
                                                                                              height="5" rx="1"
                                                                                              fill="#000000"
                                                                                              opacity="0.3"/>
																						<rect x="14" y="14" width="5"
                                                                                              height="5" rx="1"
                                                                                              fill="#000000"
                                                                                              opacity="0.3"/>
																					</g>
																				</svg>
																			</span>
                                                            <!--end::Svg Icon-->
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
																			<span class="ms-4">
																				<span
                                                                                    class="fs-3 fw-bolder text-gray-900 mb-2 d-block">فراگارانتی تلفن همراه جدید</span>
																				{{--<span
                                                                                    class="fw-bold fs-4 text-muted">{{ auth()->user()->phone_brand->name." / ".auth()->user()->phone_model->name }}</span>--}}
																			</span>
                                                            <!--end::Info-->
																		</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <div id="new_mobile_select" class="row" style="display:none;">
                                                        <div class="col-md-6">
                                                            <div class="mb-10">
                                                                <label for="" class="form-label">انتخاب برند</label>
                                                                <select
                                                                    name="new_phone_brand" id="new_phone_brand"
                                                                    data-dropdown-parent="#kt_modal_create_project"
                                                                    aria-label="انتخاب برند"
                                                                    data-control="select2"
                                                                    data-placeholder="انتخاب برند"
                                                                    class="disabled-input form-select form-select-solid form-select-lg fw-bold">
                                                                    <option></option>
                                                                    @foreach($brands as $row)
                                                                        <option
                                                                            value="{{$row->id}}">{{$row->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-10">
                                                                <label for="" class="form-label">انتخاب مدل</label>
                                                                <select
                                                                    name="new_phone_model" id="new_phone_model"
                                                                    data-dropdown-parent="#kt_modal_create_project"
                                                                    aria-label="انتخاب مدل"
                                                                    data-control="select2"
                                                                    data-placeholder="انتخاب مدل"
                                                                    class="form-select form-select-solid form-select-lg fw-bold">
                                                                    <option></option>
                                                                    @foreach($models_first as $model)
                                                                        <option
                                                                            value="{{$model->id}}">{{$model->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <input type='hidden' name='other_model'
                                                                       id='other_model'>

                                                            </div>
                                                        </div>
                                                        <div class="my_other_model row mb-6" style="display:none;">
                                                            <!--begin::Label-->
                                                            <label class="col-lg-4 col-form-label fw-bold fs-6">مدل گوشی
                                                                جدید</label>
                                                            <!--end::Label-->
                                                            <!--begin::Col-->
                                                            <div class="col-lg-6 fv-row">
                                                                <input type="text" name="other_phone_model"
                                                                       class="disabled-input form-control form-control-lg form-control-solid">
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Type-->
                                    </div>
                                    <!--begin::Step 1-->

                                    <!--begin::Step 3-->
                                    <div class="flex-column" data-kt-stepper-element="content">
                                        <!--begin::Wrapper-->
                                        <div class="w-100">
                                            <!--begin::Heading-->
                                            <div class="pb-12">
                                                <!--begin::Title-->
                                                <h1 class="fw-bolder text-dark">تعیین بازه قیمت</h1>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Input group-->
                                            <div class="fv-row mb-8">
                                                <!--begin::Label-->
                                                <div id="kt_modal_create_project_settings_logo">
                                                    <label class="required fs-6 fw-bold mb-2">بازه قیمت دستگاه تلفن
                                                        همراه</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select id="cc_price_select" class="form-select form-select-solid"
                                                            aria-label="انتخاب بازه قیمت دستگاه" data-control="select2"
                                                            data-placeholder="انتخاب بازه قیمت دستگاه"
                                                            data-dropdown-parent="#kt_modal_create_project"
                                                            name="price_range">
                                                        <option value="">انتخاب بازه قیمت دستگاه</option>
                                                        @foreach($commitment_ceilings as $cc)
                                                            <option value="{{$cc->id}}"
                                                                    data-price="{{$cc->price}}">{{$cc->price_range}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div id="cc_price_show_box"
                                                         class="notice bg-light-success rounded border-success text-success border border-dashed mt-3 p-3 text-center"
                                                         style="display: none">
                                                        <span class="svg-icon svg-icon-1 svg-icon-success me-4">
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                                 version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g id="Stockholm-icons-/-Shopping-/-Dollar" stroke="none"
                                                               stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect id="bound" x="0" y="0" width="24"
                                                                      height="24"></rect>
                                                                <rect id="Rectangle" fill="#000000" opacity="0.3"
                                                                      x="11.5" y="2" width="2" height="4" rx="1"></rect>
                                                                <rect id="Rectangle-Copy-3" fill="#000000" opacity="0.3"
                                                                      x="11.5" y="16" width="2" height="5"
                                                                      rx="1"></rect>
                                                                <path
                                                                    d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z"
                                                                    id="Combined-Shape" fill="#000000"></path>
                                                            </g>
                                                        </svg>
                                                        </span>
                                                        <span id="cc_price_show"></span>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>

                                    <!--begin::Step 3-->

                                    <div class="flex-column" data-kt-stepper-element="content">
                                        <!--begin::Wrapper-->
                                        <div class="w-100">
                                            <!--begin::Heading-->
                                            <div class="pb-12">
                                                <!--begin::Title-->
                                                <h1 class="fw-bolder text-dark">هدیه بیمه آتش سوزی پیدا سرویس</h1>
                                                <!--end::Title-->
                                                {{--<!--begin::Description-->
                                                <div class="text-muted fw-bold fs-4">If you need more info, please check
                                                    <a href="#" class="link-primary">Project Guidelines</a></div>
                                                <!--end::Description-->--}}
                                            </div>
                                            <!--end::Heading-->
                                            <div
                                                class="notice d-flex bg-light-primary rounded border-primary text-primary border border-dashed p-6 mb-3">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Warning-1-circle.svg-->
                                                <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
<path opacity="0.25"
      d="M3 14C3 13.4477 3.44772 13 4 13H20C20.5523 13 21 13.4477 21 14V19C21 20.6569 19.6569 22 18 22H6C4.34315 22 3 20.6569 3 19V14Z"
      fill="#7E8299"/>
<path opacity="0.25"
      d="M2 8C2 6.89543 2.89543 6 4 6H20C21.1046 6 22 6.89543 22 8V9C22 10.1046 21.1046 11 20 11H4C2.89543 11 2 10.1046 2 9V8Z"
      fill="#7E8299"/>
<path fill-rule="evenodd" clip-rule="evenodd"
      d="M7 5C7 6.65685 8.34315 8 10 8H11V10.5C11 10.7761 11.2239 11 11.5 11H12.5C12.7761 11 13 10.7761 13 10.5V8H14C15.6569 8 17 6.65685 17 5C17 3.34315 15.6569 2 14 2C13.2316 2 12.5308 2.28885 12 2.76389C11.4692 2.28885 10.7684 2 10 2C8.34315 2 7 3.34315 7 5ZM10.5 6C10.7761 6 11 5.77614 11 5.5V5C11 4.44772 10.5523 4 10 4C9.44772 4 9 4.44772 9 5C9 5.55228 9.44772 6 10 6H10.5ZM13.5 6C13.2239 6 13 5.77614 13 5.5V5C13 4.44772 13.4477 4 14 4C14.5523 4 15 4.44772 15 5C15 5.55228 14.5523 6 14 6H13.5Z"
      fill="#7E8299"/>
<path
    d="M11 13.5C11 13.2239 11.2239 13 11.5 13H12.5C12.7761 13 13 13.2239 13 13.5V21.5C13 21.7761 12.7761 22 12.5 22H11.5C11.2239 22 11 21.7761 11 21.5V13.5Z"
    fill="#7E8299"/>
</svg>
										</span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack flex-grow-1">
                                                    <!--begin::Content-->
                                                    <div class="fw-bold">
                                                        <h4 class="text-primary fw-bolder">بیمه آتش سوزی منزل
                                                            مسکونی</h4>
                                                        <div class="fs-6 text-primary">تا سقف 50 میلیون تومان</div>
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <div
                                                class="notice d-flex bg-light-info rounded border-info text-primary border border-dashed p-6 mb-3">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotone/Code/Warning-1-circle.svg-->
                                                <span class="svg-icon svg-icon-2tx svg-icon-info me-4">
											<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Stockholm-icons-/-Shopping-/-Sale2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <polygon id="Combined-Shape" fill="#000000" opacity="0.3"
                 points="12 20.0218549 8.47346039 21.7286168 6.86905972 18.1543453 3.07048824 17.1949849 4.13894342 13.4256452 1.84573388 10.2490577 5.08710286 8.04836581 5.3722735 4.14091196 9.2698837 4.53859595 12 1.72861679 14.7301163 4.53859595 18.6277265 4.14091196 18.9128971 8.04836581 22.1542661 10.2490577 19.8610566 13.4256452 20.9295118 17.1949849 17.1309403 18.1543453 15.5265396 21.7286168"></polygon>
        <polygon id="Stroke-1" fill="#000000"
                 points="14.0890818 8.60255815 8.36079737 14.7014391 9.70868621 16.049328 15.4369707 9.950447"></polygon>
        <path
            d="M10.8543431,9.1753866 C10.8543431,10.1252593 10.085524,10.8938719 9.13585777,10.8938719 C8.18793881,10.8938719 7.41737243,10.1252593 7.41737243,9.1753866 C7.41737243,8.22551387 8.18793881,7.45690126 9.13585777,7.45690126 C10.085524,7.45690126 10.8543431,8.22551387 10.8543431,9.1753866"
            id="Fill-2" fill="#000000" opacity="0.3"></path>
        <path
            d="M14.8641422,16.6221564 C13.9162233,16.6221564 13.1456569,15.8535438 13.1456569,14.9036711 C13.1456569,13.9520555 13.9162233,13.1851857 14.8641422,13.1851857 C15.8138085,13.1851857 16.5826276,13.9520555 16.5826276,14.9036711 C16.5826276,15.8535438 15.8138085,16.6221564 14.8641422,16.6221564 Z"
            id="Fill-4" fill="#000000" opacity="0.3"></path>
    </g>
</svg>
										</span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack flex-grow-1">
                                                    <!--begin::Content-->
                                                    <div class="fw-bold">
                                                        <h4 class="text-info fw-bolder">افزایش سقف تعهد</h4>
                                                        <div class="fs-6 text-info"><p>در صورت تمایل به افزایش پوشش بیمه
                                                                آتش سوزی از فیلد زیر گزینه مورد نظر خود را انتخاب
                                                                کنید.</p>
                                                            <span id="fcc_price_show"></span>
                                                        </div>
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">مبلغ افزایش
                                                    تعهد</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6 fv-row ">
                                                    <select id="fcc_price_select" name="fire_addition_price"
                                                            aria-label="انتخاب مبلغ"
                                                            data-control="select2"
                                                            data-placeholder="انتخاب مبلغ"
                                                            data-dropdown-parent="#kt_modal_create_project"
                                                            class="form-select form-select-solid form-select-lg fw-bold">
                                                        <option></option>
                                                        @foreach($fire_commitment_ceilings as $fcc)
                                                            <option value="{{ $fcc->id }}"
                                                                    data-price="{{$fcc->price}}">{{$fcc->addition_price}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--begin::Step 4-->
                                </div>
                                <!--end::Group-->

                                <!--begin::Actions-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" class="btn btn-light btn-active-light-primary"
                                                data-kt-stepper-action="previous">
                                            بازگشت
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-primary" data-kt-stepper-action="submit">
                    <span class="indicator-label">
                        صدور فاکتور و پرداخت
                    </span>
                                            <span class="indicator-progress">
                        لطفاً صبر کنید ... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                                        </button>

                                        <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                            ادامه
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Stepper-->


                        <!--end::Stepper-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Create Project-->
    </div>

@endsection
@section('custom_js')
    <script src="{{ URL::asset('js/jquery.number.min.js')}}"></script>
    <script src="{{ URL::asset('js/bimeh_add.js')}}"></script>
    <script>
        $(document).ready(function () {

            $('#new_phone_brand').on('change', function () {

                var getUrl = window.location;

                var new_val = $("#new_phone_brand option:selected").val();
                //alert(new_val);
                $.ajax({
                    type: "POST",
                    url: getUrl.protocol + "//" + getUrl.host + "/panel/mobile_change",
                    cache: false,
                    data: {
                        "_token": "{{ csrf_token() }}"
                        , "id": new_val
                    },
                    error: function (xhr) {
                        alert(xhr.responseText);
                    },
                    success: function (data) {
                        // Check the output of ajax call on firebug console
                        //console.log(data);
                        //alert(data);
                        var obj = jQuery.parseJSON(data);
                        $('#new_phone_model').html(obj[0]);
                        //alert(data);
                        $('#other_model').val(obj[1]);
                    }
                });

            });
        });
    </script>
    @if(isset($error))
        <script>
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-center",
                "preventDuplicates": false,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.error($error);
        </script>

    @endif
@endsection
