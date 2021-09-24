@extends('layouts.profile_master')
@section('title','افزودن فراگارانتی')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="table-responsive main-table mb-5">

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ردیف</th>
                            <th scope="col">کد فراگارانتی</th>
                            <th scope="col">برند</th>
                            <th scope="col">مدل</th>
                            <th scope="col">تاریخ انقضا</th>
                            <th scope="col">مالک</th>
                            <th scope="col" >عملیات</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>
                                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="fas fa-cog"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">عملیات</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                               <a href="#"  class="btn btn-1" data-bs-dismiss="modal">استفاده از بیمنامه</a>
                                                <a href="#"  class="btn btn-1" data-bs-dismiss="modal">انتقال فراگارانتی</a>
                                                <a href="#"  class="btn btn-1" data-bs-dismiss="modal">تمدید فراگارانتی</a>
                                                <a href="#"  class="btn btn-1" data-bs-dismiss="modal">چاپ</a>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>
                                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="fas fa-cog"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">عملیات</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                <div class="modal-body">
                                                    <a href="#"  class="btn btn-1" data-bs-dismiss="modal">استفاده از بیمنامه</a>
                                                    <a href="#"  class="btn btn-1" data-bs-dismiss="modal">انتقال فراگارانتی</a>
                                                    <a href="#"  class="btn btn-1" data-bs-dismiss="modal">تمدید فراگارانتی</a>
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                انتقال فراگارانتی
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>
                                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="fas fa-cog"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">عملیات</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                <div class="modal-body">
                                                    <a href="#"  class="btn btn-1" data-bs-dismiss="modal">استفاده از بیمنامه</a>
                                                    <a href="#"  class="btn btn-1" data-bs-dismiss="modal">انتقال فراگارانتی</a>
                                                    <a href="#"  class="btn btn-1" data-bs-dismiss="modal">تمدید فراگارانتی</a>
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                              تمدید فراگارانتی
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>
                                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <i class="fas fa-cog"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">عملیات</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                <div class="modal-body">
                                                    <a href="#"  class="btn btn-1" data-bs-dismiss="modal">استفاده از بیمنامه</a>
                                                    <a href="#"  class="btn btn-1" data-bs-dismiss="modal">انتقال فراگارانتی</a>
                                                    <a href="#"  class="btn btn-1" data-bs-dismiss="modal">تمدید فراگارانتی</a>
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                تمدید فراگارانتی
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>

    </div>
@endsection
