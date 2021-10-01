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
            <img src="">
            <!--begin::Body-->
            <div class="card-body py-3 ">
                <div class="container mt-10">
                    <h6>کد QR</h6>
                    <div class="d-flex justify-content-center">{!! $qrcode !!}</div>
                    <div class="d-flex justify-content-center mt-5"><p>لطفا تصویر فوق را در موبایل خود نمایش دهید و از
                            صفحه دستگاه با دوربین دیگری عکاسی نمایید و در مراحل
                            بعد: </p></div>
                </div>
                <div class="container mt-10">
                    <form method="post" action="{{route('updatePhoto',['id'=>$id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            @foreach($imgs as $key=>$img)
                                <label class="col-md-4 col-form-label fw-bold fs-6 mb-2">{{$img->name}}</label>
                                <div class="col-6 col-md-4 mb-2">
                                    <!--begin::Image input-->
                                    <div class="image-input " data-kt-image-input="true"
                                         style="background-image: url('{{ URL::asset('uploads/reserved/reserved_image_upload.png') }}'); opacity: 0.7; background-position: center">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125       px h-125px"

                                             @if(isset($images[$key])) style="background-image: url('{{ URL::asset('uploads/warranty_images/'.$images[$key]['URL']) }}'); opacity: 0.7; background-position: center" @else style="background-image: url('{{ URL::asset('uploads/reserved/reserved_image_upload.png') }}'); opacity: 0.7; background-position: center" @endif

                                             ></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            title="آپلود تصویر">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" class="disabled-input" name="{{$img->html_id}}"
                                                   accept=".png, .jpg, .jpeg"/>
                                            <input type="hidden" class="disabled-input" name="type_{{$img->html_id}}"
                                                   value="{{$img->id}}"
                                                   accept=".png, .jpg, .jpeg"/>
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
                                    <div class="form-text">{{$img->description}}</div>
                                    <!--end::Hint-->
                                </div>
                                <div class="col-6 p-3 col-md-2 mb-2">
                                    <span class="badge badge-primary">مثال:</span>
                                    <img src="{{ URL::asset('uploads/reserved/'.$img->sample_URL) }}" class="img-fluid rounded" alt="">
                                </div>
                                <div class="separator dashed-h my-5"></div>
                                @if(isset($images[$key]))
                                    <input type="hidden" name="hidden_{{$img->html_id}}" value="{{$images[$key]->id}}">
                                @endif
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
@section('custom_js')
    @if(isset($error))
        <script>
            toastr.error('{{$error}}', "خطا !");
        </script>
    @endif
@endsection
