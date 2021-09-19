@extends('profile.layouts.master')
@section('title','آپلود تصاویر دستگاه')
@section('content')
    <div id="kt_content_container" class="container">
        <!--begin::Tables Widget 13-->
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">آپلود تصاویر دستگاه</span>
                    {{-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 orders</span>--}}
                </h3>
            </div>
            <!--end::Header-->
            <img src="" >
            <!--begin::Body-->
            <div class="card-body py-3">
                <img src="{{URL::asset('/uploads/qrcodes').'/qr_'.$id}}" alt="QR Code" class="img-fluid">
                <p>لطفا تصویر فوق را در موبایل خود نمایش دهید و از صفحه دستگاه با دوربین دیگری عکاسی نمایید و در مراحل
                    بعد </p>
                <div class="container mt-5">
                    <form method="post" action="{{route('insertPhoto',$id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            @foreach($imgs as $img)
                                <label class="col-md-4 col-form-label fw-bold fs-6">{{$img->name}}</label>
                                <div class="col-md-6">
                                    <!--begin::Image input-->
                                    <div class="image-input " data-kt-image-input="true"
                                         style="background-image: url('{{ URL::asset('profile/media/avatars/user.jpg') }}')">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-225px h-150px"
                                             style="background-image: url('{{ URL::asset('profile/media/avatars/user.jpg') }}')"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            title="Change avatar">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" class="disabled-input" name="{{$img->html_id}}" accept=".png, .jpg, .jpeg"/>
                                            <input type="hidden" name="{{$img->html_id}}_remove"/>
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
                                    <div class="form-text">{{$img->name}}</div>
                                    <!--end::Hint-->
                                </div>
                                <div class="separator dashed-h my-5"></div>
                            @endforeach

                            <input type="submit" value="ارسال" class="btn btn-success form-control">

                        </div>
                    </form>
                </div>
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 13-->
    </div>
@endsection
