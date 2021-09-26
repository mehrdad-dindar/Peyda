<?php

namespace App\Models;

use App\Http\Requests\DiscountRequest;
use App\Http\Requests\ProductPictureRequest;
use App\Http\Requests\Request;
use File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function addPicture(ProductPictureRequest $request)
    {


        $file = $request->file('image');
        //die();
        $image_name = time() . $file->getClientOriginalName();

        $file->move($_SERVER["DOCUMENT_ROOT"] . '/uploads/products/pictures/', $image_name);




        $this->pictures()->create([
            'path'=>$image_name,
            'mime'=>$request->file('image')->getClientMimeType()
        ]);
    }

    public function deletePicture(Picture $picture)
    {
        File::delete('uploads/products/pictures/'.$picture->path);
        $picture->delete();
    }

    public function discount()
    {
        return $this->hasOne(Discount::class);
    }

    public function addDiscount(DiscountRequest $request)
    {
        if(!$this->discount()->exists()){
            $this->discount()->create([
                'value'=>$request->get('value')
            ]);
        }else{
            $this->discount->update([
               'value'=>$request->get('value')
            ]);
        }
    }

    public function deleteDiscount()
    {
        $this->discount()->delete();
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class)
            ->withPivot(['value'])
            ->withTimestamps();
    }

    public static function saveColorCostJson($costs,$color)
    {
        $result=array();
        foreach ($costs as $key=>$cost){
            array_push($result,['cost'=>$cost,'color'=>$color[$key]]);
        }
        return json_encode((object)$result);

    }
}
