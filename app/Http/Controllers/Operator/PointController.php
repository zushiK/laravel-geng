<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Operator\PointRequest;
use App\Models\BaseInfo;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Auth;
use Carbon\Carbon;

//特定商取引法 の修正用のController
class PointController extends Controller
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
        $point = BaseInfo::find(config('database.info_column_id'));
        return view('operator.point.edit', compact('point'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PointRequest $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(PointRequest $request):RedirectResponse
    {
        BaseInfo::find(config('database.info_column_id'))->update(
            [
                'point_rate' => $request->point_rate,
                'welcome_point' => $request->welcome_point,
            ]
        );
        return redirect()->route('operator.point')->with('message', 'ポイント設定を編集しました。');
    }
}
