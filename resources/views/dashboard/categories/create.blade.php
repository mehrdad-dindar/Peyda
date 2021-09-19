@extends('dashboard.layouts.master')
@section('title','ایجاد دسته بندی')
@section('custom_head')
    <link rel="stylesheet" href="{{URL::asset('admin/css/default-assets/notification.css')}}">
@endsection
@section('content')

    @if(count($errors->all())>0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <i class="dripicons-wrong mr-2"></i>{{$error}}
            </div>
        @endforeach
    @endif
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="contact-form-area">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <h1 class="card-title fs-1">فرم ایجاد دسته بندی</h1>
                                    <div class="container">

                                        <h5>عنوان</h5>
                                        <input type="text" id="title" name="title"  class="form-control" placeholder="عنوان">

                                        <h5 class="fs-2">دسته والد</h5>
                                        <div class="form-group">
                                            <select id="parent" class="form-control" name="parent">
                                                <option value="" selected>دسته والد را انتخاب کنید</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <h5 class="fs-2">انتخاب گروه مشخصات</h5>
                                        <div class="form-group row new-checkbox">
                                        @foreach($properties as $row)
                                            <!-- Rounded switch -->
                                                <div class="col-md-6">
                                                    <label class="switch">
                                                        <input type="checkbox" name="properties[]" value="{{$row->id}}">
                                                        <span class="slider round"></span>
                                                    </label>
                                                    {{$row->title}}
                                                </div>
                                            @endforeach
                                        </div>

                                        <input class="btn btn-success btn-block mt-15" type="submit" value="ارسال">

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
@section('custom_js')
    <script src="{{URL::asset('admin/js/default-assets/file-upload.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/basic-form.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/bootstrap-growl.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/notification-active.js')}}"></script>
@endsection