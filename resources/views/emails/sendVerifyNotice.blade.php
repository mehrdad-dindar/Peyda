@extends('layouts.app')
@section('title' , 'ورود به سیستم')
@section('content')
    <div class="d-block d-md-none row d-flex justify-content-center">
        <div class="col-5 mb-3">
            <a href="{{route('index')}}" class="d-inline-block w-100">
                <img src="{{URL::asset('front/img/logo-colored.png')}}" alt="">
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <!-- Logo -->
                    <h4 class="font-18 mb-30">تایید ایمیل</h4>

                    <form method="POST" action="{{ route('doLoginPhone') }}">
                        @csrf
                        @if($errors->any())
                            <div class="col-md-12">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <p>لینک فعالسازی به آدرس ایمیل <strong style="color: #0a53be; cursor: pointer;" onclick="window.location.href='https://mail.google.com/mail/u/?authuser='"{{auth()->user()->email}}>{{auth()->user()->email}}</strong> ارسال شد. لطفا جهت تایید لینک ارسال شده در ایمیل را باز کرده و نسبت به فعالسازی ایمیل خود اقدام فرمایید. </p>
                        <p>
                            کاربر عزیز در صورتی که ایمیل فعال سازی را در Inbox مشاهده نکردید لطفا قسمت Spam را نیز بررسی فرمایید.
                        </p>
                        <div class="row justify-content-center mt-15">
                            <a class="font-13 font-weight-bold" href="{{ route('index') }}">بازگشت به صفحه اصلی</a>
                        </div>
                    </form>
                </div> <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection
