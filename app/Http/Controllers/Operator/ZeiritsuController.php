<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Operator\ZeiritsuRequest;
use App\Models\Zeiritsu;
use App\Services\ZeiritsuService;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Auth;
use Carbon\Carbon;

class ZeiritsuController extends Controller
{
    /**
     * @var ZeiritsuService
     */
    private $zeiritsu_service;

    public function __construct(ZeiritsuService $zeiritsu_service)
    {
        $this->zeiritsu_service = $zeiritsu_service;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function index():View
    {
        // dump(Auth::user());die;
        $zeiritsu_list = $this->zeiritsu_service->getAll();
        return view('operator.zeiritsu.index', compact('zeiritsu_list'));
    }

    public function create():View
    {
        return view('operator.zeiritsu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ZeiritsuRequest $request
     * @return RedirectResponse
     */
    public function store(ZeiritsuRequest $request):RedirectResponse
    {
        $data = [
            'tax_rate' => $request->tax_rate,
            'apply_date' => $request->apply_date,
        ];
        $this->zeiritsu_service->create($data);
        return redirect()->route('operator.zeiritsu')->with('message', '税率を追加しました');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(int $id):View
    {
        $zeiritsu = $this->zeiritsu_service->findById($id);
        return view('operator.zeiritsu.edit', compact('zeiritsu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ZeiritsuRequest $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(ZeiritsuRequest $request, int $id):RedirectResponse
    {
        $data = [
            'tax_rate' => $request->tax_rate,
            'apply_date' => Carbon::parse($request->apply_date),
        ];
        $this->zeiritsu_service->update($id, $data);
        return redirect()->route('operator.zeiritsu')->with('message', '税率を編集しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy(int $id):RedirectResponse
    {
        Zeiritsu::find($id)->delete();
        return redirect()->route('operator.zeiritsu')->with('message', '税率を削除しました。');
    }
}
