<?php

namespace App\Http\Requests\Operator;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\OperatorIsActive;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;

class OperatorRequest extends FormRequest
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
        // dd($this->login_id);
        return [
            'name' => 'required|string|max:255',
            'login_id' => ['required', 'string', 'max:255', Rule::unique('App\Models\Operator')->ignore($this->login_id, 'operator_id')],
            'password' => ['required', 'confirmed', Password::defaults()],
            'is_active' => ['required', new Enum(OperatorIsActive::class)],
        ];
    }

    public function attributes()
    {
        return [
            'name' => '名前',
            'login_id' => 'ログインID',
        ];
    }
}
