<?php

namespace App\Http\Controllers\Operator;

use App\Enums\ShikakuStruct;
use App\Http\Controllers\Controller;
use App\Http\Requests\Operator\ShikakuRequest;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Services\ShikakuService;

class ProductMasterController extends Controller
{
    /**
     * @var ShikakuService
     */
    private $shikaku_service;

    public function __construct(ShikakuService $shikaku_service)
    {
        $this->shikaku_service = $shikaku_service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index():View
    {
        // dd(Product::all());
        // $shikaku_list = $this->shikaku_service->getAll();
        $shikaku_list = Product::paginate(10);
        return view('operator.product-master.index', compact('shikaku_list'));
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
        $data = [
            'name' => $request->name,
            'name_short' => $request->name_short,
            'rate' => $request->rate,
            'code' => $request->code,
            'struct' => $request->struct,
        ];
        $this->shikaku_service->create($data);
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
        // $shikaku = $this->shikaku_service->findById($id);
        $shikaku = Product::find($id);
        return view('operator.product-master.edit', compact('shikaku'));
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

        $this->shikaku_service->update($id, $data);
        return redirect()->route('operator.shikaku')->with('message', '資格を編集しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function delete(int $id):RedirectResponse
    {
        $this->shikaku_service->delete($id);
        return redirect()->route('operator.shikaku')->with('message', '資格を削除しました。');
    }
}
