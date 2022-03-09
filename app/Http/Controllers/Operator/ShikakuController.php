<?php

namespace App\Http\Controllers\Operator;

use App\Enums\ShikakuStruct;
use App\Http\Controllers\Controller;
use App\Http\Requests\Operator\ShikakuRequest;
use App\Models\Shikaku;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ShikakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index():View
    {
        $shikaku_list = Shikaku::all();
        return view('operator.shikaku.index', compact('shikaku_list'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create():View
    {
        $shikaku_struct_list = ShikakuStruct::cases();
        return view('operator.shikaku.create', compact('shikaku_struct_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ShikakuRequest $request
     * @return RedirectResponse
     */
    public function store(ShikakuRequest $request):RedirectResponse
    {
        Shikaku::create([
            'name' => $request->name,
            'name_short' => $request->name_short,
            'rate' => $request->rate,
            'code' => $request->code,
            'struct' => $request->struct,
        ]);
        return redirect()->route('operator.shikaku')->with('message', '資格を追加しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return @return \Illuminate\Contracts\View\View
     */
    // public function show($id)
    // {
    //     return view('operator.shikaku.show');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(int $id):View
    {
        $shikaku = Shikaku::find($id);
        $shikaku_struct_list = ShikakuStruct::cases();
        return view('operator.shikaku.edit', compact('shikaku', 'shikaku_struct_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ShikakuRequest $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(ShikakuRequest $request, int $id):RedirectResponse
    {
        Shikaku::find($id)->update(
            [
                'name' => $request->name,
                'name_short' => $request->name_short,
                'rate' => $request->rate,
                'code' => $request->code,
                'struct' => $request->struct,
            ]
        );
        return redirect()->route('operator.shikaku')->with('message', '資格を編集しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy(int $id):RedirectResponse
    {
        Shikaku::find($id)->delete();
        return redirect()->route('operator.shikaku')->with('message', '資格を削除しました。');
    }
}
