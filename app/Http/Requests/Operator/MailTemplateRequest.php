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
            'template_id' => 'required',
            'subject' => 'required|string|max:255',
            // 'header' => 'required|string|max:255',
            // 'footer' => 'required|string|max:1000',
        ];
    }

    public function attributes()
    {
        return [
            'template_id' => 'テンプレート ',
            'subject' => 'メールタイトル',
        ];
    }
}
