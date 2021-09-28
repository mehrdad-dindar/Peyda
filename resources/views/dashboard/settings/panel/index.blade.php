@extends('dashboard.layouts.master')
@section('title','اسلایدر پنل')
@section('content')
    <div class="main-content">
        <!-- Table area Start -->
        <div class="container-fluid">
            <div class="row" id="basic-table">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">اسلایدر پنل پیدا سرویس ماندگار</h4>
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <form method="post" enctype="multipart/form-data" action="{{route('addPanelSlider')}}">
                                        @csrf
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ردیف</th>
                                                <th>عکس اسلایدر</th>
                                                <th>لینک ارجاع</th>
                                                <th>غیر فعال</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($panelSlider as $key=>$slider)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td><img width="70px"
                                                             src="{{URL::asset('uploads/panel/sliders').'/'.$slider->img_url}}"
                                                             alt="{{$slider->img_url}}" title="{{$slider->img_url}}"></td>
                                                    <td>{{ $slider->link }}</td>
                                                    <td><a onclick="javascript: return confirm('آیا اطمینان به حذف دارید؟');" href="{{route('deletePanelSlider',$slider)}}" class="btn btn-outline-danger btn-sm">حذف</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>

                                            <tfoot>

                                            <tr>

                                                <td>{{sizeof($panelSlider)+1}}</td>
                                                <td><input type="file" id="slider_img_url" name="slider_img_url" class="form-control" placeholder=""></td>

                                                <td><input type="text" id="slider_link" name="slider_link" class="form-control" placeholder="لینک"></td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary form-control btn-sm" style="background-color: green; border-color: greenyellow;">ثبت</button>
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
@section('custom_js')
@endsection
