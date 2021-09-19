<div class="container-fluid sticky-top" id="topNav">
    <div class="row p-2">
        <div class="col-6 d-flex align-items-center">
            <div class="logo">
                <a href="{{ route('index') }}">
                    <img src="{{ URL::asset('front/img/Logo.png')}}" class="img-fluid" alt="">
                </a>
            </div>
            <nav class="menu">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">خانه</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">مقالات</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">تماس باما</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">درباره ما</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-6 d-flex align-items-center justify-content-end">
            @guest
                    <a href="{{ route('login') }}" class="nav-link">ورود | عضویت</a>
            @else
                <a id="navbarDropdown" class="nav-link" href="{{route('panel')}}" role="button" v-pre>
                    سلام {{ Auth::user()->name }}
                </a>
                <span class="nav-link">|</span>
                <a href="{{ route('logout') }}" class="nav-link"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    خروج
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="get" class="d-none">
                    @csrf
                </form>
            @endguest
            {{--<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#myModal">ورود | عضویت</a>--}}
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">ورود / عضویت</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">ایمیل</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">رمز عبور</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                               id="password" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                ورود
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
