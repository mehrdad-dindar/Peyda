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
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 box-margin">
                    <div class="contact-form-area">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <h4 class="card-title">فرم محصول</h4>
                                    <div class="container">

                                        <label for="slug">عنوان</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                               placeholder="عنوان">

                                        <label for="slug">نامک</label>
                                        <input type="text" id="slug" name="slug" class="form-control"
                                               placeholder="نامک">

                                        <label for="country">دسته بندی</label>
                                        <select id="category_id" name="category_id" class="form-control">
                                            <option value="" disabled selected>دسته بندی را انتخاب کنید</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                            @endforeach
                                        </select>

                                        <label for="country">برند</label>
                                        <select id="brand_id" name="brand_id" class="form-control">
                                            <option value="" disabled selected>برند را انتخاب کنید</option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>

                                        <div class="form-group mb-10">

                                            <label for="description">توضیحات</label>
                                            <textarea name="description" id="description"
                                                      class="form-control"></textarea>

                                        </div>

                                        <label for="image">عکس</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        <div class="form-group add-field mt-5">
                                            <label>قیمت و رنگ</label>
                                            <div class="partners">
                                                <div class="partner d-flex align-items-center">
                                                    <div class="d-inline-block mr-2">
                                                        <input type="number" placeholder="قیمت" name="cost[]"
                                                               id="cost" class="form-control"/>
                                                    </div>
                                                    <div class="d-inline-block mr-3">
                                                        <input type="color" placeholder="رنگ" name="color[]"
                                                               id="color"/>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="btn btn-success add-more" style="margin-top: 10px;"><span>+ بیشتر</span>
                                            </div>
                                        </div>

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
    <script>
        $(document).ready(function () {

            var data_fo = $('.partner').html();
            var sd = '<div class="btn btn-danger remove-add-more">حذف</div>';
            var max_fields = 5; //maximum input boxes allowed
            var wrapper = $(".partners"); //Fields wrapper
            var add_button = $(".add-more"); //Add button ID

            var x = 1; //initlal text box count
            $(add_button).click(function (e) { //on add input button click
                e.preventDefault();
                if (x < max_fields) { //max input box allowed
                    x++; //text box increment
                    var partnerClone = $('.partner').first().clone();
                    $(sd).appendTo(partnerClone);
                    $(wrapper).append(partnerClone);
                }
            });

            $(wrapper).on("click", ".remove-add-more", function (e) { //user click on remove text
                e.preventDefault();
                $(this).parent('.partner').remove();
                $(this).remove();
                x--;
            });
        });
    </script>
@endsection
