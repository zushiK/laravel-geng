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
                'company_name' => $request->company_name,
                'company_kana' => $request->company_kana,
                'zip01' => $request->zip01,
                'zip02' => $request->zip02,
                'zipcode' => $request->zipcode,
                'country_id' => $request->country_id,
                'pref' => $request->pref,
                'addr01' => $request->addr01,
                'addr02' => $request->addr02,
                'tel01' => $request->tel01,
                'tel02' => $request->tel02,
                'tel03' => $request->tel03,
                'business_hour' => $request->business_hour,
                'email01' => $request->email01,
                'email02' => $request->email02,
                'email03' => $request->email03,
                'email04' => $request->email04,
                'shop_name' => $request->shop_name,
                'shop_kana' => $request->shop_kana,
                'shop_name_eng' => $request->shop_name_eng,
            ],
        );
        return redirect()->route('operator.shop-master')->with('message', 'SHOPマスタを編集しました。');
    }
}
