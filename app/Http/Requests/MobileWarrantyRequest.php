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
            'f_name' => ['required_without:f_name_other'],
            'l_name' => ['required_without:l_name_other'],
            'city_id' => ['required_without:city_id_other'],
            'address' => ['required_without:address_other'],
            'melli_code' => ['required_without:melli_code_other', new melliCode(), 'digits:10'],
            'email' => ['nullable', 'email:rfc,dns'],
            'email_other' => ['nullable', 'email:rfc,dns'],
            'postal_code_other' => ['required_if:postal_code,null', new postalCode(), 'digits:10'],
            'day_other'=>['required_if:day,null','integer','between:1,31'],
            'month_other'=>['required_if:month,null','integer','between:1,12'],
            'year_other'=>['required_if:year,null','integer','between:1310,'.$verta],
            'phone_num_other'=>['required_without:day'],
            'price_range'=>['required']
        ];
    }
}
