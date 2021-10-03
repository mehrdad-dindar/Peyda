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
                                                <td>{{$row->notifications->title }}</td>
                                                <td>{{$row->notifications->body}}</td>
                                                <td>{{$row->users->getFullNameAttribute($row->users)}} - <span @if($row->users->role->id==1) class="badge badge-dark text-light " @else class="badge badge-primary" @endif  style="font-size: 10px;">{{$row->users->role->title_fa}}</span></td>
                                                <td>{{$row->notifications->sender->getFullNameAttribute($row->notifications->sender)}} - <span @if($row->notifications->sender->role->id==1) class="badge badge-dark text-light " @else class="badge badge-primary" @endif style="font-size: 10px;">{{$row->notifications->sender->role->title_fa}}</span></td>
                                                <td>@if($row->done==0) <span class="badge badge-danger" style="font-size: 10px;">مشاهده نشده</span> @else <span class="badge badge-success" style="font-size: 10px;">مشاهده شده</span> @endif</td>
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
