@extends('profile.layouts.master')
@section('title','همه فراگارانتی ها')
@section('custom_head')
@endsection
@section('content')
    <div class="docs-content d-flex flex-column flex-column-fluid" id="kt_docs_content">
        <!--begin::Container-->
        <div class="container" id="kt_docs_content_container">
            <!--begin::Card-->
            <div class="card mb-2">
                <!--begin::Card Body-->
                <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                    <form action="/panel/warranty/mobile/store_use" method="post">
                        @csrf
                    <!--begin::Section-->
                        <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bolder mb-5" id="custom-form-control">
                            <a href="#custom-form-control"></a>استفاده از فراگارانتی</h1>
                        <!--end::Heading-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <label class="form-label">عنوان*</label>
                                    <input type="text" name="title" class="form-control" placeholder="شکستن صفحه" />
                                </div>
                            </div>
                        </div>
                        <div class="py-5">
                            <div class="rounded border p-10">
                                <div class="mb-10">
                                    <label class="form-label">توضیحات</label>
                                    <textarea name="descriptions" class="form-control" placeholder="شکستن اسکرین، خطوط کناره راست و..." ></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="py-5">
                            <div class="rounded border p-10">
                                <!--begin::Form-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Dropzone-->
                                        <div class="dropzone" name="dropzone" id="kt_dropzonejs_example_1">
                                            <!--begin::Message-->
                                            <div class="dz-message needsclick">
                                                <!--begin::Icon-->
                                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
                                                <div class="ms-4">
                                                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1">عکس ها را یکجا انتخاب کنید</h3>
                                                    <span class="fs-7 fw-bold text-primary opacity-75">تا 10 عکس قابل آپلود میباشد</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                        </div>
                                        <!--end::Dropzone-->
                                    </div>
                                    <!--end::Input group-->
                                <!--end::Form-->
                            </div>
                        </div>

                        <div class="py-5">
                            <div class="mb-10">
                                <button type="submit" class="btn btn-success">Success</button>
                            </div>
                        </div>

                        <!--end::Block-->
                    </div>
                    </form>
                    <!--end::Section-->
                </div>
                <!--end::Card Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
@endsection
@section('custom_js')

    <script src="{{URL::asset('profile/js/custom/documentation/forms/dropzonejs.js')}}"></script>
@endsection
