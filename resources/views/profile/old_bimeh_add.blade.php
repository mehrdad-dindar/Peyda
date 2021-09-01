@extends('layouts.profile_master')
@section('title','افزودن بیمه نامه')
@section('content')
    <div class="contact-form2 justify-content-center p-4 Specifications">
        <form class="container mt-3" action="#">
<div class="row">
    <h1 class="fs-4 mb-4">فرم صدور بیمه نامه جدید</h1>
</div>
            {{--برند--}}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="input-text"> برند </label>
                        <div class="form-control select-box">
                            <select class="form-select form-select-lg  js-example-basic-single" name="state">
                                <option value="AL">Alabama</option>
                                <option value="1">خcdxd</option>
                                <option value="2">Wyoing</option>
                                <option value="3">Wming</option>
                                <option value="4">Wyomighf</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="input-text"> مدل </label>
                        <div class="form-control select-box">
                            <select class="form-select form-select-lg  js-example-basic-single" name="state">
                                <option value="AL">Alabama</option>
                                <option value="1">خcdxd</option>
                                <option value="2">Wyoing</option>
                                <option value="3">Wming</option>
                                <option value="4">Wyomighf</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>
            {{--IMEI--}}
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="form-group">
                        <label for="input-text"> IMEI1 </label>
                        <input type="text" class="form-control form-sep" name="" id="input-text" aria-describedby=""
                               placeholder="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="form-group">
                        <label for="input-text"> IMEI2 </label>
                        <input type="text" class="form-control form-sep" name="" id="input-text" aria-describedby=""
                               placeholder="">
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="form-group">
                        <label for="input-text"> توضیحات </label>
                        <input type="text" class="form-control  form-sep  form-exp" name="" id="input-text" aria-describedby=""
                               placeholder="">
                    </div>
                </div>


            </div>


           {{-- CUSTOM FILE INPUTS FOR IMAGES

            <div class="row mt-4">
                <div class="col-12">
                    <label for="input-text"> عکس های ارسالی</label>
                    <div class="form-text">
                        برای آپلود عکس پروفایل از قسمت انتخاب تصویر عکس مورد نظر خود را آپلود کنید
                    </div>
                </div>
                <!-- Our File Inputs -->
            </div>
            <div class="row mt-4">
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="form-group wrap-custom-file">
                        <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png"/>
                        <label for="image1">
                            <span>عکس صفحه نمایش</span>
                            <i class="fa fa-plus-circle"></i>
                        </label>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="form-group wrap-custom-file">
                        <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png"/>
                        <label for="image1">
                            <span>عکس پشت صفحه </span>
                            <i class="fa fa-plus-circle"></i>
                        </label>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="form-group wrap-custom-file">
                        <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png"/>
                        <label for="image1">
                            <span>عکس سمت راست صفحه</span>
                            <i class="fa fa-plus-circle"></i>
                        </label>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="form-group wrap-custom-file">
                        <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png"/>
                        <label for="image1">
                            <span>عکس سمت چپ صفحه</span>
                            <i class="fa fa-plus-circle"></i>
                        </label>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="form-group wrap-custom-file">
                        <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png"/>
                        <label for="image1">
                            <span>عکس پشت صفحه </span>
                            <i class="fa fa-plus-circle"></i>
                        </label>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center">
                    <div class="form-group wrap-custom-file">
                        <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png"/>
                        <label for="image1">
                            <span>انتخاب تصویر</span>
                            <i class="fa fa-plus-circle"></i>
                        </label>
                    </div>
                </div>
            </div>
            <!-- End Page Wrap -->--}}

            <div class="row justify-content-center mt-5">
                <div class="col-md-3">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn  mt-3 submit-button2"> فرستادن</button>
                    </div>
                </div>
            </div>


        </form>
    </div>

@endsection