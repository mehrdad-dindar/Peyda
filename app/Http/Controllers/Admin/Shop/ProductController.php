<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.products.index',[
                'products'=>Product::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.create',[
           'categories'=> Category::all(),
           'brands'=>Brand::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //dd('not null');
        $file = $request->file('image');
        //die();
        $image_name = time() . $file->getClientOriginalName();

        $file->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/products/', $image_name);

        //$image=$image_name;


        Product::query()->create([
            'name' => $request->get('name'),
            'slug' => $request->get('slug'),
            'brand_id' => $request->get('brand_id'),
            'category_id' => $request->get('category_id'),
            'cost' => $request->get('cost'),
            'description'=>$request->get('description'),
            'image' => $image_name,
        ]);

        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.edit',[
            'product'=>$product,
            'categories'=> Category::all(),
            'brands'=>Brand::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {
        $slugIsUnique=Product::query()->where('slug',$request->get('slug'))
            ->where('id','!=',$product->id)
            ->exists();
        if($slugIsUnique){
            return back()->withErrors(['slug'=>'slug already been taken']);
        }

        $image_name=$product->image;

        if($request->hasFile('image')){

            $file = $request->file('image');
            //die();
            $image_name = time() . $file->getClientOriginalName();

            $file->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/products/', $image_name);

        }

        $product->update([
            'name'=>$request->get('name',$product->name),
            'slug' => $request->get('slug',$product->slug),
            'brand_id' => $request->get('brand_id',$product->brand_id),
            'category_id' => $request->get('category_id',$product->category_id),
            'cost' => $request->get('cost',$product->cost),
            'description'=>$request->get('description',$product->description),
            'image' => $image_name,
        ]);

        return redirect(route('products.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        //dd($product);
        $product->delete();

        return redirect(route('products.index'));
    }
}
