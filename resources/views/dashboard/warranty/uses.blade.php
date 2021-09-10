@extends('dashboard.layouts.master')
@section('title','استفاده از بیمه نامه ها')
@section('content')
    <div class="main-content">
        <!-- Table area Start -->
        <div class="container-fluid">
            <div class="row" id="basic-table">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">درخواست های استفاده</h4>
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>موضوع</th>
                                            <th>بازه قیمت</th>
                                            <th>مدل گوشی</th>
                                            <th>کد فعالسازی</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($uses as $row)
                                            <tr>
                                                <td>{{ $row-> title}}</td>

                                                <td>{{$row -> price_range}}</td>

                                                <td>{{$row -> pm_name}}</td>

                                                <td>{{$row -> activation_code}}</td>

                                                <td><a href="#" class="btn btn-outline-danger btn-sm">حذف</a>
                                                    <a href="{{ route('dashboard') }}/warranties/show/admit/{{$row->id}}" class="btn btn-primary btn-sm">نمایش</a>
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
