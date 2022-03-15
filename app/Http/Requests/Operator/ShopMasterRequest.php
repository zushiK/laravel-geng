<?php

namespace App\Http\Requests\Operator;

use App\Enums\Prefecture;
use Illuminate\Foundation\Http\FormRequest;
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
            'company_name' => 'required|string|max:50',
            'company_kana' => 'required|string|max:50',
            'shop_name' => 'required|string|max:50',
            'shop_kana' => 'required|string|max:50',
            'shop_name_eng' => 'required|string|max:50',
            'zip01' => 'required|digits:3',
            'zip02' => 'required|digits:4',
            'pref' => ['required', new Enum(Prefecture::class)],
            'addr01' => 'required|string|max:200',
            'addr02' => 'required|string|max:200',
            'tel01' => 'required|digits:4',
            'tel02' => 'required|digits:3',
            'tel03' => 'required|digits:3',
            'fax01' => 'required|digits:4',
            'fax02' => 'required|digits:3',
            'fax03' => 'required|digits:3',
            'business_hour' => 'required|string|max:50',
            'email01' => 'required|string|email',
            'email02' => 'required|string|email',
            'email03' => 'required|string|email',
            'email04' => 'required|string|email',
        ];
    }

    public function attributes()
    {
        return [
            'company_name' => '会社名',
            'company_kana' => '会社名(フリガナ)',
            'shop_name' => '店名',
            'shop_kana' => '店名(フリガナ)',
            'shop_name_eng' => '店名(英語表記)',
            'zip01' => '郵便番号',
            'zip02' => '郵便番号',
            'pref' => '都道府県',
            'addr01' => '市区町村名',
            'addr02' => '番地・ビル名',
            'tel01' => 'TEL',
            'tel02' => 'TEL',
            'tel03' => 'TEL',
            'fax01' => 'FAX',
            'fax02' => 'FAX',
            'fax03' => 'FAX',
            'business_hour' => '営業時間',
            'email01' => '商品注文受付メールアドレス',
            'email02' => '問い合わせ受付メールアドレス',
            'email03' => 'メール送信元メールアドレス',
            'email04' => '送信エラー受付メールアドレス',
        ];
    }
}
