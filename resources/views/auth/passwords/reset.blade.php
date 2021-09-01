@extends('layouts.app')
@section('title' , 'تنظیم رمز عبور جدید')
@section('content')
    <div class="card">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="xs-d-none mb-50-xs break-320-576-none">
                        <img src="{{ URL::asset('admin/img/bg-img/1.png') }}" alt="">
                    </div>
                </div>

                <div class="col-md-6">
                    <h4 class="font-18 mb-30">تنظیم رمز عبور جدید</h4>

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <label class="lock-text text-dark" for="email">ایمیل</label>
                            <input type="email" class="form-control height-50  @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="lock-text text-dark" for="password">رمز عبور جدید</label>
                            <input type="password" class="form-control height-50  @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" required autocomplete="password" >
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="lock-text text-dark" for="password-confirm">تایید رمز عبور جدید</label>
                            <input type="password" class="form-control height-50" id="password-confirm" name="password_confirmation" value="{{ old('email') }}" required autocomplete="new-password" >
                        </div>

                        <div class="form-group mb-0">
                            <button class="btn btn-primary btn-block" type="submit">تغییر رمز عبور</button>
                        </div>
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
