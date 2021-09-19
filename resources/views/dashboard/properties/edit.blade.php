@extends('dashboard.layouts.master')
@section('title','ویرایش مشخصات')
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
                                <h4 class="card-title mb-20">ویرایش ویژگی</h4>

                                <form action="{{route('properties.update', $property)}}" method="post">
                                    @csrf
                                    @method('PATCH')

                                    <div class="form-group">
                                        <label>عنوان</label>
                                        <input type="text" placeholder="عنوان" name="title" required="" value="{{$property->title}}">
                                    </div>

                                    <label for="country">گروه</label>
                                    <select id="group" name="group">
                                        @foreach($groups as $row)
                                            <option value="{{$row->id}}" @if($property->property_group_id==$row->id) selected @endif >{{$row->title}}</option>
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

