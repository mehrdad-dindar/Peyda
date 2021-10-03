<?php

namespace App\Http\Requests;

use App\Models\User;
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

        $rules= [
            'f_name' => ['nullable','required_without:f_name_other'],
            'l_name' => ['nullable','required_without:l_name_other'],
            'city_id' => ['nullable','required_without:city_id_other'],
            'address' => ['nullable','required_without:address_other'],
            'f_name_other' => ['nullable','required_without:f_name'],
            'l_name_other' => ['nullable','required_without:l_name'],
            'city_id_other' => ['nullable','required_without:city_id'],
            'address_other' => ['nullable','required_without:address'],
            'melli_code_other' => ['nullable','required_without:melli_code', new melliCode(), 'digits:10'],
            'melli_code' => ['nullable','required_without:melli_code_other', new melliCode(), 'digits:10'],
            'email' => ['nullable', 'email:rfc,dns'],
            'email_other' => ['nullable', 'email:rfc,dns'],
            'postal_code_other' => ['nullable','required_if:postal_code,null', new postalCode(), 'digits:10'],
            'day_other'=>['nullable','required_if:day,null','integer','between:1,31'],
            'month_other'=>['nullable','required_if:month,null','integer','between:1,12'],
            'year_other'=>['nullable','required_if:year,null','integer','between:1310,'.$verta],
            'day'=>['nullable','required_if:day_other,null','integer','between:1,31'],
            'month'=>['nullable','required_if:month_other,null','integer','between:1,12'],
            'year'=>['nullable','required_if:year_other,null','integer','between:1310,'.$verta],
            'phone_num_other'=>['required_without:day'],
            'price_range'=>['required']
        ];


        return $rules;

    }

}
