@extends('dashboard.layouts.master')
@section('title','محصولات')
@section('custom_head')
    <link rel="stylesheet" href="{{URL::asset('admin/css/default-assets/notification.css')}}">
@endsection
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
                    <div class="filter-table">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">محصولات</h4>
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="جستجو ...">
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    @csrf
                                    <table class="table" id="myTable">
                                        <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>نام</th>
                                            <th>قیمت</th>
                                            <th>دسته بندی</th>
                                            <th>تصویر</th>
                                            <th>تخفیف</th>
                                            <th>ویژگی ها</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $key=>$row)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{--{{ number_format($row->cost) }}--}}</td>
                                                <td>{{ $row->category->title }}</td>
                                                <td><img width="70px" src="{{URL::asset('uploads/products').'/'.$row->image}}" alt="{{$row->name}}" title="{{$row->name}}"></td>
                                                <td>
                                                    @if(!$row->discount()->exists())

                                                        <a href="{{route('products.discounts.create',$row)}}"
                                                           class="btn btn-success">ایجاد تخفیف</a>

                                                    @else

                                                        <p>{{$row->discount->value}}</p>

                                                        <form action="{{route('products.discounts.destroy',['product'=>$row, 'discount'=>$row->discount])}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="submit" class="btn btn-sm btn-danger" value="حذف">
                                                        </form>
                                                    @endif

                                                </td>
                                                <td>
                                                    <a href="{{route('products.properties.index',$row)}}"
                                                       class="btn btn-dark">ویژگی ها</a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('products.edit',[$row->id]) }}" class="btn btn-outline-info mb-2 mr-2">ویرایش</a>
                                                    <a onclick="javascript: return confirm('آیا اطمینان به حذف دارید؟');" href="{{route('product-delete',[$row])}}" class="btn btn-outline-danger  mb-2 mr-2">حذف</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                        <tfoot>

                                        </tfoot>
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
@section('custom_js')

    <script src="{{URL::asset('admin/js/default-assets/bootstrap-growl.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/notification-active.js')}}"></script>
    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@endsection
