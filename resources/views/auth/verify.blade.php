@extends('layouts.app')
@section('title','تایید آدرس ایمیل')
@section('content')
    <div class="card">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="xs-d-none mb-50-xs break-320-576-none">
                        <img src="{{ URL::asset('admin/img/bg-img/2.png')}}" alt="">
                    </div>
                </div>

                <div class="col-md-6">
                    <h4 class="font-18 mb-30">آدرس ایمیل خود را تأیید کنید</h4>

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            یک لینک تأیید جدید به آدرس ایمیل شما ارسال شده است.
                        </div>
                    @endif
                    <p>قبل از ادامه ، لطفاً ایمیل خود را برای لینک تأیید بررسی کنید.</p>
                    <p>اگر ایمیل را دریافت نکردید،
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">برای درخواست لینک جدید اینجا
                            را کلیک کنید
                        </button>
                        .
                    </form>
                    </p>

                </div> <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection
