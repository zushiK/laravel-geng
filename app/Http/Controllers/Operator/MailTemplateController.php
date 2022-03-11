<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Operator\MailTemplateRequest;
use App\Models\MailTemplate;
use App\Services\MailTemplateService;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Auth;
use Carbon\Carbon;

class MailTemplateController extends Controller
{
    /**
     * @var MailTemplateService
     */
    // private $mailtemplate_service;

    // public function __construct(MailTemplateService $mailtemplate_service)
    // {
    //     $this->mailtemplate_service = $mailtemplate_service;
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function index():View
    {
        dump("メール設定");
        die;
    }

    public function create():View
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ZeiritsuRequest $request
     * @return RedirectResponse
     */
    public function store(ZeiritsuRequest $request):RedirectResponse
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(int $id):View
    {
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy(int $id):RedirectResponse
    {
    }
}
