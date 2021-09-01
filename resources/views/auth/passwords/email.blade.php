@extends('layouts.app')
@section('title' , 'فراموشی رمز عبور')
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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 class="font-18 mb-30">رمز عبور خود را فراموش کردید؟</h4>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <label class="lock-text text-dark" for="email">ایمیل</label>
                            <input type="email" class="form-control height-50  @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group mb-0">
                            <button class="btn btn-primary btn-block" type="submit">ارسال رمز عبور</button>
                        </div>
                        <div class="row mt-15 justify-content-center">
                            <div class="col-12">
                                <p class="text-center text-dark font-weight-bold">یا</p>
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn btn-googleplus waves-effect waves-light mb-2 btn-block"><i class="fa fa-google mr-2"></i><span class="text-center">ورود با گوگل</span></a>
                            </div>
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
