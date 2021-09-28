@extends('dashboard.layouts.master')
@section('title','کاربران')
@section('content')
    <div class="main-content">
        <!-- Table area Start -->
        <div class="container-fluid">
            <div class="row" id="basic-table">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">کاربران پیدا سرویس</h4>
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>کاربر</th>
                                            <th>ایمیل</th>
                                            <th>وضعیت</th>
                                            <th>نقش کاربری</th>
                                            <th>شماره تماس</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $key=>$user)
                                        <tr>
                                            <td>{{$key+1}}<h6 class="d-inline"><span class="badge ml-1 fw-bolder badge-danger">جدید</span></h6></td>
                                            <td>
                                                <img class="chat-img ml-2 border-radius-50"
                                                                           src="{{ $user->avatar ? URL::asset('uploads/avatars/'.$user->avatar) : URL::asset('admin/img/member-img/1.png') }}" alt="{{ $user->getFullNameAttribute($user) }}">
                                                {{ $user->getFullNameAttribute($user) }}
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if($user->status)
                                                    <span class="badge badge-success-lighten">احراز شده</span>
                                                @else
                                                    <span class="badge badge-danger-lighten">عدم احراز</span>
                                                @endif
                                            </td>
                                            <td>{{$user->role->title_fa}}</td>
                                            <td>{{ $user->phone_num }}</td>
                                            <td>
                                            @if(sizeof($user->userrequests->toArray())>0)

                                                @if($user->userrequests->toArray()[0]['admin_id']==null && $user->status==0)
                                                    <a href="{{ route('dashboard') }}/users/edit/{{$user->id}}/1" class="btn btn-success btn-sm">احراز هویت</a>
                                                @elseif($user->userrequests->toArray()[0]['admin_id']!=null && $user->status==0)
                                                    @if($user->userrequests->toArray()[0]['admin_id']==auth()->user()->id)
                                                        <a href="{{ route('dashboard') }}/users/edit/{{$user->id}}/1" class="btn btn-success btn-sm">احراز هویت</a>
                                                    @else

                                                        <a style="color: white;" class="btn btn-secondary btn-sm">احراز هویت</a>
                                                    @endif
                                                @elseif($user->status==1)

                                                    <a href="{{ route('dashboard') }}/users/edit/{{$user->id}}/1" class="btn btn-primary btn-sm">شناسنامه</a>
                                                @endif


                                                @else

                                                    <a href="{{ route('dashboard') }}/users/edit/{{$user->id}}/1" class="btn btn-primary btn-sm">شناسنامه</a>
                                            @endif
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
