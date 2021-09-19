@extends('dashboard.layouts.master')
@section('title','محصولات')
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
                                <form method="post" action="{{route('products.update', $product)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <h4 class="card-title">فرم محصول</h4>
                                    <div class="container">

                                        <label for="slug">عنوان</label>
                                        <input type="text" id="name" name="name"  class="form-control" placeholder="عنوان" value="{{$product->name}}">

                                        <label for="slug">نامک</label>
                                        <input type="text" id="slug" name="slug"  class="form-control" placeholder="نامک" value="{{$product->slug}}">

                                        <label for="cost">قیمت</label>
                                        <input type="number" id="cost" name="cost"  class="form-control mb-20" placeholder="قیمت" value="{{$product->cost}}">

                                        <label for="country">دسته بندی</label>
                                        <select id="category_id" name="category_id" class="form-control">
                                            <option value="" disabled selected>دسته بندی را انتخاب کنید</option>
                                            @foreach($categories as $category)
                                                <option @if($product->category_id==$category->id) selected @endif value="{{$category->id}}">{{$category->title}}</option>
                                            @endforeach
                                        </select>

                                        <label for="country">برند</label>
                                        <select id="brand_id" name="brand_id" class="form-control">
                                            <option value="" disabled selected>برند را انتخاب کنید</option>
                                            @foreach($brands as $brand)
                                                <option @if($product->brand_id==$brand->id) selected @endif value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>

                                        <div class="form-group mb-10">

                                            <label for="description">توضیحات</label>
                                            <textarea name="description" id="description" class="form-control">{{$product->description}}</textarea>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="image">عکس</label>
                                                <input type="file" name="image" id="image" class="form-control">
                                            </div>
                                            <div class="col-sm-6">
                                                <img width="500px" src="{{URL::asset('uploads/products').'/'.$product->image}}" alt="{{$product->name}}">
                                            </div>
                                        </div>
                                        {{--<label for="image">عکس</label>
                                        <input type="file" name="image" id="image" class="form-control">--}}

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