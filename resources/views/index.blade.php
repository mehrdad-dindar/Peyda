@extends('layouts.master')
@section('title','صفحه نخست')
@section('content')
    <div class="overflow-hidden">
        <div id="header-bg" class="container-fluid position-relative top-0">
            <div class="row">
                <div class="col-12 p-0">
                    <img src="{{ URL::asset('front/img/header_bg.png')}}" class="img-fluid" alt="">
                    <div class="parent-bg-rotated ">
                        <div class="bg-rotated-div first-bg bg-white"></div>
                        <div class="bg-rotated-div second-bg bg-purple"></div>
                        <div class="bg-rotated-div third-bg bg-white"></div>
                        <div class="bg-rotated-div fourth-bg bg-purple"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row abilities">
                <div class="col-md-3 d-flex justify-content-center align-items-start">
                    <div class="ability"><h2 class="text-medium">Lorem ipsum dolor</h2></div>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-end">
                    <div class="ability"><h2 class="text-medium">Lorem ipsum dolor</h2></div>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-start">
                    <div class="ability"><h2 class="text-medium">Lorem ipsum dolor</h2></div>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-end">
                    <div class="ability"><h2 class="text-medium">Lorem ipsum dolor</h2></div>
                </div>
            </div>
        </div>
        <div class="white-space"></div>
        <div class="container position-relative">
            <div class="row position-absolute top-0 w-100">
                <div class="col-12">
                    <div class="parent-bg-rotated position-relative">
                        <div class="bg-rotated-div first-bg bg-white"></div>
                        <div class="bg-rotated-div second-bg bg-orange"></div>
                        <div class="bg-rotated-div third-bg bg-white"></div>
                        <div class="bg-rotated-div fourth-bg bg-orange"></div>
                    </div>
                </div>
            </div>
            <div class="row post-items position-relative  w-100">
                <div class="col-md-4 d-flex justify-content-center align-items-end">
                    <a href="#" class="post-item mb-3">
                        <div class="post-thumb"><img class="img-fluid" src="{{ URL::asset('front/img/posttumb.jpg')}}"
                                                     alt=""></div>
                        <div class="post-title text-center"><h2>عنوان مقاله کوتاه</h2></div>
                    </a>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <a href="#" class="post-item mb-3">
                        <div class="post-thumb"><img class="img-fluid" src="{{ URL::asset('front/img/header_bg.png')}}"
                                                     alt=""></div>
                        <div class="post-title text-center"><h2>عنوان یک مقاله متوسط جهت تست</h2></div>
                    </a>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-start">
                    <a href="#" class="post-item mb-3">
                        <div class="post-thumb"><img class="img-fluid"
                                                     src="{{ URL::asset('front/img/bg_dot_dash.jpg')}}"
                                                     alt=""></div>
                        <div class="post-title text-center"><h2>عنوان یک مقاله بسیار بسیار بلند که در آن قصد تست وجود
                                دارد</h2></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-md-4 customer-comments shadow-lg">
                <h3> نظر مشتریان </h3>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-md-end">
                <div class="col-md-6 text-center">
                    <div class="admin-base-info">
                        <div class="customer-profile-avatar">
                            <img src="{{ URL::asset('front/img/user-avatar.jpg') }}"
                                 class="img-thumbnail rounded-circle main-img titles"
                                 alt="">
                        </div>
                        <div class="admin-profile-name">
                            <h4>سارا احدی</h4>
                        </div>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad distinctio illo nihil nisi
                            officiis? Aliquam animi consequuntur ducimus earum facilis harum, impedit ipsa ipsam iusto
                            maiores quis quod voluptate, voluptates?</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-md-start">
                <div class="col-md-6 text-center">
                    <div class="admin-base-info">
                        <div class="customer-profile-avatar">
                            <img src="{{ URL::asset('front/img/user-avatar.jpg') }}"
                                 class="img-thumbnail rounded-circle main-img titles"
                                 alt="">
                        </div>
                        <div class="admin-profile-name">
                            <h4>سارا احدی</h4>
                        </div>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad distinctio illo nihil nisi
                            officiis? Aliquam animi consequuntur ducimus earum facilis harum, impedit ipsa ipsam iusto
                            maiores quis quod voluptate, voluptates?</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-md-end">
                <div class="col-md-6 text-center">
                    <div class="admin-base-info">
                        <div class="customer-profile-avatar">
                            <img src="{{ URL::asset('front/img/user-avatar.jpg') }}"
                                 class="img-thumbnail rounded-circle main-img titles"
                                 alt="">
                        </div>
                        <div class="admin-profile-name">
                            <h4>سارا احدی</h4>
                        </div>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad distinctio illo nihil nisi
                            officiis? Aliquam animi consequuntur ducimus earum facilis harum, impedit ipsa ipsam iusto
                            maiores quis quod voluptate, voluptates?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-space"></div>
    </div>
@endsection
