<?php

namespace App\Http\Requests\Operator;

use Illuminate\Foundation\Http\FormRequest;
use App\Enums\ShikakuStruct;
use Illuminate\Validation\Rules\Enum;

class ShopMasterRequest extends FormRequest
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
            'code' => 'required|max:255',
            'name' => 'required|max:255',
            'name_short' => 'required|max:255',
            'rate' => 'required|integer',
        ];
    }

    public function attributes()
    {
        return [
            'name' => '資格名',
            'name_short' => '資格名（短縮）',
            'rate' => '割合',
            'code' => '資格コード',
            'struct' => '資格階層',
        ];
    }
}
