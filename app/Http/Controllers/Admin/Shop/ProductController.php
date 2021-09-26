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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ProductRequest $request)
    {

        $cost=Product::saveColorCostJson($request['cost'],$request['color']);
        /*$array=json_decode($json);
        foreach ($array as $arr){
            dd($arr->color);
        }*/

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
            'cost' => $cost,
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Product $product)
    {
        $array=json_decode($product->cost);
        $color_cost=array();
        foreach ($array as $arr){
            //dd($arr->color);
            array_push($color_cost,['color'=>$arr->color,'price'=>$arr->cost]);
        }
        $product['color_cost']=$color_cost;

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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductUpdateRequest $request, Product $product)
    {

        dd($request->all());
        $costs = array_merge($request['cost'], $request['cost_old']);
        $colors = array_merge($request['color'], $request['color_old']);
        $cost=Product::saveColorCostJson($costs,$colors);

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
            'cost' => $cost,
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
