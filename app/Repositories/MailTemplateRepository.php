<?php
namespace App\Repositories;

use App\Models\MailTemplate;
use Illuminate\Database\Eloquent\Collection;

class MailTemplateRepository
{
    /**
     * @var MailTemplate
     */
    private $mailtemplate;

    public function __construct(MailTemplate $mailtemplate)
    {
        $this->mailtemplate = $mailtemplate;
    }

    public function findById(int $id):MailTemplate
    {
        return $this->mailtemplate->find($id);
    }

    public function getAll():Collection
    {
        return $this->mailtemplate->get();
    }

    public function update(int $id, array $data):void
    {
        $mailtemplate = $this->findById($id);
        $mailtemplate->update($data);
    }
}
