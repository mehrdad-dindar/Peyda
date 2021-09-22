@extends('dashboard.layouts.master')
@section('title','استفاده از بیمه نامه ها')
@section('content')
    <div class="main-content">
        <!-- Table area Start -->
        <div class="container-fluid">
            <div class="row" id="basic-table">
                <div class="col-12 box-margin">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">درخواست های استفاده</h4>
                                <!-- Table with outer spacing -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>موضوع</th>
                                            <th>بازه قیمت</th>
                                            <th>مدل گوشی</th>
                                            <th>کد فعالسازی</th>
                                            <th>عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($uses as $use)
                                            @if($use->userrequests()->exists())
                                                @if($use->userrequests->toArray()[0]['done']==0)
                                                    <tr>
                                                        <td>{{ $use-> title}}</td>

                                                        <td>{{$use->Mobile_warranty->Commitment_ceiling-> price_range}}</td>

                                                        <td>{{$use -> Mobile_warranty->phone_model->name}}</td>

                                                        <td>{{$use -> Mobile_warranty->activation_code}}</td>

                                                        <td><a href="#" class="btn btn-outline-danger btn-sm">حذف</a>
                                                            <a href="{{ route('dashboard') }}/warranties/show/admit/{{$use->id}}"
                                                               class="btn btn-primary btn-sm">نمایش</a>
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

@section('custom_js')
    @if (isset($success))
        <script>
            toastr.success("پیام", 'درخواست شما با موفقیت ثبت شد!');
        </script>
    @elseif(isset($error))
        <script>
            toastr.error("خطا!", 'متاسفانه درخواست شما ثبت نشد!');
        </script>
    @endif

@endsection
