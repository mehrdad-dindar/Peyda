@extends('dashboard.layouts.master')
@section('title','تخفیفات')
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
                                <form method="post" action="{{route('products.discounts.store',$product)}}">
                                    @csrf
                                    <h4 class="card-title">ایجاد تخفیف</h4>
                                    <div class="container">

                                        <label for="value">مقدار</label>
                                        <input type="number" max="100" min="1" id="value" name="value"  class="form-control" placeholder="مقدار">

                                        <input class="btn btn-primary btn-block mt-15" type="submit" value="ارسال">

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