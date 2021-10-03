@extends('profile.layouts.master')
@if($status == 'failed')
    @section('title','خطا در پرداخت، کد : '.$error->getCode())
@elseif($status == 'success')
    @section('title','پرداخت موفق')
@endif
@section('content')
    <div id="kt_content_container" class="container">
        @if($status == 'failed')
            <div class="card shadow-sm bg-light-danger border border-danger border-dashed">
                <div class="card-header">
                    <h3 class="card-title text-danger">خطا در پرداخت</h3>
                    <div class="card-toolbar">
                        <a href="{{route('bimeh_all')}}" type="button"
                           class="btn btn-sm btn-light-danger border border-danger">
                            بازگشت و ادامه
                        </a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="row">
                        <div class="card-p d-flex align-items-center text-center col-md-3">
                    <span class="svg-icon w-100 svg-icon-danger me-4 mb-5 mb-sm-0">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
        <rect id="Rectangle-9" fill="#000000" x="11" y="7" width="2" height="8" rx="1"></rect>
        <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="16" width="2" height="2" rx="1"></rect>
</svg>
                    </span>
                        </div>
                        <div class="card-p col-md-9">
                            <p>
                                علت خطا :
                                <strong>{{$error->getMessage()}}</strong>
                            </p>
                            <p>
                                کد خطا :
                                <strong dir="ltr">{{$error->getCode()}}</strong>
                            </p>
                            <p>
                                شما میتوانید با مراجعه به صفحه <a href="{{route('bimeh_all')}}">همه فراگارانتی ها</a>
                                مجدد اقدام به پرداخت نمایید.
                            </p>
                        </div>
                    </div>
                    <div class="text-center p-4">

                    </div>
                </div>
            </div>
        @elseif($status == 'success')
            <div class="card shadow-sm bg-light-success border border-success border-dashed">
                <div class="card-header">
                    <h3 class="card-title text-success">پرداخت موفق</h3>
                    <div class="card-toolbar">
                        @if($mobilewarranty->warranty_problem_type->id == 5)
                            <a href="{{route('editPhoto',[$mobilewarranty->mobile_warranty_id])}}" type="button"
                               class="btn btn-sm btn-light-danger border border-danger">
                                ویرایش مدارک
                            </a>
                        @else
                            <a href="{{route('bimeh_all')}}" type="button"
                               class="btn btn-sm btn-light-danger border border-danger">
                                بازگشت و ادامه
                            </a>
                        @endif
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="row">
                        <div class="card-p mb-10 text-center col-md-3">
                    <span class="svg-icon svg-icon-5hx svg-icon-success me-4 mb-5 mb-sm-0">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
        <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" id="Path-92" fill="#000000" fill-rule="nonzero"></path>
</svg>
                    </span>
                        </div>
                        <div class="card-p mb-10 col-md-9">
                            <h2>
                                با تشکر از خرید شما
                            </h2>
                            <p>
                                کد پیگیری :
                                <strong dir="ltr">{{$transaction->peyment_id}}</strong>
                            </p>
                            <p>
                                شناسه پرداخت :
                                <strong dir="ltr">{{$transaction->id}}</strong>
                            </p>
                            <p>
                                مبلغ :
                                <strong dir="ltr">{{\App\Helpers\Helpers::toPersianNum($transaction->paid)}}</strong>
                                تومان
                            </p>
                            <p>
                                شما میتوانید با مراجعه به صفحه <a href="{{route('bimeh_all')}}">همه فراگارانتی ها</a>
                                مدارک مورد نیاز جهت تکمیل فراگارانتی را بارگذاری نمایید.
                            </p>
                        </div>
                    </div>
                    <div class="text-center p-4">

                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
@section('custom_js')
@endsection
