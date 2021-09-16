@extends('layouts.app')
@section('title' , 'ورود به سیستم')
@section('content')
    <div class="card">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="xs-d-none mb-50-xs break-320-576-none">
                        <img src="admin/img/bg-img/1.png" alt="">
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Logo -->
                    <h4 class="font-18 mb-30">ورود به پنل کاربری</h4>

                    <form method="POST" action="{{ route('doVerify') }}">
                        @csrf
                        <div class="form-group">
                            <label class="float-left" for="code">کد تأیید</label>
                            <input class="form-control  @error('code') is-invalid @enderror" type="text" id="code"  name="code" required autocomplete="code" autofocus>
                            @error('code')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="form-group mb-0">
                            <button class="btn btn-primary btn-block" type="submit">بررسی و ادامه</button>
                        </div>
                        <div class="form-group d-flex justify-content-between align-items-center mb-3">
                            <div class="checkbox d-inline mb-0">
                                <input type="checkbox" name="remember" id="checkbox-8" {{ old('remember') ? 'checked' : '' }}>
                                <label for="checkbox-8" class="cr mb-0">مرا به یاد آور</label>
                            </div>
                            <span class="font-13 text-primary">
                            @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">رمز عبور خود را فراموش کرده اید؟</a>
                                @endif
                        </span>
                        </div>

                        <div class="row mt-20 justify-content-md-center">
                            <div class="col-6">
                                <a href="#" class="btn btn-googleplus waves-effect waves-light mb-2 btn-block"><i class="fa fa-envelope-o  mr-2"></i><span class="text-center">ورود با ایمیل</span></a>
                            </div>
                        </div>

                        <div class="text-center mt-15"><span class="mr-2 font-13 font-weight-bold">اگر ثبت نام نکرده اید؟ </span><a class="font-13 font-weight-bold" href="{{ route('register') }}">ثبت نام کنید</a></div>
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