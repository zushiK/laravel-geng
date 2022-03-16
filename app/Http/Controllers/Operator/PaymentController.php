<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Operator\PaymentRequest;
use App\Models\Payment;
use App\Services\PaymentService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PaymentController extends Controller
{
    /**
     * @var PaymentService
     */
    private $payment_service;

    public function __construct(PaymentService $payment_service)
    {
        $this->payment_service = $payment_service;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function index():View
    {
        $payment_list = Payment::all();
        return view('operator.payment.index', compact('payment_list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(int $id):View
    {
        $payment = $this->payment_service->findById($id);
        return view('operator.payment.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PaymentRequest $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(PaymentRequest $request, int $id):RedirectResponse
    {
        $data = [
            'charge' => $request->charge,
            'rule_max' => $request->rule_max,
            'upper_rule' => $request->upper_rule,
        ];
        $this->payment_service->update($id, $data);
        return redirect()->route('operator.payment')->with('message', '支払方法を編集しました。');
    }
}
