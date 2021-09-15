@extends('dashboard.layouts.master')
@section('title','ویرایش برند')
@section('custom_head')
    <link rel="stylesheet" href="{{URL::asset('admin/css/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/css/default-assets/dropify.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/css/default-assets/fileupload.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/css/default-assets/notification.css')}}">

@endsection
@section('content')
    <div class="main-content">
        <!-- File upload area Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-body">
                            <form action="#" class="dropzone dz-clickable">
                                <label for="name">نام برند</label>
                                <input type="text" name="name" value="" placeholder="نام برند" class="form-control">

                                <div class="dz-preview dz-processing dz-image-preview dz-error dz-complete"><div class="dz-image"><img data-dz-thumbnail="" alt="{{$brand->name}}" src="{{URL::asset('uploads/brands').'/'.$brand->image}}"></div></div>


                                <div class="dz-default dz-message"><span>فایل را اینجا رها کنید تا آپلود شود</span></div>

                                <input type="submit" class="form-control btn btn-primary" value="ثبت">

                            </form>

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div><!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>

@endsection
@section('custom_js')
    <script src="{{URL::asset('admin/js/dropzone.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/dropzone-custom.js')}}"></script>
    {{--<script src="{{URL::asset('admin/js/default-assets/dropzone-and-module.min.js')}}"></script>
--}}
    <script>
        $(".dropzone.dz-clickable").dropzone({
            url: '/cart?upload-engraving=true',
            maxFiles: 1,
            maxfilesexceeded: function(file) {
                this.removeAllFiles();
                this.addFile(file);
            }
        })
    </script>
@endsection
