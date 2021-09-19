@extends('dashboard.layouts.master')
@section('title','ویژگی های محصول')
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
                                <h4 class="card-title">ویژگی های محصول</h4>
                                <a class="btn btn-success btn-sm" href="{{route('products.properties.create',$product)}}">تغییر مقادیر ویژگی ها</a>
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جستجو ...">
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    @csrf
                                    <table class="table" id="myTable">
                                        <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>نام</th>
                                            <th>مقدار</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($product->properties as $key=>$property)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{ $property->title }}</td>
                                                <td>{{ $property->pivot->value }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                        <tfoot>

                                        </tfoot>
                                    </table>
                                </div>
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