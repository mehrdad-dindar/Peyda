@extends('layouts.app')
@section('title' , 'ورود به سیستم')
@section('content')
    <div class="card">
        <div class="card-body p-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="xs-d-none mb-50-xs break-320-576-none">
                        <img src="{{ URL::asset('front/img/login.png') }}" alt="">
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Logo -->
                    <h4 class="font-18 mb-30">ورود به پنل کاربری</h4>

                    <form method="POST" action="{{ route('doVerify') }}">
                        @csrf
                        @if($errors->any())
                            <div class="col-md12">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="float-left" for="code">کد تأیید</label>
                            <input class="form-control  @error('code') is-invalid @enderror" type="text" id="code"  name="code" required autocomplete="code" autofocus>
                            @error('code')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <a type="button" class="btn btn-light btn-block fadeIn resend-code disabled" href="{{ route('login') }}"><span class="c" id="60"></span></a>
                        </div>

                        <div class="verify-code form-group mb-0">
                            <button class="btn btn-primary fadeOut btn-block" type="submit">بررسی و ادامه</button>
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
@section('custom_js')
    <script>
        function startdeadlinefunc() {
            const n = $('.c').attr('id');
            let c = n;
            $('.c').text(c);
            var myVar = setInterval(function () {
                c--;
                if (c >= 0) {
                    $('.c').html("ارسال مجدد کد "+c + " ثانیه ");
                }
                if (c === 0) {
                    $('.resend-code').removeClass('disabled');
                    $('.resend-code').removeClass(`btn-light`);
                    $('.resend-code').addClass('btn-outline-success');
                    $('.verify-code').addClass('d-none');
                    $('.c').text("ارسال مجدد کد تأیید");
                }
            }, 1000);
        }
        $(document).ready(function () {
            startdeadlinefunc();
        });
    </script>
@endsection
