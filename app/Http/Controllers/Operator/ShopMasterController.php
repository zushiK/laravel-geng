<?php

namespace App\Http\Controllers\Operator;

use App\Enums\Prefecture;
use App\Http\Controllers\Controller;
use App\Http\Requests\Operator\ShopMasterRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Baseinfo;

class ShopMasterController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit():View
    {
        $prefecture_list = Prefecture::cases();
        $baseinfo = BaseInfo::find(config('database.info_column_id'));
        return view('operator.shop-master.edit', compact('baseinfo', 'prefecture_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ShopMasterRequest $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(ShopMasterRequest $request):RedirectResponse
    {
        BaseInfo::find(config('database.info_column_id'))->update(
            [
                'company_name' => 'company_name',
                'company_kana' => 'company_kana',
                'zip01' => 'zip01',
                'zip02' => 'zip02',
                'zipcode' => 'zipcode',
                'country_id' => 'country_id',
                'pref' => 'pref',
                'addr01' => 'addr01',
                'addr02' => 'addr02',
                'tel01' => 'tel01',
                'tel02' => 'tel02',
                'tel03' => 'tel03',
                // 'fax01' => 'fax01',
                // 'fax02' => 'fax02',
                // 'fax03' => 'fax03',
                'business_hour' => 'business_hour',
                'law_company' => 'law_company',
                'law_manager' => 'law_manager',
                'law_zip01' => 'law_zip01',
                'law_zip02' => 'law_zip02',
                'law_zipcode' => 'law_zipcode',
                'law_country_id' => 'law_country_id',
                'law_pref' => 'law_pref',
                'law_addr01' => 'law_addr01',
                'law_addr02' => 'law_addr02',
                'law_tel01' => 'law_tel01',
                'law_tel02' => 'law_tel02',
                'law_tel03' => 'law_tel03',
                'law_fax01' => 'law_fax01',
                'law_fax02' => 'law_fax02',
                'law_fax03' => 'law_fax03',
                'law_email' => 'law_email',
                'law_url' => 'law_url',
                'law_term01' => 'law_term01',
                'law_term02' => 'law_term02',
                'law_term03' => 'law_term03',
                'law_term04' => 'law_term04',
                'law_term05' => 'law_term05',
                // 'law_term06' => 'law_term06',
                // 'law_term07' => 'law_term07',
                // 'law_term08' => 'law_term08',
                // 'law_term09' => 'law_term09',
                // 'law_term10' => 'law_term10',
                'email01' => 'email01',
                'email02' => 'email02',
                'email03' => 'email03',
                'email04' => 'email04',
                'free_rule' => 'free_rule',
                'free_rule2' => 'free_rule2',
                'shop_name' => 'shop_name',
                'shop_kana' => 'shop_kana',
                'shop_name_eng' => 'shop_name_eng',
                'point_rate' => 'point_rate',
                'welcome_point' => 'welcome_point',
                'update_date' => 'update_date',
                // 'top_tpl' => 'top_tpl',
                // 'product_tpl' => 'product_tpl',
                // 'detail_tpl' => 'detail_tpl',
                // 'mypage_tpl' => 'mypage_tpl',
                // 'good_traded' => 'good_traded',
                'message' => 'message',
                // 'regular_holiday_ids' => 'regular_holiday_ids',
                // 'latitude' => 'latitude',
                // 'longitude' => 'longitude',
                // 'downloadable_days' => 'downloadable_days',
                // 'downloadable_days_unlimited' => 'downloadable_days_unlimited',
            ],
        );
        return redirect()->route('operator.shikaku')->with('message', 'SHOPマスタを編集しました。');
    }
}
