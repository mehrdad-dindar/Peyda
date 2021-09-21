@extends('dashboard.layouts.master')
@section('title','بیمه نامه ها')
@section('content')
    <div class="main-content">
        <!-- Table area Start -->
        <div class="container-fluid">
            <div class="row" id="basic-table">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">بیمه نامه های پیدا سرویس</h4>
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>کاربر</th>
                                            <th>بازه قیمت</th>
                                            <th>مدل گوشی</th>
                                            <th>کد فعالسازی</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($warranties as $warranty)
                                            <tr>
                                                <td>{{ $warranty-> user->getFullName()}}</td>

                                                <td>{{$warranty ->Commitment_ceiling-> price_range}}</td>

                                                <td>{{$warranty -> phone_model->phone_brand->name}}</td>

                                                <td>{{$warranty -> activation_code}}</td>

                                                <td><a href="#" class="btn btn-outline-danger btn-sm">حذف</a>
                                                    <a href="{{ route('dashboard') }}/warranties/show/{{$warranty->id}}" class="btn btn-primary btn-sm">نمایش</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
