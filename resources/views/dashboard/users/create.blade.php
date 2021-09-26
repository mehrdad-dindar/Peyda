@extends('dashboard.layouts.master')
@section('custom_head')
    <link rel="stylesheet" href="{{URL::asset('admin/css/default-assets/light-gallery.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/css/default-assets/notification.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/css/default-assets/simplemde.min.css')}}">
@endsection
@section('title','کاربران')
@section('content')
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->

            <style>
                #hidden_div {
                    display: none;
                }
            </style>
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-6">اطلاعات کاربر
                                <button type="button" class="btn" aria-expanded="false"><img
                                        src="@if($user->avatar){{URL::asset('uploads/avatars').'/'.$user->avatar}} @else{{ URL::asset('profile/media/avatars/user.jpg') }}@endif"
                                        alt=""></button>
                            </h5>
                            <span class="d-block mb-20"> </span>
                            <div class="row">
                                <div class="col-xl-4 col-md-6 ">
                                    <h5 class="card-title">پایه</h5>
                                    <hr>
                                    <div class="form-group">
                                        <div class="checkbox d-inline">
                                            <h3 name="h3_user_name" class="card-title">نام</h3>
                                            <label for="h3_user_name">{{$user->f_name}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox d-inline">
                                            <h3 name="h3_user_name" class="card-title">نام خانوادگی</h3>
                                            <label for="h3_user_name">{{$user->l_name}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox d-inline">
                                            <h3 name="h3_user_name" class="card-title">کد ملی</h3>
                                            <label for="h3_user_name">{{$user->melli_code}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox d-inline">
                                            <h3 name="h3_user_name" class="card-title">تاریخ تولد</h3>
                                            <label for="h3_user_name">{{$user->birthday}}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <h5 class="card-title">ارتباطی</h5>
                                    <hr>

                                    <div class="form-group">
                                        <div class="checkbox d-inline">
                                            <h3 name="h3_user_name" class="card-title">شهر</h3>
                                            <label for="h3_user_name">{{optional($user->city)->name}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox d-inline">
                                            <h3 name="h3_user_name" class="card-title">آدرس</h3>
                                            <label for="h3_user_name">{{$user->address}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox d-inline">
                                            <h3 name="h3_user_name" class="card-title">کد پستی</h3>
                                            <label for="h3_user_name">{{$user->postal_code}}</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox d-inline">
                                            <h3 name="h3_user_name" class="card-title">ایمیل</h3>
                                            <label for="h3_user_name">{{$user->email}}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <h5 class="card-title">اطلاعات دیگر</h5>
                                    <hr>

                                    <div class="form-group">
                                        <div class="checkbox d-inline">
                                            <h3 name="h3_user_name" class="card-title">مدل گوشی</h3>
                                            <label for="h3_user_name">{{$user->phoneName}}</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="card">
                                            <div class="card-body pb-0">
                                                <h4 class="card-title mb-1">کارت ملی </h4>
                                                <div class="row lightgallery">
                                                    <!-- Single Gallery Area -->
                                                    {{--                                                    @foreach($user->)--}}
                                                    <a class="single_gallery_item col-sm-6 col-xl-3 mb-30"
                                                       @if($user->melli_card!=null) href="{{URL::asset('uploads/melli_cards').'/'.$user->melli_card}}" @endif><img
                                                            @if($user->melli_card!=null) src="{{URL::asset('uploads/melli_cards').'/'.$user->melli_card}}"
                                                            @endif alt=""></a>
                                                    <a class="single_gallery_item col-sm-6 col-xl-3 mb-30"
                                                       @if($user->melli_card_back!=null) href="{{URL::asset('uploads/melli_cards').'/'.$user->melli_card}}" @endif><img
                                                            @if($user->melli_card_back!=null) src="{{URL::asset('uploads/melli_cards').'/'.$user->melli_card_back}}"
                                                            @endif alt=""></a>
                                                    <!-- Single Gallery Area -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            @if($auth!='')
                <form action="{{ route('dashboard') }}/users/auth" method="post" class="row">
                    @csrf

                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    <input type="hidden" name="admin_id" value="{{auth()->user()->id}}">

                    <div class="col-12 box-margin">
                        <div class="contact-form-area">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="hidden_div" class="col-12 mb-30">
                                                <h4 class="card-title mb-2">توضیحات</h4>
                                                <textarea class="form-control"
                                                          name="descriptions" id="simpleMdeExample" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-4 d-flex justify-content-center flex-column">
                                            <div class="stacked-form-area">

                                                <label for="status">وضعیت</label>
                                                <select name="status" onchange="showDiv(this)">
                                                    <option value="1" selected>تایید</option>
                                                    <option value="0">نقص مدارک</option>
                                                </select>
                                            </div>
                                            <input class="btn btn-primary mt-15 mb-20" type="submit" value="تایید">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            @endif
        </div>
    </div>

    </div>
    </div>
    </div>
@endsection
@section('custom_js')
    <script src="{{URL::asset('admin/js/default-assets/light-gallery-all.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/light-gallery.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/bootstrap-growl.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/notification-active.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/simplemde.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/tinymce.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/tinymce-active.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/simplemde-active.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/basic-form.js')}}"></script>
    <script>
        function showDiv(select) {
            if (select.value == 0) {
                document.getElementById('hidden_div').style.display = "block";
            } else {
                document.getElementById('hidden_div').style.display = "none";
            }
        }
    </script>
@endsection
