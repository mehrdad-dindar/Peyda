@extends('profile.layouts.master')
@section('title','پروفایل کاربری')
@section('content')
    <!--begin::Container-->
    <div id="kt_content_container" class="container">
        <!--begin::Layout-->
        <form action="{{route('increase')}}" method="post" class="d-flex flex-column flex-lg-row">
            @csrf
            <!--begin::Content-->
            <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                <!--begin::Card-->
                <div class="card">
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
                                        class="badge badge-light-info fs-6">0 تومان</span></div>
                                <!--end::Date-->
                            </div>
                        </div>
                        <!--end::Top-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-10"></div>
                        <!--end::Separator-->
                        <!--begin::Wrapper-->
                        <div class="mb-0">
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
                                                   placeholder="عنوان برای این پرداخت"/>
                                        </td>
                                        <td>
                                            <input type="text" id="price"
                                                   class="form-control form-control-solid text-end" name="price"
                                                   placeholder="0" value="0" data-kt-element="price"/>
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
    <script src="{{ URL::asset('js/jquery.number.min.js')}}"></script>
    <script>
        $('#price').keyup(function () {
            var ccprice = $('#price').val();
            $('#total-price').text(ccprice).number(true, 0);
        });
    </script>
@endsection
