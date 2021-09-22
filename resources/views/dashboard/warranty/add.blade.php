@extends('dashboard.layouts.master')
@section('title','بیمه نامه جدید')
@section('custom_head')
    <link rel="stylesheet" href="{{ URL::asset('admin/css/default-assets/notification.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('admin/js/dropify.min.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <link href="{{URL::asset('admin/assets/plugins/fileuploads/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- App CSS -->
    <link href="{{ URL::asset('admin/assets/css/bootstrap-rtl.min.css')}}" type="text/css" />
@endsection
@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 box-margin height-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="wizard-form-area">
                                <h5 class="card-title">فرم جادویی</h5>

                                <form id="example-form" method="POST" >
                                @csrf

                                    <div>
                                        <h3>کاربری</h3>
                                        <section>
                                            <h3>کاربر</h3>
                                            <div class="form-group">
                                                <label for="exampleSelectGender">نام و کدملی کاربر</label>
                                                <select name="owner_id" class="form-control" id="owner_id">
                                                    @foreach($users as $key=>$row)
                                                        <option @if($key==0) selected @endif value="{{$row->id}}">{{$row->f_name. " ". $row->l_name." - ". $row->melli_code}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <h3>انتخاب تلفن همراه</h3>
                                            <div class="form-group">
                                                <label for="exampleSelectGender">برند گوشی</label>
                                                <select name="phone_brand" class="form-control" id="phone_brand">
                                                    @foreach($phone_brands as $key=>$row)
                                                        <option @if($key==0) selected @endif value="{{$row->id}}">{{$row->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleSelectGender">مدل گوشی</label>
                                                <select name="phone_model" class="form-control" id="phone_model">
                                                    @foreach($phone_models as $key=>$row)
                                                        <option @if($key==0) selected @endif value="{{$row->id}}">{{$row->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </section>
                                        <h3>تعیین بازه قیمت</h3>
                                        <section>
                                            <h3>بازه قیمت دستگاه تلفن همراه</h3>
                                            <div class="form-group">
                                                <label for="exampleSelectGender"></label>
                                                <select name="price_range" class="form-control" id="exampleSelectGender">
                                                    @foreach($commitment_ceilings as $cc)
                                                        <option @if($cc->id==1) selected @endif value="{{$cc->id}}"
                                                                data-price="{{$cc->price}}">{{$cc->price_range}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </section>
                                        <h3>آپلود عکس</h3>
                                        <section>
                                            <h3>عکس ها</h3>

                                            <label>عکس از روی جعبه</label>
                                            <input name="phone_f_photo" id="phone_f_photo"  data-default-file="" value="" type="file" class="dropify" data-max-file-size="1M"  />

                                            <label>عکس از پشت جعبه</label>
                                            <input name="phone_b_photo" id="phone_b_photo"  data-default-file="" value="" type="file" class="dropify" data-max-file-size="1M"  />

                                            <label>عکس از روی صفحه</label>
                                            <input name="phone_screen_photo" id="phone_screen_photo"  data-default-file="" value="" type="file" class="dropify" data-max-file-size="1M"  />

                                            <label>عکس از پشت گوشی</label>
                                            <input name="phone_back_photo" id="phone_back_photo"  data-default-file="" value="" type="file" class="dropify" data-max-file-size="1M"  />

                                            <label>عکس از کناره سمت راست گوشی</label>
                                            <input name="phone_right_photo" id="phone_right_photo"  data-default-file="" value="" type="file" class="dropify" data-max-file-size="1M"  />

                                            <label>عکس از کناره سمت چپ گوشی</label>
                                            <input name="phone_left_photo" id="phone_left_photo"  data-default-file="" value="" type="file" class="dropify" data-max-file-size="1M"  />

                                            <label>عکس از IMEI</label>
                                            <input name="imei_photo" id="imei_photo"  data-default-file="" value="" type="file" class="dropify" data-max-file-size="1M"  />

                                        </section>
                                        <h3>هدیه بیمه آتش سوزی</h3>
                                        <section>
                                            <h3>بیمه</h3>
                                            <div class="form-check">
                                                <div class="form-group">
                                                    <label for="exampleSelectGender"></label>
                                                    <select name="fire_addition_price" class="form-control" id="country2">
                                                        <option></option>
                                                        @foreach($fire_commitment_ceilings as $fcc)
                                                            <option value="{{ $fcc->id }}"
                                                                    data-price="{{$fcc->price}}">{{$fcc->addition_price}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </section>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    <script src="{{ URL::asset('admin/js/jquery.steps.min.js')}}"></script>
    <script src="{{ URL::asset('admin/js/jquery.form-validator.min.js')}}"></script>
    <script src="{{ URL::asset('admin/js/default-assets/wizard-form.js')}}"></script>
    <script src="{{ URL::asset('admin/js/default-assets/bootstrap-growl.js')}}"></script>
    <script src="{{ URL::asset('admin/js/default-assets/notification-active.js')}}"></script>

    <script src="{{URL::asset('public/admin/assets/plugins/fileuploads/js/dropify.min.js')}}"></script>
    <script type="text/javascript">
        $('.dropify').dropify({
            messages: {
                'default': 'فایل را به اینجا بکشید یا کلیک کنید',
                'replace': 'برای جایگزینی فایل را به اینجا بکشید یا کلیک کنید',
                'remove': 'پاک کردن',
                'error': 'با پوزش فراوان، خطایی رخ داده'
            },
            error: {
                'fileSize': 'حجم فایل بیشتر از حد مجاز است (1M).'
            }
        });
    </script>

    <script src="{{URL::asset('admin/js/default-assets/file-upload.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/basic-form.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/bootstrap-growl.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/notification-active.js')}}"></script>

    <script>

        $(document).ready(function(){

            $('#phone_brand').on('change',function(){


                var new_val = $("#phone_brand option:selected").val();

                var getUrl = window.location;

                //alert(new_val);
                $.ajax({
                    type: "POST",
                    url: getUrl .protocol + "//" + getUrl.host+'/panel/mobile_change',
                    cache:false,
                    data: {"_token": "{{ csrf_token() }}"
                        ,"id" : new_val},
                    error: function (xhr) {
                        alert(xhr.responseText);
                    },
                    success: function(data) {
                        // Check the output of ajax call on firebug console
                        //console.log(data);
                        //alert(data);
                        $('#phone_model').html(data);
                    }
                });

            });
        });

    </script>

@endsection
