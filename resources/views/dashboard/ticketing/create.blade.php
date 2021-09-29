@extends('dashboard.layouts.master')
@section('title','پاسخ تیکت')
@section('content')
    <div class="main-content">
        <!-- Table area Start -->
        <div class="container-fluid">
            <div class="row" id="basic-table">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-content bg-white">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title">پاسخ تیکت</h4>
                            </div>
                            <div class="card-body">
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <form action="{{route('addResponse',[$id])}}" method="post" >
                                        @csrf
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ردیف</th>
                                                <th>سوال</th>
                                                <th>پاسخ</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($ticketDetails as $key=>$row)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$row->request}}</td>
                                                    <td>{{$row->response}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <hr>
                                        <div class="container">
                                            <div class="row d-flex align-items-center">
                                                <div class="col-md-2">{{sizeof($ticketDetails)}}</div>
                                                <div class="col-md-8">
                                                    <label for="response">پاسخ</label>
                                                    <textarea name="response" id="response" class="form-control" rows="20"></textarea>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="submit" class="btn btn-primary btn-sm form-control" style="background-color: green; border-color: greenyellow;">ثبت</button>
                                                </div>
                                            </div>
                                        </div>
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
