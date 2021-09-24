@extends('dashboard.layouts.master')
@section('custom_head')
    <link rel="stylesheet" href="{{URL::asset('admin/css/default-assets/light-gallery.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/css/default-assets/notification.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/css/default-assets/simplemde.min.css')}}">
@endsection
@section('title','فراگارانتی')
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
            <form action="{{ route('dashboard') }}/warranties/admit" method="post">
                @csrf

                <input type="hidden" name="warranty_id" value="{{$warranty->id}}">
                <input type="hidden" name="user_id" value="{{$warranty->User->id}}">

                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-6">اطلاعات فراگارانتی</h5>
                                <span class="d-block mb-20"> </span>
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 ">
                                        <h5 class="card-title">اطلاعات کاربر</h5>
                                        <hr>
                                        <div class="form-group">
                                            <div class="checkbox d-inline">
                                                <h3 name="h3_user_name" class="card-title">نام</h3>
                                                <label for="h3_user_name" >{{$warranty->User->f_name}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox d-inline">
                                                <h3 name="h3_user_name" class="card-title">نام خانوادگی</h3>
                                                <label for="h3_user_name" >{{$warranty->User->l_name}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox d-inline">
                                                <h3 name="h3_user_name" class="card-title">کد ملی</h3>
                                                <label for="h3_user_name" >{{$warranty->User->melli_code}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <h5 class="card-title">نوع گوشی و بازه قیمت</h5>
                                        <hr>

                                        <div class="form-group">
                                            <div class="checkbox d-inline">
                                                <h3 name="h3_user_name" class="card-title">برند</h3>
                                                <label for="h3_user_name" >{{$warranty->phone_model->phone_brand->name}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox d-inline">
                                                <h3 name="h3_user_name" class="card-title">مدل</h3>
                                                <label for="h3_user_name" >{{$warranty->phone_model->name}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox d-inline">
                                                <h3 name="h3_user_name" class="card-title">بازه قیمت</h3>
                                                <label for="h3_user_name" >{{$warranty->Commitment_ceiling-> price_range}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <h5 class="card-title">بیمه و عکس ها</h5>
                                        <hr>

                                        <div class="form-group">
                                            <div class="checkbox d-inline">
                                                <h3 name="h3_user_name" class="card-title">هزینه بیمه آتش سوزی</h3>
                                                <label for="h3_user_name" >{{optional($warranty->Fire_commitment_ceiling)->price ? optional($warranty->Fire_commitment_ceiling)->addition_price.' + ۵۰ میلیون هدیه':'۵۰ میلیون هدیه'}}</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="card">
                                                <div class="card-body pb-0">
                                                    <h4 class="card-title mb-1">عکس ها </h4>
                                                    <div class="row lightgallery">
                                                        <!-- Single Gallery Area -->
                                                        @if(sizeof($images)>0)
                                                            @foreach($images as $image)
                                                                <a class="single_gallery_item col-sm-6 col-xl-3 mb-30"
                                                               href="{{URL::asset('uploads/warranty_images').'/'.$image->URL}}">
                                                                <img src="{{URL::asset('uploads/warranty_images').'/'.$image->URL}}" alt=""></a>
                                                        @endforeach
                                                    @endif
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

                    <input type="hidden" name="user_id" value="{{$warranty->owner_id}}">
                    <input type="hidden" name="admin_id" value="{{auth()->user()->id}}">

                    <div class="col-12 box-margin">
                        <div class="contact-form-area">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stacked-form-area">

                                        <label for="status">وضعیت</label>
                                        <select name="status" onchange="showDiv(this)">
                                            <option value="1" selected>تایید</option>
                                            <option value="0">دارای نقص</option>
                                        </select>
                                    </div>
                                    <div id="hidden_div" class="col-12 mb-30">
                                        <h4 class="card-title mb-2">توضیحات</h4>
                                        <textarea class="form-control"
                                                  name="descriptions" id="simpleMdeExample" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class="btn btn-primary btn-block mt-15 mb-20" type="submit" value="تایید">

                </div>
            </form>
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
        function showDiv(select){
            if(select.value==0){
                document.getElementById('hidden_div').style.display = "block";
            } else{
                document.getElementById('hidden_div').style.display = "none";
            }
        }
    </script>
@endsection
