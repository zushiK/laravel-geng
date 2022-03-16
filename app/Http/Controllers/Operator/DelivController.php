<?php

namespace App\Http\Controllers\Operator;

use App\Enums\MailTemplateName;
use App\Http\Controllers\Controller;
use App\Http\Requests\Operator\MailTemplateRequest;
// use App\Models\Deliv;
use App\Services\DelivService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Enums\Prefecture;
use App\Http\Requests\Operator\DelivRequest;

class DelivController extends Controller
{
    /**
     * @var DelivService
     */
    private $deliv_service;

    public function __construct(DelivService $deliv_service)
    {
        $this->deliv_service = $deliv_service;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return View
     */
    public function edit():View
    {
        $deliv = $this->deliv_service->find();
        $inputs = [
            "deliv" => $deliv
        ];

        $prefecture_list = Prefecture::toArray();

        $inputs = [
            "inputs" => $this->deliv_service->parseArray($deliv),
            "prefecture_list" => $prefecture_list,
        ];

        return view('operator.deliv.edit', $inputs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  DelivRequest $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(DelivRequest $request):RedirectResponse
    {
        $data = $request->all();
        $this->deliv_service->update($data);
        return redirect()->route('operator.deliv')->with('message', '配送情報を更新しました。');
    }
}
