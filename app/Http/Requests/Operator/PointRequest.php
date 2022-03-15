<?php

namespace App\Http\Requests\Operator;

use Illuminate\Foundation\Http\FormRequest;

class PointRequest extends FormRequest
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
            'point_rate' => 'required|integer|min:0',
            'welcome_point' => 'required|integer|min:0',

        ];
    }

    public function attributes()
    {
        return [
            'point_rate' => 'ポイント付与率（初期値）',
            'welcome_point' => '会員登録時付与ポイント',

        ];
    }
}
