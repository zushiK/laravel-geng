<?php

namespace App\Http\Controllers\Operator;

use App\Enums\OperatorIsActive;
use App\Http\Controllers\Controller;
use App\Http\Requests\Operator\OperatorRequest;
use App\Models\Operator;
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
        $operator_is_active_enum = OperatorIsActive::cases();

        return view('operator.operator.create', compact('operator_is_active_enum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param OperatorRequest $request
     * @return RedirectResponse
     */
    public function store(OperatorRequest $request):RedirectResponse
    {
        $data = [
            'name' => $request->name,
            'login_id' => $request->login_id,
            'password' => $request->password,
            'fld_code_list' => $request->fld_code_list,
            'is_active' => $request->is_active,
        ];
        $this->operator_service->create($data);
        return redirect()->route('operator.operator')->with('message', '資格を追加しました');
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
        $operator = $this->operator_service->findById($id);
        $operator_is_active_enum = OperatorIsActive::cases();
        return view('operator.operator.edit', compact('operator', 'operator_is_active_enum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  OperatorRequest $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(OperatorRequest $request, int $id):RedirectResponse
    {
        $data = [
            'name' => $request->name,
            'login_id' => $request->login_id,
            'password' => $request->password,
            'fld_code_list' => $request->fld_code_list,
            'is_active' => $request->is_active,
        ];

        $this->operator_service->update($id, $data);
        return redirect()->route('operator.operator')->with('message', 'オペレータを編集しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function delete(int $id):RedirectResponse
    {
        $this->operator_service->delete($id);
        return redirect()->route('operator.operator')->with('message', 'オペレータを削除しました。');
    }
}
