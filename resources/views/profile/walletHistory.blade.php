@extends('profile.layouts.master')
@section('title','تاریخچه تراکنش های من')
@section('custom_head')
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ URL::asset('profile/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <!--end::Page Vendor Stylesheets-->
@endsection
@section('content')
    <!--begin::Container-->
    <div id="kt_content_container" class="container">

        <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
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
                                    <span
                                        class="peyda_price">{{\App\Helpers\Helpers::toPersianNum((int)Crypt::decryptString($i->value))}}</span>
                                    تومان
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
    </div>
    <!--end::Container-->
@endsection
@section('custom_js')
@endsection
