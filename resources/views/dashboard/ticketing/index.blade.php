@extends('dashboard.layouts.master')
@section('title','تیکت')
@section('content')
    <div class="main-content">
        <!-- Table area Start -->
        <div class="container-fluid">
            <div class="row" id="basic-table">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-content bg-white">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title">تیکت</h4>
                            </div>
                            <div class="card-body">
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <form action="{{route('categories.store')}}" method="post" >
                                        @csrf
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ردیف</th>
                                                <th>تاریخ</th>
                                                <th>عنوان</th>
                                                <th>واحد</th>
                                                <th>درجه اهمیت</th>
                                                <th>عملیات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($tickets as $key=>$row)
                                                <tr>
                                                    <td>{{$key+1}}<h6 class="d-inline">@if($row->new==1)<span class="badge ml-1 fw-bolder badge-danger">جدید</span>@endif</h6></td>
                                                    <td>{{ \Hekmatinasser\Verta\Verta::instance($row->updated_at)->format('Y/m/d') }}</td>
                                                    <td>{{ $row->title }}</td>
                                                    <td>{{$row->unit->name}}</td>
                                                    <td>@switch($row->importance)
                                                            @case(1)
                                                            کم
                                                                @break
                                                            @case(2)
                                                            متوسط
                                                                @break
                                                            @case(3)
                                                            زیاد
                                                                @break
                                                            @default
                                                            کم
                                                                @break
                                                        @endswitch
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('showResponse',[$row->id]) }}" class="btn btn-warning mb-2 mr-2">مشاهده</a>
                                                        <a onclick="javascript: return confirm('آیا اطمینان به بستن تیکت دارید؟');" href="{{route('closeTicket',[$row->id])}}" class="btn btn-outline-danger  mb-2 mr-2">بستن تیکت</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </form>
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
