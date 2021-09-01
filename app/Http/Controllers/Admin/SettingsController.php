<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Phone_brand;
use App\Models\Phone_model;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function getPhoneBrands()
    {
        $brands=Phone_brand::all();
        return view('dashboard.settings.mobile.index',['brands'=>$brands]);
    }
    public function deletePhoneBrand($id)
    {
        $brands=Phone_brand::query()->find($id)->delete();
        return $this->getPhoneBrands();
    }
    public function storePhoneBrands(Request $request)
    {
        Phone_brand::query()->create(['name'=>$request->get('model_name')]);
        return $this->getPhoneBrands();
    }

    public function getPhoneModel($id)
    {
        $brand=Phone_brand::query()->find($id)->first();
        $models=Phone_model::query()->where('brand_id','=',$id)->get();

        return view('dashboard.settings.mobile.model',['brand'=>$brand, 'models'=>$models ]);
    }

    public function deletePhoneModel($id,$brand_id)
    {
        Phone_model::query()->find($id)->delete();

        return $this->getPhoneModel($brand_id);
    }

    public function storePhoneModel(Request $request,$id)
    {
        Phone_model::query()->create([
            'name'=>$request->get('model_name'),
            'brand_id'=>$id]);

        return $this->getPhoneModel($id);
    }

}
