<?php

namespace App\Http\Controllers\Operator;

use App\Enums\ShikakuStruct;
use App\Http\Controllers\Controller;
use App\Http\Requests\Operator\ShikakuRequest;
use App\Models\Shikaku;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Services\OperatorService;

class OperatorController extends Controller
{
    /**
     * @var OperatorService
     */
    private $operator_service;

    public function __construct(OperatorService $operator_service)
    {
        $this->operator_service = $operator_service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index():View
    {
        $operator_list = $this->operator_service->getAll();
        return view('operator.operator.index', compact('operator_list'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create():View
    {
        $shikaku_struct_list = ShikakuStruct::cases();
        return view('operator.operator.create', compact('shikaku_struct_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ShikakuRequest $request
     * @return RedirectResponse
     */
    public function store(ShikakuRequest $request):RedirectResponse
    {
        $data = [
            'name' => $request->name,
            'name_short' => $request->name_short,
            'rate' => $request->rate,
            'code' => $request->code,
            'struct' => $request->struct,
        ];
        $this->operator_service->create($data);
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
    //     return view('operator.operator.show');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(int $id):View
    {
        $shikaku = $this->operator_service->findById($id);
        $shikaku_struct_list = ShikakuStruct::cases();
        return view('operator.operator.edit', compact('shikaku', 'shikaku_struct_list'));
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
        $data = [
            'name' => $request->name,
            'name_short' => $request->name_short,
            'rate' => $request->rate,
            'code' => $request->code,
            'struct' => $request->struct,
        ];

        $this->operator_service->update($id, $data);
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
