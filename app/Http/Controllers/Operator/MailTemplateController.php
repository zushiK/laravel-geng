<?php

namespace App\Http\Controllers\Operator;

use App\Enums\MailTemplateName;

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
    private $mailtemplate_service;

    public function __construct(MailTemplateService $mailtemplate_service)
    {
        $this->mailtemplate_service = $mailtemplate_service;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function index():View
    {
        $mailtemplate_list = MailTemplate::all();
        $mailtemplate_name = MailTemplateName::cases();
        return view('operator.mailtemplate.index', compact('mailtemplate_list', 'mailtemplate_name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit(int $id):View
    {
        $mailtemplate = $this->mailtemplate_service->findById($id);
        $mailtemplate_name = MailTemplateName::cases();
        return view('operator.mailtemplate.edit', compact('mailtemplate', 'mailtemplate_name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ZeiritsuRequest $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(MailTemplateRequest $request, int $id):RedirectResponse
    {
        $data = [
            'template_id' => $request->template_id,
            'subject' => $request->subject,
            'header' => $request->header,
            'footer' => $request->footer,
        ];
        $this->mailtemplate_service->update($id, $data);
        return redirect()->route('operator.mailtemplate')->with('message', 'メール設定を編集しました。');
    }
}
