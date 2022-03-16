<?php

namespace App\Http\Requests\Operator;

use Illuminate\Foundation\Http\FormRequest;

class DelivRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'service_name' => 'required|string|max:255',
        ];
    }

    public function attributes()
    {
        return [
            'name' => '配送業者名',
            'service_name' => '配送業者名',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (is_array($this->input("fees"))) {
                foreach ($this->input("fees") as $key => $val) {
                    if (is_numeric($val) and $val > 0) {
                    } else {
                        $validator->errors()->add('fees.'.$key, '金額は正しい数字で入力してください。');
                    }
                }
            }
        });
    }
}
