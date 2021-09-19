<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use function React\Promise\all;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        /*$cc = Brand::all();
        dd($cc[0]->image);*/
        return view('dashboard.brands.index',[
           'brands'=>Brand::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(BrandRequest $request)
    {
        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name = time() . $image->getClientOriginalName();
            $image->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/brands/', $image_name);
        }

        //$path=$request->file('image')->store('public/images/brands');

        Brand::query()->create([
            'name'=>$request->get('name'),
            'image'=>$image_name
        ]);

        return redirect(route('brands.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Brand $brand)
    {
        return view('dashboard.brands.edit',[
            'brand'=>$brand,
            'brands'=>Brand::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //dd($request->all());
        if($request->file('image')){
            //dd('not null');
            $file = $request->file('image');
            //die();
            $image_name = time() . $file->getClientOriginalName();

            $file->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/brands/', $image_name);

            $image=$image_name;

        }else{
            //dd('null');
            $image=$brand->image;
        }
        $brand->update([
            'name'=>$request->get('name'),
            'image'=>$image
        ]);

        return redirect(route('brands.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return string
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect(route('brands.index'));
    }

    public function verifyBrand(Request $request)
    {

        dd($request);
        if($request->file('file')!=null) {
            $image = $request->file('file');
            $image_name = time() . $image->getClientOriginalName();

            $image->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/brands/', $image_name);

            return response()->json([
                'name' => $image_name,
                'original_name' => $image->getClientOriginalName(),
            ]);
        }else{
            return response()->json([
                'name' => 'hiii'
            ]);
        }
        /*$ok=array();
        foreach ($request->input('document', []) as $file) {
            array_push($ok,'OK-');
        }
        return $ok;*/
    }
}
