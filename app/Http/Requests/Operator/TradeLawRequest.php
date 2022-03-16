<?php

namespace App\Http\Requests\Operator;

use App\Enums\Prefecture;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class TradeLawRequest extends FormRequest
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
            'law_company' => 'required|string|max:50',
            'law_manager' => 'required|string|max:50',
            'law_zip01' => 'required|digits:3',
            'law_zip02' => 'required|digits:4',
            'law_pref' => ['required', new Enum(Prefecture::class)],
            'law_addr01' => 'required|string|max:200',
            'law_addr02' => 'required|string|max:200',
            'law_tel01' => 'required',
            'law_tel02' => 'required',
            'law_tel03' => 'required',
            'law_email' => 'required|email',
            'law_url' => 'required|string|max:50',
            'law_term01' => 'required|string|max:1000',
            'law_term02' => 'required|string|max:1000',
            'law_term03' => 'required|string|max:1000',
            'law_term04' => 'required|string|max:1000',
            'law_term05' => 'required|string|max:1000',
            'law_term06' => 'required|string|max:1000',
        ];
    }

    public function attributes()
    {
        return [
            'law_company' => '販売業者',
            'law_manager' => '運営責任者',
            'law_zip01' => '郵便番号',
            'law_zip02' => '郵便番号',
            'law_pref' => '都道府県',
            'law_addr01' => '市区町村名',
            'law_addr02' => '番地・ビル名',
            'law_tel01' => 'TEL',
            'law_tel02' => 'TEL',
            'law_tel03' => 'TEL',
            'law_email' => 'メールアドレス',
            'law_url' => 'URL',
            'law_term01' => '商品代金以外の必要料金',
            'law_term02' => '注文方法',
            'law_term03' => '支払方法',
            'law_term04' => '支払期限',
            'law_term05' => '引き渡し時期',
            'law_term06' => '返品・交換について',
        ];
    }
}
