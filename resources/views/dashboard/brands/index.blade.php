@extends('dashboard.layouts.master')
@section('title','برندها')
@section('content')

    @if(count($errors->all())>0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <i class="dripicons-wrong mr-2"></i>{{$error}}
            </div>
        @endforeach
    @endif
    <div class="main-content">
        <!-- Table area Start -->
        <div class="container-fluid">
            <div class="row" id="basic-table">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">برندها</h4>
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <form action="{{route('brands.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ردیف</th>
                                                <th>نام</th>
                                                <th>تصویر</th>
                                                <th>عملیات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($brands as $key=>$row)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{ $row->name }}</td>
                                                    <td><img width="70px" src="{{URL::asset('uploads/brands').'/'.$row->image}}" alt="{{$row->name}}" title="{{$row->name}}"></td>
                                                    <td>
                                                        <a href="{{ route('brands.edit',$row->id) }}" class="btn btn-warning mb-2 mr-2">ویرایش</a>
                                                        <a onclick="javascript: return confirm('آیا اطمینان به حذف دارید؟');" href="{{route('brand-delete',$row->id)}}" class="btn btn-outline-danger  mb-2 mr-2">حذف</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>

                                            <tfoot>

                                            <tr>

                                                <td>{{sizeof($brands)+1}}</td>
                                                <td><input type="text" id="name" name="name" placeholder="نام" class="form-control"></td>
                                                <td>
                                                    <input type="file" name="image" id="image" class="form-control">
                                                    </td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary btn-sm form-control" style="background-color: green; border-color: greenyellow;">ثبت</button>
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
