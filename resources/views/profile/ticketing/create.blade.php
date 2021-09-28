@extends('profile.layouts.master')
@section('title','تیکت')
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-xl-row p-7">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-xl-15 mb-20 mb-xl-0">
                            <!--begin::Ticket view-->
                            <form method="post" action="{{route('storeTicket')}}">
                                @csrf
                                <div class="mb-0"><!--begin::Input group-->
                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">موضوع</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                               title="برای تیکت خود موضوع مشخص نمایید"></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid"
                                               placeholder="موضوع خود را وارد نمایید" name="title"/>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row g-9 mb-8">
                                        <!--begin::Col-->
                                        <div class="col-md-6 fv-row">
                                            <label class="required fs-6 fw-bold mb-2">درجه اهمیت</label>
                                            <select
                                                    class="form-select form-select-solid" data-control="select2"
                                                    data-hide-search="true" data-placeholder="درجه اهمیت انتخاب کنید"
                                                    name="importance">
                                                <option value="1">کم</option>
                                                <option value="2">عادی</option>
                                                <option value="3">زیاد</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-6 fv-row">
                                            <label class="required fs-6 fw-bold mb-2">واحد مربوطه</label>
                                            <select class="form-select form-select-solid" data-control="select2"
                                                    data-hide-search="true" data-placeholder="Select a Team Member"
                                                    name="unit">
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
                                        <textarea class="form-control form-control-solid" rows="4" name="descriptions"
                                                  placeholder="توضیحات خود را اینجا بنویسید."></textarea>
                                    </div>
                                    <div class="text-center mb-5">
                                        <input type="submit" name="xxx" value="ثبت" class="btn  btn-primary">
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                </div>
                            </form>
                            <!--end::Ticket view-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Layout-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
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
    @if(isset($error))
        <script>
            toastr.error('{{$error}}');
        </script>

    @endif
        @if(isset($success))

        <script>
            toastr.success('{{$success}}');
        </script>

    @endif
    <!--end::Page Custom Javascript-->
@endsection
