<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Property;
use Illuminate\Http\Request;

class ProductPropertyController extends Controller
{

    public function index(Product $product)
    {
        return view('dashboard.productProperty.index',[
           'product'=>$product
        ]);
    }

    public function create(Product $product)
    {
        return view('dashboard.productProperty.create',[
            'product'=>$product
        ]);
    }

    public function store(Request $request,Product $product)
    {
        $properties=collect($request->get('properties'))->filter(function ($item){
            if(!empty($item['value'])){
                return $item;
            }
        });

        $product->properties()->sync($properties);

        return redirect()->back();
    }

}
