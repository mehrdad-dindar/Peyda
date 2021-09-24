@extends('profile.layouts.master')
@section('title','افزایش اعتبار کیف پول')
@section('custom_head')
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ URL::asset('profile/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <!--end::Page Vendor Stylesheets-->
@endsection
@section('content')
    <!--begin::Container-->
    <div id="kt_content_container" class="container">
        <!--begin::Layout-->
        <form action="{{route('increase')}}" method="post" class="d-flex flex-column flex-lg-row">
        @csrf
        <!--begin::Content-->
            <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                <!--begin::Card-->
                <div class="card pt-4 mb-6 mb-xl-9">
                    <!--begin::Card body-->
                    <div class="card-body p-12">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start flex-xxl-row">

                            <!--begin::Input group-->
                            <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4">
                                <span class="fs-2x fw-bolder text-gray-800">شارژ کیف پول</span>
                            </div>
                            <!--end::Input group-->
                            <div class="d-flex align-items-center justify-content-end flex-equal order-3 fw-row"
                                 data-bs-toggle="tooltip" data-bs-trigger="hover" title=""
                                 data-bs-original-title="نمایش مجموع موجودی کیف پول">
                                <!--begin::Date-->
                                <div class="fs-6 fw-bolder text-gray-700 text-nowrap">موجودی : <span
                                        class="badge badge-light-info fs-6"><span
                                            class="peyda_price">{{\App\Helpers\Helpers::toPersianNum(Crypt::decryptString($wallet->value))}}</span> تومان</span>
                                </div>
                                <!--end::Date-->
                            </div>
                        </div>
                        <!--end::Top-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-10"></div>
                        <!--end::Separator-->
                        <!--begin::Wrapper-->
                        <div class="mb-0">
                            @if ($errors->any())
                                <div
                                    class="alert alert-dismissible bg-light-danger border border-danger border-dashed d-flex flex-column flex-sm-row p-3 mb-10">
                                    <!--begin::Icon-->
                                    <span
                                        class="svg-icon svg-icon-2hx svg-icon-danger me-4 mb-5 mb-sm-0"><svg
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Stockholm-icons-/-General-/-Notifications1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <path
            d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z"
            id="Combined-Shape" fill="#000000"></path>
        <rect id="Rectangle-23" fill="#000000" opacity="0.3" x="10" y="16" width="4" height="4" rx="2"></rect>
    </g>
</svg>
</span>
                                    <!--end::Icon-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column pe-0 ps-sm-10">
                                        <!--begin::Title-->
                                        <h5 class="mb-1">لطفا موارد زیر را بررسی فرمایید !</h5>
                                        <!--end::Title-->
                                        <ul class="mt-5 text-danger">
                                        @foreach ($errors->all() as $error)
                                            <!--begin::Content-->
                                                <li>{{$error}}</li>
                                                <!--end::Content-->
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Close-->
                                    <button type="button"
                                            class="position-absolute position-sm-relative m-2 m-sm-0 top-0 start-0 btn btn-icon me-sm-auto"
                                            data-bs-dismiss="alert">
                                        <i class="bi bi-x fs-1 text-danger"></i>
                                    </button>
                                    <!--end::Close-->
                                </div>
                        @endif
                        <!--begin::Table wrapper-->
                            <div class="table-responsive mb-10">
                                <!--begin::Table-->
                                <table class="table g-5 gs-0 mb-0 fw-bolder text-gray-700" data-kt-element="items">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="border-bottom fs-7 fw-bolder text-gray-700 text-uppercase">
                                        <th class="min-w-300px w-475px">عنوان</th>
                                        <th class="min-w-150px w-150px">مبلغ</th>
                                    </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                    <tr class="border-bottom border-bottom-dashed" data-kt-element="item">
                                        <td class="pe-7">
                                            <input type="text" class="form-control form-control-solid mb-2" name="title"
                                                   placeholder="عنوان برای این پرداخت" required/>
                                        </td>
                                        <td>
                                            <input type="text" id="price"
                                                   class="form-control form-control-solid text-end" name="price"
                                                   placeholder="0" required data-kt-element="price"/>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                    <!--begin::Table foot-->
                                    <tfoot>
                                    <tr class="align-top fw-bolder text-gray-700">
                                        <th></th>
                                        <th colspan="2" class="fs-4 ps-0">قابل پرداخت</th>
                                        <th colspan="2" class="text-end fs-4 text-nowrap">
                                            <span id="total-price">0</span> تومان
                                        </th>
                                    </tr>
                                    </tfoot>
                                    <!--end::Table foot-->
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-1">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>تاریخچه تراکنش ها</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-125px">شماره تراکنش</th>
                                <th class="min-w-125px">عنوان</th>
                                <th class="min-w-125px">مبلغ</th>
                                <th class="min-w-125px">وضعیت</th>
                                <th class="min-w-125px">زمان تراکنش</th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                            @foreach($history as $key=>$i)
                                <tr>
                                    <!--begin::Transaction Id=-->
                                    <td>
                                        {{$key+1}}
                                    </td>
                                    <!--end::Transaction Id=-->
                                    <!--begin::Title=-->
                                    <td>
                                        <p class="text-gray-800 text-hover-primary mb-1">{{$i->title}}</p>
                                    </td>
                                    <!--end::Title=-->
                                    <!--begin::Value=-->
                                    <td class="@if((int)Crypt::decryptString($i->value) < 0) text-danger @else text-success @endif">
                                        <span class="peyda_price">{{\App\Helpers\Helpers::toPersianNum((int)Crypt::decryptString($i->value))}}</span> تومان
                                    </td>
                                    <!--end::Value=-->
                                    <!--begin::Payment method=-->
                                    <td>
                                        <span
                                            class="badge @if($i->status == false) badge-light-danger @else badge-light-success @endif">@if($i->status == false)
                                                خطا در پرداخت @else پرداخت موفق @endif</span>
                                    </td>
                                    <!--end::Payment method=-->
                                    <!--begin::Date=-->
                                    <td>{{\Hekmatinasser\Verta\Verta::instance($i->created_at)->format('%d %B %Y H:i')}}</td>
                                    <!--end::Date=-->
                                </tr>
                            @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content-->
            <!--begin::Sidebar-->
            <div class="flex-lg-auto min-w-lg-300px">
                <!--begin::Card-->
                <div class="card" data-kt-sticky="true" data-kt-sticky-name="invoice"
                     data-kt-sticky-offset="{default: false, lg: '200px'}"
                     data-kt-sticky-width="{lg: '250px', lg: '300px'}" data-kt-sticky-left="auto"
                     data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                    <!--begin::Card body-->
                    <div class="card-body p-10">
                        <!--begin::Input group-->
                        <div class="mb-8">
                            <!--begin::Option-->
                            <label
                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                <span
                                    class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">پرداخت امن زرین پال</span>
                                <input class="form-check-input" type="checkbox" checked="checked" disabled value=""/>
                            </label>
                            <!--end::Option-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed mb-8"></div>
                        <!--end::Separator-->
                        <!--begin::Actions-->
                        <div class="mb-0">
                            <input type="submit" class="btn btn-primary w-100" value="پرداخت">
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Sidebar-->
        </form>
        <!--end::Layout-->
    </div>
    <!--end::Container-->
@endsection
@section('custom_js')
    <script>
        $('#price').on('keyup' ,function () {
            var ccprice = $(this).val();
            $('#total-price').text(ccprice).number(true, 0);
            ccprice = ccprice // Replace the ".00" that we automatically add
                .toString()
                .replace(/\D/g,'') // Replace all that is not a number by nothing
                .replace(/,/g, "") // Replace privous comma by nothing
                .replace(/\B(?=(\d{3})+(?!\d))/g, ","); // And here the magic i don't really understand, but comes from a link that i send you ^^.

            // Set the new val
            $(this).val(ccprice);

            // Now we want the cursor to be before the ".00", so we get the length minus the length of ".00", so 3
            var strLength = ccprice.length;

            // Be sure to focus the input
            $(this).focus();

            // Set the focus before the ".00"
            $(this)[0].setSelectionRange(strLength, strLength);
        });
    </script>
    @if(isset($message) && $code != 100)
        <script>
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr.error("{{$message}}", "خطا");
        </script>
    @elseif(isset($message) && $code == 100)
        <script>
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr.success("{{$message}}", "پرداخت موفق");
        </script>
    @endif
@endsection
