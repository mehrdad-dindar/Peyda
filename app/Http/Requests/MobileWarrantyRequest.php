<?php

namespace App\Http\Requests;

use App\Rules\melliCode;
use App\Rules\postalCode;
use Hekmatinasser\Verta\Verta;
use Illuminate\Foundation\Http\FormRequest;

class MobileWarrantyRequest extends FormRequest
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
        $verta = Verta::now()->format('Y');

        return [
            'f_name' => ['required'],
            'l_name' => ['required'],
            'day' => ['nullable', 'integer', 'between:1,31'],
            'city_id' => ['required'],
            'address' => ['required'],
            'melli_code' => ['required', new melliCode(), 'digits:10'],
            'phone_model_id' => ['required'],
            'email' => ['nullable', 'email:rfc,dns'],
            'postal_code' => ['nullable', new postalCode(), 'digits:10'],
            'month' => ['nullable', 'integer', 'between:1,12'],
            'year' => ['nullable', 'integer', 'between:1310,' . $verta]
        ];
    }
}
