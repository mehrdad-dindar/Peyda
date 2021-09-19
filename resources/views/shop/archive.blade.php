@extends('layouts.master')
@section('title','فروشگاه')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h1>فروشگاه</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row sorting my-5">
            <div class="col-md-12 fs-6">
                <span class="text-muted"><i class="fas fa-sort-amount-down text-black-50"></i> مرتب‌سازی بر اساس :</span>
                <a href="#" class="btn btn-light active">پربازدید ترین</a>
                <a href="#" class="btn btn-light">پرفروش ترین</a>
                <a href="#" class="btn btn-light">جدیدترین</a>
                <a href="#" class="btn btn-light">گران ترین</a>
                <a href="#" class="btn btn-light">ارزان ترین</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 shop-item">
                <a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush d-flex justify-content-center">
                        <li class="list-group-item text-center text-light"><span class="price">2,999,000</span><span class="currency">تومان</span></li>
                    </ul>
                </a>
            </div>
            <div class="col-md-3 mb-4 shop-item">
                <a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/2.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush d-flex justify-content-center">
                        <li class="list-group-item text-center text-light"><span class="price">2,999,000</span><span class="currency">تومان</span></li>
                    </ul>
                </a>
            </div>
            <div class="col-md-3 mb-4 shop-item">
                <a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/3.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush d-flex justify-content-center">
                        <li class="list-group-item text-center text-light"><span class="price">2,999,000</span><span class="currency">تومان</span></li>
                    </ul>
                </a>
            </div>
            <div class="col-md-3 mb-4 shop-item">
                <a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/4.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush d-flex justify-content-center">
                        <li class="list-group-item text-center text-light"><span class="price">2,999,000</span><span class="currency">تومان</span></li>
                    </ul>
                </a>
            </div>
            <div class="col-md-3 mb-4 shop-item">
                <a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/5.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush d-flex align-items-center justify-content-center">
                        <li class="list-group-item text-center text-light"><span class="price">2,999,000</span><span class="currency">تومان</span></li>
                    </ul>
                </a>
            </div>
            <div class="col-md-3 mb-4 shop-item">
                <a href="#" class="card text-decoration-none text-light">
                    <img src="{{URL::asset('admin/img/shop-img/6.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush d-flex justify-content-center">
                        <li class="list-group-item text-center"><span class="price text-white-50"><del>2,999,000</del></span><span class="badge rounded-pill bg-orange text-dark">50%</span></li>
                        <li class="list-group-item text-center text-light"><span class="price">2,999,000</span><span class="currency">تومان</span></li>
                    </ul>
                </a>
            </div>
            <div class="col-md-3 mb-4 shop-item">
                <a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/7.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush d-flex justify-content-center">
                        <li class="list-group-item text-center text-light"><span class="price">2,999,000</span><span class="currency">تومان</span></li>
                    </ul>
                </a>
            </div>
            <div class="col-md-3 mb-4 shop-item">
                <a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/8.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush d-flex justify-content-center">
                        <li class="list-group-item text-center text-light"><span class="price">2,999,000</span><span class="currency">تومان</span></li>
                    </ul>
                </a>
            </div>
            <div class="col-md-3 mb-4 shop-item">
                <a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush d-flex justify-content-center">
                        <li class="list-group-item text-center text-light">رایگان</li>
                    </ul>
                </a>
            </div>
            <div class="col-md-3 mb-4 shop-item">
                <a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/2.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush d-flex justify-content-center">
                        <li class="list-group-item text-center text-light"><span class="price">2,999,000</span><span class="currency">تومان</span></li>
                    </ul>
                </a>
            </div>
            <div class="col-md-3 mb-4 shop-item">
                <a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/3.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush d-flex justify-content-center">
                        <li class="list-group-item text-center text-light"><span class="price">2,999,000</span><span class="currency">تومان</span></li>
                    </ul>
                </a>
            </div>
            <div class="col-md-3 mb-4 shop-item">
                <a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/4.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush d-flex justify-content-center">
                        <li class="list-group-item text-center text-light"><span class="price">2,999,000</span><span class="currency">تومان</span></li>
                    </ul>
                </a>
            </div>
            <div class="col-md-3 mb-4 shop-item">
                <a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/5.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush d-flex justify-content-center">
                        <li class="list-group-item text-center text-light"><span class="price">2,999,000</span><span class="currency">تومان</span></li>
                    </ul>
                </a>
            </div>
            <div class="col-md-3 mb-4 shop-item">
                <a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/6.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush d-flex justify-content-center">
                        <li class="list-group-item text-center text-light"><span class="price">2,999,000</span><span class="currency">تومان</span></li>
                    </ul>
                </a>
            </div>
            <div class="col-md-3 mb-4 shop-item">
                <a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/7.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush d-flex justify-content-center">
                        <li class="list-group-item text-center text-light"><span class="price">2,999,000</span><span class="currency">تومان</span></li>
                    </ul>
                </a>
            </div>
            <div class="col-md-3 mb-4 shop-item">
                <a href="#" class="card text-decoration-none text-white">
                    <img src="{{URL::asset('admin/img/shop-img/8.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title h6 text-center">محصول نمونه</h2>
                    </div>
                    <ul class="list-group list-group-flush d-flex justify-content-center">
                        <li class="list-group-item text-center text-light">ناموجود</li>
                    </ul>
                </a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 d-flex justify-content-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination shop-pagination">
                        <li class="page-item mx-2 rounded">
                            <a class="page-link text-dark bg-orange " href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item mx-2 rounded"><a class="page-link text-dark bg-orange " href="#">1</a></li>
                        <li class="page-item mx-2 rounded"><a class="page-link text-dark bg-orange " href="#">2</a></li>
                        <li class="page-item mx-2 rounded"><a class="page-link text-dark bg-orange " href="#">3</a></li>
                        <li class="page-item mx-2 rounded">
                            <a class="page-link text-dark bg-orange " href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="white-space"></div>
@endsection
