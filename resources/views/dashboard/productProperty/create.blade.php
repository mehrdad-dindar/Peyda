@extends('dashboard.layouts.master')
@section('title','ایجاد ویژگی های محصولات')
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

                            @php

                                $propertyGroups=$product->category->propertyGroups

                            @endphp

                            <div class="card-body">
                                <form method="post" action="{{route('products.properties.store',$product)}}" enctype="multipart/form-data">
                                    @csrf
                                    <h1 class="card-title fs-1">فرم ویژگی های محصول</h1>
                                    <div class="container">

                                        @foreach($propertyGroups as $group)

                                            <h5>{{$group->title}}</h5>
                                            <div class="row">

                                                @foreach($group->properties as $property)

                                                    <div class="form-group col-sm-6">
                                                        <div class="row">
                                                            <div class="col-sm-2 d-flex align-items-center">
                                                                <label for="name">{{$property->title}}</label>
                                                            </div>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="properties[{{$property->id}}][value]" value="{{$property->getValueForProduct($product)}}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
                                            </div>
                                        @endforeach

                                        <input class="btn btn-success btn-block mt-15" type="submit" value="ثبت">

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