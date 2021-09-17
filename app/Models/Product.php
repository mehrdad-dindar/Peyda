<?php

namespace App\Models;

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
}
