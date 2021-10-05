<?php

namespace App\Http\Requests;

use App\Models\User;
use Hekmatinasser\Verta\Verta;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\melliCode;
use App\Rules\postalCode;

class EditProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $verta=Verta::now()->format('Y');
        $rules=[
            'f_name'=>['required'],
            'l_name'=>['required'],
            'city_id'=>['required'],
            'address'=>['required'],
            'melli_code'=>['required',new melliCode(),'digits:10'],
            'phone_model_id'=>['required'],
            'email'=>['nullable','email'],
            'postal_code' => ['nullable',new postalCode(),'digits:10'],
            'day' => ['nullable', 'integer', 'between:1,31'],
            'month' => ['nullable', 'integer', 'between:1,12'],
            'year' => ['nullable', 'integer', 'between:1310,' . $verta],
        ];

        if(User::find(auth()->user()->id)->avatar==null){
            $rules['avatar']=['nullable','mimes:jpg,jpeg,png,mpeg','max:4096','min:5'];
        }
        /*if(User::find(auth()->user()->id)->melli_card==null){
            $rules['melli_card']=['required','mimes:jpg,jpeg,png,mpeg','max:4096','min:5'];
        }
        if(User::find(auth()->user()->id)->melli_card_back==null){
            $rules['melli_card_back']=['required','mimes:jpg,jpeg,png,mpeg','max:4096','min:5'];
        }*/
        return $rules;
    }
}
