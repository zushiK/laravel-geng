<?php

namespace App\Http\Requests\Operator;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'charge' => 'required|integer|min:0',
            'rule_max' => 'nullable|integer|min:0',
            'upper_rule' => 'nullable|integer|min:0',

        ];
    }

    public function attributes()
    {
        return [
            'charge' => '手数料',
            'rule_max' => '利用条件(円)',
            'upper_rule' => '利用条件(円)',
        ];
    }
}
