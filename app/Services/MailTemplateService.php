<?php
namespace App\Services;

use App\Repositories\MailTemplateRepository;
use App\Models\MailTemplate;
use Illuminate\Database\Eloquent\Collection;

class MailTemplateService
{
    /**
     * @var MailTemplateRepository
     */
    private $mailtemplate_repository;

    public function __construct(MailTemplateRepository $mailtemplate_repository)
    {
        $this->mailtemplate_repository = $mailtemplate_repository;
    }

    /**
     * idから一つ取得
     *
     * @param integer $id
     * @return MailTemplate
     */
    public function findById(int $id):MailTemplate
    {
        $mailtemplate = $this->mailtemplate_repository->findById($id);
        return $mailtemplate;
    }

    /**
     * 全件取得
     *
     * @return MailTemplate
     */
    public function getAll():Collection
    {
        return $this->mailtemplate_repository->getAll();
    }

    /**
     * 更新
     *
     * @param integer $id
     * @param array $data
     * @return void
     */
    public function update(int $id, array $data):void
    {
        $this->mailtemplate_repository->update($id, $data);
    }
}
