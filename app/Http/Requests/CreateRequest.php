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
            'bikeway_name' => 'required', // 自行车道名称：必填
            'districts' => 'required',           // 行政区：必填
            'length' => 'required|numeric|min:0',                // 长度：必填，数字，最小值为 0
            'surrounding_attractions' => 'required'
        ];
    }
    public function messages()
    {
        return [
            "bikeway_name.required" => "自行車道名稱 為必填",
            "districts.required" => "行政區 為必填",
            "length.required" => "长度：必填",
            "length.numeric" => "数字",
            "length.min" => "長度的最小值為 0",
            "surrounding_attractions.required" => "周邊景點 為必填",
        ];
    }
        
}
