<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Operator\TradeLawRequest;
use App\Models\Baseinfo;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Auth;
use Carbon\Carbon;

//特定商取引法 の修正用のController
class TradeLawController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit():View
    {
        $trade_law = BaseInfo::find(config('database.info_column_id'));
        return view('operator.trade-law.edit', compact('trade_law'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TradeLawRequest $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(TradeLawRequest $request):RedirectResponse
    {
        BaseInfo::find(config('database.info_column_id'))->update(
            [
                'law_company' => $request->law_company,
                'law_manager' => $request->law_manager,
                // 'law_zip01' => $request->law_zip01,
                // 'law_zip02' => $request->law_zip02,
                // 'law_pref' => $request->law_pref,
                // 'law_addr01' => $request->law_addr01,
                // 'law_addr02' => $request->law_addr02,
                'law_tel01' => $request->law_tel01,
                'law_tel02' => $request->law_tel02,
                'law_tel03' => $request->law_tel03,
                'law_email' => $request->law_email,
                'law_url' => $request->law_url,
                'law_term01' => $request->law_term01,
                'law_term02' => $request->law_term02,
                'law_term03' => $request->law_term03,
                'law_term04' => $request->law_term04,
                'law_term05' => $request->law_term05,
                'law_term06' => $request->law_term06,
            ]
        );
        return redirect()->route('operator.tradelaw.edit')->with('message', '特定商取引法を編集しました。');
    }
}
