<?php

namespace App\Http\Requests\Operator;

use Illuminate\Foundation\Http\FormRequest;

class ZeiritsuRequest extends FormRequest
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
            'tax_rate' => 'required|integer|max:255',
            'apply_date' => 'date|nullable',
        ];
    }

    public function attributes()
    {
        return [
            'tax_rate' => '消費税率',
            'apply_date' => '適用日時',
        ];
    }
}
