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
                                            <th>ایمیل</th>
                                            <th>بازه قیمت</th>
                                            <th>برند</th>
                                            <th>کد فعالسازی</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($warranties as $warranty)
                                            <tr>
                                                <td>{{ $warranty-> email}}</td>

                                                <td>{{$warranty -> price_range}}</td>

                                                <td>{{$warranty -> pb_name}}</td>

                                                <td>{{$warranty -> activation_code}}</td>

                                                <td><a href="#" class="btn btn-outline-danger btn-sm">حذف</a>
                                                    <a href="#" class="btn btn-primary btn-sm">ویرایش</a>
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
