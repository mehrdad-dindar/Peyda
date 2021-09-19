<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Requests\PropertyGroupRequest;
use App\Models\PropertyGroup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropertyGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.propertyGroups.index',[
           'properties'=>PropertyGroup::all()
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
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyGroupRequest $request)
    {
        PropertyGroup::query()->create([
            'title'=>$request->get('title')
        ]);

        return redirect(route('propertyGroups.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyGroup  $propertyGroup
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyGroup $propertyGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyGroup  $propertyGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyGroup $propertyGroup)
    {
        //dd($propertyGroup);
        return view('dashboard.propertyGroups.edit',[
            'property'=>$propertyGroup
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyGroup  $propertyGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropertyGroup $propertyGroup)
    {
        $propertyGroup->update([
           'title'=>$request->get('title',$propertyGroup->title)
        ]);

        return redirect(route('propertyGroups.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyGroup  $propertyGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy( $propertyGroup)
    {

        PropertyGroup::find($propertyGroup)->delete();

        return redirect(route('propertyGroups.index'));
    }
}
