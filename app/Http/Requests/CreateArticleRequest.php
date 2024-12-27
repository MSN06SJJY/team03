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
        return false;
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
            'length'=>'required|decimal(5, 1)',
            'nearby_attractions'=>'required|min"2|max:30'
        ];
    }

    public function messages()
    {
        return [
            'bike_path_name'=>'自行車道名稱 *必填',
            'district'=>'行政區 *必填',
            'length'=>'自行車道長度（公里）*必填',
            'nearby_attractions'=>'周邊景點 *必填'
        ];
    }
}
