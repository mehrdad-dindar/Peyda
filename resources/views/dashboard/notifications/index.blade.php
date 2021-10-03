@extends('dashboard.layouts.master')
@section('title','نوتیفیکشن ها')
@section('content')

    @if(count($errors->all())>0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <i class="dripicons-wrong mr-2"></i>{{$error}}
            </div>
        @endforeach
    @endif
    <div class="main-content">
        <!-- Table area Start -->
        <div class="container-fluid">
            <div class="row" id="basic-table">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">نوتیفیکیشن ها</h4>
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    @csrf
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>موضوع</th>
                                            <th>توضیحات</th>
                                            <th>دریافت کننده</th>
                                            <th>فرستنده</th>
                                            <th>وضعیت</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($notifications as $key=>$row)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$row->title }}</td>
                                                <td>{{$row->body}}</td>
                                                <td>{{$row->users->getFullNameAttribute($row->users)}}</td>
                                                <td>{{$row->body}}</td>
                                                <td>{{$row->body}}</td>
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
@section('custom_js')
@endsection
