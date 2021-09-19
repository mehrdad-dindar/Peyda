@extends('dashboard.layouts.master')
@section('title','گالری محصول')
@section('content')

    <div class="main-content">
        <div class="container-fluid">
            <div class="col-12 box-margin">
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="row">
                                <form action="{{route('products.pictures.store',$product)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="image">آپلود</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="image" class="btn btn-sm btn-primary" value="آپلود">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-12 box-margin">
                <h5 class="card-title">گالری عکس</h5>
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="row">
                            @foreach($product->pictures as $picture)
                                <div class="col-sm-6 col-xl-3">
                                    <a href="{{URL::asset('uploads/products/pictures').'/'.$picture->path}}" data-toggle="lightbox" data-gallery="example-gallery"><img src="{{URL::asset('uploads/products/pictures').'/'.$picture->path}}" class="img-fluid mb-30" alt=""></a>
                                    <form method="post" action="{{route('products.pictures.destroy',['product'=>$product, 'picture'=>$picture])}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-sm btn-danger" value="حذف">
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
@endsection