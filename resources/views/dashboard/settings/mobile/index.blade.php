@extends('dashboard.layouts.master')
@section('title','گوشی')
@section('content')
    <div class="main-content">
        <!-- Table area Start -->
        <div class="container-fluid">
            <div class="row" id="basic-table">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">موبایل های پیدا سرویس</h4>
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <form method="post" action="{{route('dashboard')}}/settings/brand/store">
                                        @csrf
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ردیف</th>
                                                <th>نام برند</th>
                                                <th>عملیات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($brands as $key=>$row)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{ $row->name }}</td>
                                                    <td><a href="" class="btn btn-outline-danger btn-sm">حذف</a>
                                                        <a href="{{route('dashboard')}}/settings/model" class="btn btn-primary btn-sm">اضافه کردن مدل</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>

                                            <tfoot>

                                                    <tr>

                                                        <td>{{sizeof($brands)+1}}</td>
                                                        <td><input type="text" id="model_name" name="model_name" placeholder="نام"></td>
                                                        <td>
                                                            <button type="submit" class="btn btn-primary btn-sm" style="background-color: green; border-color: greenyellow;">ثبت</button>
                                                        </td>
                                                    </tr>
                                            </tfoot>
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
