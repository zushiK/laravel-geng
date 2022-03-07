<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShikakuRequest;
use App\Models\Shikaku;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

/**
 * 詳細がないパターン例
 */
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
     * @return RedirectResponse
     */
    public function create(ShikakuRequest $request)
    {
        // Shikaku::create([
        //     'name' => $request->name,
        //     'name_short' => $request->name_short,
        //     'rate' => $request->rate,
        //     'code' => $request->code,
        //     'struct' => $request->struct,
        // ]);
        // return redirect()->route('operator.shikaku');
    }

    /**
     * Store a newly created resource in storage.
     *
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
        return redirect()->route('operator.shikaku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        return view('operator.shikaku.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        return view('operator.shikaku.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return @return \Illuminate\Contracts\View\View
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return @return \Illuminate\Contracts\View\View
     */
    public function destroy($id)
    {
    }
}
