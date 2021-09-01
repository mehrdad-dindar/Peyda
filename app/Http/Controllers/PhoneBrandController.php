<?php

namespace App\Http\Controllers;

use App\Models\Phone_model;
use Illuminate\Http\Request;

class PhoneBrandController extends Controller
{
    public function get_model()
    {
        $brand_id = request('brand');

        $models = Phone_model::where('brand_ir',$brand_id)->get();
        $option = "<option value=''>انتخاب مدل گوشی</option>";
        foreach ($models as $model){
            $option .= "<option value='".$model->id."'>".$model->name."</option>";
        }
        return $option;
    }
}
