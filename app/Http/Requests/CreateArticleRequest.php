<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest
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
            'bike_path_name'=>'required|string|min:2|max:30',
            'district'=>'required|min:2|max:30',
            'length'=>'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'nearby_attractions'=>'required|min:2|max:30'
        ];
    }

    public function messages()
    {
        return [
            'bike_path_name.required'=>'自行車道名稱 *必填',
            'bike_path_name.string'=>'自行車道名稱 *必須是字串',
            'bike_path_name.min'=>'自行車道名稱 *最小字數2個',
            'bike_path_name.max'=>'自行車道名稱 *最大字數30個',
            'district.required'=>'行政區 *必填',
            'district.min'=>'行政區 *最小字數2個',
            'district.max'=>'行政區 *最大字數30個',
            'length.required'=>'自行車道長度（公里）*必填',
            'length.numeric'=>'自行車道長度（公里）*必須是數字',
            'length.regex'=>'自行車道長度（公里）*小數點最多一位',
            'nearby_attractions.required'=>'周邊景點 *必填',
            'nearby_attractions.min'=>'周邊景點 *最小字數2個',
            'nearby_attractions.max'=>'周邊景點 *最大字數30個'
        ];
    }
}
