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
                                <h4 class="card-title mb-1">ویرایش دسته بندی</h4>

                                <form action="{{route('category-update', $category)}}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <div class="container" style="background-color:white">
                                        <input type="text" placeholder="عنوان" name="title" required="" value="{{$category->title}}">
                                    </div>

                                    <label for="country">دسته والد</label>
                                    <select id="parent" name="parent">
                                        <option value="" @if($category->category_id==null) selected @endif>دسته والد را انتخاب کنید</option>
                                        @foreach($categories as $row)
                                                <option value="{{$row->id}}" @if($category->category_id==$row->id) selected @endif >{{$row->title}}</option>
                                        @endforeach
                                    </select>
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

