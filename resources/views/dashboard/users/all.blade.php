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
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>نام کاربر</th>
                                            <th>ایمیل</th>
                                            <th>وضعیت</th>
                                            <th>نقش کاربری</th>
                                            <th>شماره تماس</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td><img class="chat-img mr-2 border-radius-50"
                                                                           src="{{ URL::asset('admin/img/member-img/1.png') }}" alt="">{{ $user->name }}
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if($user->status)
                                                    <span class="badge badge-success-lighten">احراز شده</span>
                                                @else
                                                    <span class="badge badge-danger-lighten">عدم احراز</span>
                                                @endif
                                            </td>
                                            <td>
                                                @switch($user->user_type)
                                                    @case('admin')
                                                    مدیر سیستم
                                                    @break
                                                    @case('author')
                                                    نویسنده
                                                    @break
                                                    @case('employee')
                                                    کاربر سیستم
                                                    @break
                                                    @case('customer')
                                                    مشتری
                                                    @break
                                                @endswitch
                                            </td>
                                            <td>0{{ $user->phone }}</td>
                                            <td>
                                                @if($user->sender_id==null)
                                            <a href="{{ route('dashboard') }}/users/edit/{{$user->id}}" class="btn btn-primary btn-sm">احراز هویت</a>
                                                    @else
                                                    <a style="color: white;" class="btn btn-secondary btn-sm">احراز هویت</a>
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
