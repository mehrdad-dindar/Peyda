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

                            <div class="card-body chat-application">
                                <h4 class="card-title">تیکت</h4>
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;"><div class="chats" id="chatBox" style="overflow: hidden; width: auto; height: 300px;">
                                        <div class="chats">
                                            @foreach($ticketDetails as $key=>$row)
                                                <div class="chat">
                                                    <div class="chat-avatar">
                                                        <a class="avatar" data-toggle="tooltip" href="{{ route('dashboard') }}/users/edit/{{$ticket->user->id}}" data-placement="right" title="" data-original-title="">
                                                            <img  src="@if($ticket->user->avatar!=null){{URL::asset('uploads/avatars/'.$ticket->user->avatar)}}@endif"  alt="کاربر">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-content">
                                                            <p class="text-white">{{$row->request}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat chat-left">
                                                    <div class="chat-avatar">
                                                        <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                                                            <img src="@if(auth()->user()->avatar!=null){{URL::asset('uploads/avatars/'.auth()->user()->avatar)}}@endif"  alt="ادمین">
                                                        </a>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-content">
                                                            <p>{{$row->response}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div><div class="slimScrollBar" style="background: rgb(140, 140, 140); width: 2px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 0px; height: 184.805px;"></div><div class="slimScrollRail" style="width: 2px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 0px;"></div></div>

                                <form action="{{route('addResponse',[$id])}}" method="post" class="chat-app-input mt-1 row">
                                    @csrf
                                    <div class="col-12">
                                        <fieldset>
                                            <div class="input-group position-relative has-icon-left">
                                                <input type="text" name="response" class="form-control" placeholder="پیام" aria-describedby="button-addon3">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit">ارسال</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </form>
                            </div>

                            {{--<div class="card-body">
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
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
@endsection
