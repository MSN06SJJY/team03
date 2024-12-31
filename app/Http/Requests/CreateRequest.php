<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
        return [
            'bikeway_name' => 'required|string|min:2|max:191', // 自行车道名称：必填，字符串，长度在 2 到 191 之间
            'districts' => 'required|string|max:191',           // 行政区：必填，字符串，最大长度 191
            'length' => 'required|numeric|min:0',                // 长度：必填，数字，最小值为 0
            'surrounding_attractions' => 'required|string|max:191', 
        ];
    }

}
