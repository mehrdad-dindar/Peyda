@extends('dashboard.layouts.master')
@section('title','ویرایش برند')
@section('content')
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->
            <div class="row">
                <div class="col-xl-12 box-margin height-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="stacked-form-area">
                                <h4 class="card-title mb-1">ویرایش برند</h4>

                                <form action="{{route('brands.update', $brand)}}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <div class="container" style="background-color:white">
                                        <input type="text" placeholder="عنوان" name="title" required="" value="{{$brand->name}}">
                                    </div>

                                    <label for="country">عکس برند</label>

                                    <div class="dropzone dz-clickable dz-default dz-message"><span>فایل را اینجا رها کنید تا آپلود شود</span></div>


                                    <div class="text-center mt-20">
                                        <button class="btn btn-primary">اکنون بارگذاری شود</button>
                                        <div class="container">
                                            <input class="btn btn-primary btn-block mt-15" type="submit" value="ارسال">
                                    </div>
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
    <script src="{{URL::asset('admin/js/dropzone.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/dropzone-custom.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/dropzone-and-module.min.js')}}"></script>
@endsection
