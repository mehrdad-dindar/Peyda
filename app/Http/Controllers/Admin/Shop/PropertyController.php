<?php

namespace App\Http\Controllers\Admin\Shop;

use App\Http\Requests\PropertyRequest;
use App\Models\property;
use App\Http\Controllers\Controller;
use App\Models\PropertyGroup;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.properties.index',[
            'properties'=>Property::all(),
            'groups'=>PropertyGroup::all()
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
    public function store(PropertyRequest $request)
    {

        Property::query()->create([
            'title'=>$request->get('title'),
            'property_group_id'=>$request->get('group')
        ]);

        return redirect(route('properties.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {

       //   dd('injaaaaaaaa');

        return view('dashboard.properties.edit',[
            'property'=>$property,
            'groups'=>PropertyGroup::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(PropertyRequest $request, property $property)
    {
        $property->update([
            'title'=>$request->get('title',$property->title),
            'property_group_id'=>$request->get('group')
        ]);

        return redirect(route('properties.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy($property)
    {

        Property::find($property)->delete();

        return redirect(route('properties.index'));//
    }
}
