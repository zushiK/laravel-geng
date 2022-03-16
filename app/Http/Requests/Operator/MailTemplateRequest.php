<?php

namespace App\Http\Requests\Operator;

use Illuminate\Foundation\Http\FormRequest;

class MailTemplateRequest extends FormRequest
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
            'subject' => 'required|string|max:255',
            'header' => 'nullable|string|max:3000',
            'footer' => 'nullable|string|max:3000',
        ];
    }

    public function attributes()
    {
        return [
            'subject' => 'メールタイトル',
            'header' => 'ヘッダー',
            'footer' => 'フッター',
        ];
    }
}
