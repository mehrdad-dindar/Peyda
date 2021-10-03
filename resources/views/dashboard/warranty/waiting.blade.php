@extends('dashboard.layouts.master')
@section('title','فراگارانتی های در انتظار تایید')
@section('content')
    <div class="main-content">
        <!-- Table area Start -->
        <div class="container-fluid">
            <div class="row" id="basic-table">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">فراگارانتی های پیدا سرویس</h4>
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>کاربر</th>
                                            <th>بازه قیمت</th>
                                            <th>مدل گوشی</th>
                                            <th>کد فعالسازی</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($waitings as $key=>$waiting)
                                            @if($waiting->userrequests()->exists())
                                                @if($waiting->userrequests->toArray()[0]['done']==0)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td><a href="{{route('userCreate',['id'=>$waiting->user->id])}}">{{ $waiting-> user->getFullName()}}</a></td>

                                                <td>{{$waiting ->Commitment_ceiling-> price_range}}</td>

                                                <td>{{$waiting -> phone_model->phone_brand->name}}</td>

                                                <td>{{$waiting -> activation_code}}</td>

                                                <td><a href="#" class="btn btn-outline-danger btn-sm">حذف</a>
                                                    <a href="{{ route('dashboard') }}/warranties/show/{{$waiting->id}}" class="btn btn-primary btn-sm">نمایش</a>
                                                </td>
                                            </tr>
                                                @endif
                                            @endif
                                        @endforeach
                                        </tbody>
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
