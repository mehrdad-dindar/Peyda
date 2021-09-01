@extends('layouts.app')
@section('title','عضویت')
@section('content')
    <div class="card">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="xs-d-none mb-50-xs break-320-576-none">
                        <img src="admin/img/bg-img/2.png" alt="">
                    </div>
                </div>

                <div class="col-md-6">
                    <h4 class="font-18 mb-30">ثبت نام</h4>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f_name">نام</label>
                                        <input class="form-control @error('f_name') is-invalid @enderror" type="text" id="f_name"
                                               name="f_name" value="{{ old('f_name') }}" required autocomplete="f_name" autofocus>
                                        @error('f_name')
                                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="l_name">نام خانوادگی</label>
                                        <input class="form-control @error('l_name') is-invalid @enderror" type="text" id="l_name"
                                               name="l_name" value="{{ old('l_name') }}" required autocomplete="l_name" autofocus>
                                        @error('l_name')
                                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">ادرس ایمیل</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email"
                                   id="email" name="email" value="{{ old('email') }}" required
                                   autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">رمز عبور</label>
                            <input class="form-control @error('password') is-invalid @enderror" type="password"
                                   id="password" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">تکرار رمز عبور</label>

                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group mb-0 mt-15">
                            <button class="btn btn-primary btn-block" type="submit">ثبت نام</button>
                        </div>

                        <div class="text-center mt-15"><span class="mr-2 font-13 font-weight-bold">قبلا ثبت نام کرده اید؟</span><a
                                    class="font-13 font-weight-bold" href="{{ route('login') }}">ورود</a></div>
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
