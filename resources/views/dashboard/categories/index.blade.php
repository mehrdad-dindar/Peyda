@extends('dashboard.layouts.master')
@section('title','دسته بندیها')
@section('content')
    <div class="main-content">
        <!-- Table area Start -->
        <div class="container-fluid">
            <div class="row" id="basic-table">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-content bg-white">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title">دسته بندی محصولات</h4>
                                <a href="{{route('categories.create')}}" role="button" class="btn btn-primary d-flex align-items-center"><i class="zmdi zmdi-hc-2x zmdi-plus"></i></a>
                            </div>
                            <div class="card-body">
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <form action="{{route('categories.store')}}" method="post" >
                                        @csrf
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ردیف</th>
                                                <th>عنوان</th>
                                                <th>دسته والد</th>
                                                <th>عملیات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $key=>$row)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{ $row->title }}</td>
                                                    <td>{{optional($row->parent)->title}}</td>
                                                    <td>
                                                        <a href="{{ route('categories.edit',$row->id) }}" class="btn btn-warning mb-2 mr-2">ویرایش</a>
                                                        <a onclick="javascript: return confirm('آیا اطمینان به حذف دارید؟');" href="{{route('category-delete',[$row->id])}}" class="btn btn-outline-danger  mb-2 mr-2">حذف</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </form>
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
@endsection
