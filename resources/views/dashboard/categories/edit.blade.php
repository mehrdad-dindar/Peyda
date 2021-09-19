@extends('dashboard.layouts.master')
@section('title','دسته بندیها')
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
                                <h4 class="card-title mb-20">ویرایش دسته بندی</h4>

                                <form action="{{route('categories.update', $category)}}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <label>عنوان</label>
                                        <input type="text" placeholder="عنوان" name="title" required="" value="{{$category->title}}">

                                    <label for="country">دسته والد</label>
                                    <select id="parent" name="parent" class="mb-10">
                                        <option value="" @if($category->category_id==null) selected @endif>دسته والد را انتخاب کنید</option>
                                        @foreach($categories as $row)
                                            <option value="{{$row->id}}" @if($category->category_id==$row->id) selected @endif >{{$row->title}}</option>
                                        @endforeach
                                    </select>

                                    <h5 class="fs-2 mb-10">انتخاب گروه مشخصات</h5>
                                    <div class="form-group row new-checkbox">
                                    @foreach($properties as $row)
                                        <!-- Rounded switch -->
                                            <div class="col-md-6">
                                                <label class="switch">
                                                    <input type="checkbox"
                                                           @if($category->hasPropertyGroup($row))
                                                               checked
                                                           @endif
                                                           name="properties[]" value="{{$row->id}}">
                                                    <span class="slider round"></span>
                                                </label>
                                                {{$row->title}}
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="container">
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
@endsection

