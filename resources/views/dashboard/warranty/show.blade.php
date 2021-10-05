@extends('dashboard.layouts.master')
@section('custom_head')
    <link rel="stylesheet" href="{{URL::asset('admin/css/default-assets/light-gallery.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/css/default-assets/notification.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/css/default-assets/simplemde.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('admin/css/default-assets/modal.css')}}">
@endsection
@section('title','فراگارانتی')
@section('content')
    <div class="main-content">
        <!-- Basic Form area Start -->
        <div class="container-fluid">
            <!-- Form row -->

            <style>
                #hidden_div, #hidden_div_1,#hidden_div_2 {
                    display: none;
                }
            </style>
            <form action="{{ route('dashboard') }}/warranties/admit" method="post">
                @csrf

                <input type="hidden" name="warranty_id" value="{{$warranty->id}}">
                <input type="hidden" name="user_id" value="{{$warranty->User->id}}">

                <div class="row">
                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-md-11">
                                        <h5 class="card-title mb-6">اطلاعات فراگارانتی</h5>
                                    </div>
                                    <div class="col-md-1">
                                        @if($warranty->status_id==2)
                                            <span class="badge badge-success-lighten">فعال</span>
                                        @else
                                            <span class="badge badge-danger-lighten">غیرفعال</span>
                                        @endif
                                    </div>
                                </div>
                                <span class="d-block mb-20"> </span>
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 ">
                                        <h5 class="card-title">اطلاعات کاربر</h5>
                                        <hr>
                                        <div class="form-group">
                                            <div class="checkbox d-inline">
                                                <h3 name="h3_user_name" class="card-title">نام</h3>
                                                <label for="h3_user_name">{{$warranty->User->f_name}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox d-inline">
                                                <h3 name="h3_user_name" class="card-title">نام خانوادگی</h3>
                                                <label for="h3_user_name">{{$warranty->User->l_name}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox d-inline">
                                                <h3 name="h3_user_name" class="card-title">کد ملی</h3>
                                                <label for="h3_user_name">{{$warranty->User->melli_code}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <h5 class="card-title">نوع گوشی و بازه قیمت</h5>
                                        <hr>

                                        <div class="form-group">
                                            <div class="checkbox d-inline">
                                                <h3 name="h3_user_name" class="card-title">برند</h3>
                                                <label for="h3_user_name">{{$warranty['phoneBrand']}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox d-inline">
                                                <h3 name="h3_user_name" class="card-title">مدل</h3>
                                                <label for="h3_user_name">{{$warranty['phoneModel']}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox d-inline">
                                                <h3 name="h3_user_name" class="card-title">بازه قیمت</h3>
                                                <select id="commitment_ceilings" onchange="selectOnChange(this.options[this.selectedIndex].getAttribute('data-price'),{{($warranty->Commitment_ceiling->price-($warranty->Commitment_ceiling->discount*$warranty->Commitment_ceiling->price)/100)}})" name="commitment_ceilings" class="select2 form-control">
                                                    @foreach($commitment_ceilings as $commitment_ceiling)
                                                        <option data-price="{{$commitment_ceiling->price}}"  data-discount="{{$commitment_ceiling->discount}}" value="{{$commitment_ceiling->id}}"
                                                                @if($commitment_ceiling->id==$warranty['commitment_ceiling_id']) selected @endif>{{$cc->price_range}} - @if($cc->discount) <p><del>{{$cc->price}}</del> <strong class="text-danger">
                                                                    {{number_format((($cc->discount*$cc->price)/100)+$cc->price). ' تومان '}}</strong></p> @else {{number_format($cc->price). ' تومان '}} @endif</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <h5 class="card-title">بیمه و عکس ها</h5>
                                        <hr>

                                        <div class="form-group">
                                            <div class="checkbox d-inline">
                                                <h3 name="h3_user_name" class="card-title">هزینه بیمه آتش سوزی</h3>
                                                <label
                                                    for="h3_user_name">{{optional($warranty->Fire_commitment_ceiling)->price ? optional($warranty->Fire_commitment_ceiling)->addition_price.' + ۵۰ میلیون هدیه':'۵۰ میلیون هدیه'}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="card">
                                                <div class="card-body pb-0">
                                                    <a class="btn btn-primary text-light md-trigger md-setperspective mr-2 mb-2"
                                                       data-toggle="modal" data-target="#myModal5">عکس ها</a>
                                                    <div class="row lightgallery">
                                                        <!-- Single Gallery Area -->
                                                        @if(sizeof($images)>0)
                                                            @foreach($images as $image)
                                                                <a class="single_gallery_item col-sm-6 col-xl-3 mb-30"
                                                                   href="{{URL::asset('uploads/warranty_images').'/'.$image->URL}}">
                                                                    <img
                                                                        src="{{URL::asset('uploads/warranty_images').'/'.$image->URL}}"
                                                                        alt=""></a>
                                                        @endforeach
                                                    @endif
                                                    <!-- Single Gallery Area -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <h4> هزینه پرداخت شده توسط کاربر </h4>
                                <h6>هزینه فراگارانتی + ۹٪ ارزش افزوده: {{number_format($warranty->Commitment_ceiling->price + (9*(($warranty->Commitment_ceiling->discount*$warranty->Commitment_ceiling->price)/100+$warranty->Commitment_ceiling->price))) . ' تومان '}}</h6>
                                @if($warranty->addition_fire_commitment_id != null)
                                    <h6>هزینه بیمه آتش سوزی + ۹٪ ارزش افزوده: {{number_format($warranty->Fire_commitment_ceiling->price + (9*$warranty->Fire_commitment_ceiling->price)/100) . ' تومان '}}</h6>
                                @endif

                                <h6>هزینه کل: @if($warranty->addition_fire_commitment_id != null)
                                        {{number_format($warranty->Fire_commitment_ceiling->price + (9*$warranty->Fire_commitment_ceiling->price)/100 + $warranty->Commitment_ceiling->price + (9*$warranty->Commitment_ceiling->price)/100) . ' تومان '}}@else {{number_format($warranty->Commitment_ceiling->price + (9*$warranty->Commitment_ceiling->price)/100) . ' تومان '}} @endif</h6>

                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="user_id" value="{{$warranty->owner_id}}">
                    <input type="hidden" name="admin_id" value="{{auth()->user()->id}}">

                    <div class="col-12 box-margin">
                        <div class="contact-form-area">
                            <div class="card">
                                <div class="card-body">
                                    <div class="stacked-form-area">

                                        <label for="status">وضعیت</label>
                                        <select name="status" id="status" onchange="showDiv(this.options[this.selectedIndex].getAttribute('data-value'));">
                                            @foreach($warrantyProblemTypes as $warrantyProblemType)
                                                <option data-value="{{$warrantyProblemType->data_value}}" value="{{$warrantyProblemType->id}}" @if($warrantyProblemType->id==1) selected @endif>{{$warrantyProblemType->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div id="hidden_div" class="col-12 mb-30">
                                        <h4 class="card-title mb-2">توضیحات</h4>
                                        <textarea class="form-control"
                                                  name="descriptions" id="simpleMdeExample" rows="10"></textarea>
                                    </div>
                                    <div id="hidden_div_1" class="col-12 mb-30">
                                        <h4 class="card-title mb-2">مقدار بدهی</h4>
                                        <input type="number" class="form-control"
                                               name="bedehi_price" id="bedehi_price">
                                        <h4 class="card-title mb-2">توضیحات</h4>
                                        <textarea class="form-control"
                                                  name="descriptions_1" rows="10"></textarea>
                                    </div>
                                    <div id="hidden_div_2" class="col-12 mb-30">
                                        <h4 class="card-title mb-2">مقدار طلب</h4>
                                        <input type="number" class="form-control"
                                                  name="talab_price" id="talab_price" value="">
                                        <h4 class="card-title mb-2">توضیحات</h4>
                                        <textarea class="form-control"
                                                  name="descriptions_2" id="simpleMdeExample" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class="btn btn-primary btn-block mt-15 mb-20" type="submit" value="تایید">

                </div>
            </form>
            <style>
                .scroll {
                    margin: 4px 4px;
                    padding: 4px;
                    width: 100%;
                    height: 800px;
                    overflow-x: hidden;
                    overflow-y: auto;
                    text-align: justify;
                }
            </style>

            <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">عکس ها</h4>
                        </div>
                        <form class="scroll" name="" action="{{route('addImages',$warranty->id)}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                @foreach($imageFields as $key=>$imageField)
                                    <div class="form-control row d-flex justify-content-between">
                                        <input type="hidden" class="disabled-input" name="type_{{$imageField->html_id}}"
                                               value="{{$imageField->id}}"
                                               accept=".png, .jpg, .jpeg"/>
                                        <h6 class="col-md-5"
                                               >{{$imageField->name}}</h6>
                                        @if(isset($images[$key]))
                                            <img class="mr-2 col-md-3"
                                                 src="{{URL::asset('uploads/warranty_images').'/'.$images[$key]->URL}}"
                                                 alt="">
                                            <input type="hidden" name="hidden_{{$imageField->html_id}}" value="{{$images[$key]->id}}">
                                        @endif
                                        <input class="col-md-4" type="file" name="{{$imageField->html_id}}">
                                    </div>
                                @endforeach
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">بستن</button>
                                <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('custom_js')
    <script src="{{URL::asset('admin/js/default-assets/light-gallery-all.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/light-gallery.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/bootstrap-growl.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/notification-active.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/simplemde.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/tinymce.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/tinymce-active.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/simplemde-active.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/basic-form.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/modaleffects.js')}}"></script>
    <script src="{{URL::asset('admin/js/default-assets/modal-classes.js')}}"></script>
    <script>


        function selectOnChange(select,minus){
            document.getElementById('talab_price').value=select-minus-9*(select-minus)/100;
            document.getElementById('bedehi_price').value=select-minus+9*(select-minus)/100;
        }

        function showDiv(select) {

            //document.getElementById('hidden_div').style.display = "block";
            //alert(select);
            if (select == 0) {
                document.getElementById('hidden_div').style.display = "block";
                document.getElementById('hidden_div_1').style.display = "none";
                document.getElementById('hidden_div_2').style.display = "none";
            } else if(select==1) {
                document.getElementById('hidden_div').style.display = "none";
                document.getElementById('hidden_div_1').style.display = "block";
                document.getElementById('hidden_div_2').style.display = "none";
            }else if(select==2){
                document.getElementById('hidden_div').style.display = "none";
                document.getElementById('hidden_div_1').style.display = "none";
                document.getElementById('hidden_div_2').style.display = "block";
            }else if(select==3){
                document.getElementById('hidden_div').style.display = "none";
                document.getElementById('hidden_div_1').style.display = "none";
                document.getElementById('hidden_div_2').style.display = "none";
            }
        }
    </script>
@endsection
