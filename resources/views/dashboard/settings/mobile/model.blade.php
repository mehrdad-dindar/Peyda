@extends('dashboard.layouts.master')
@section('title','مدل گوشی')
@section('content')
    <div class="main-content">
        <!-- Table area Start -->
        <div class="container-fluid">
            <div class="row" id="basic-table">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">مدل های برند {{$brand->name}}</h4>
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <form method="post" action="{{route('dashboard')}}/settings/model/store/{{$brand->id}}">
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
                                            @foreach($models as $key=>$row)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{ $row->name }}</td>
                                                    <td><a onclick="javascript: return confirm('آیا اطمینان به حذف دارید؟');" href="{{route('dashboard')}}/settings/model/delete/{{$row->id}}/{{$brand->id}}" class="btn btn-outline-danger btn-sm">حذف</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>

                                            <tfoot>

                                            <tr>

                                                <td>@if(sizeof($models)==null || empty($models)) 1 @else {{sizeof($models)+1}} @endif</td>
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
