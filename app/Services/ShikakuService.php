<?php
namespace App\Services;

use App\Repositories\ShikakuRepository;
use App\Models\Shikaku;
use Illuminate\Database\Eloquent\Collection;

class ShikakuService
{
    /**
     * @var ShikakuRepository
     */
    private $shikaku_repository;

    public function __construct(ShikakuRepository $shikaku_repository)
    {
        $this->shikaku_repository = $shikaku_repository;
    }

    /**
     * idから一つ取得
     *
     * @param integer $id
     * @return Shikaku
     */
    public function findById(int $id):Shikaku
    {
        $shikaku = $this->shikaku_repository->findById($id);
        return $shikaku;
    }

    /**
     * 全件取得
     *
     * @return Shikaku
     */
    public function getAll():Collection
    {
        return $this->shikaku_repository->getAll();
    }

    /**
     * 新規作成
     *
     * @param array $data
     * @return void
     */
    public function create(array $data):void
    {
        $this->shikaku_repository->create($data);
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
        $this->shikaku_repository->update($id, $data);
    }

    /**
     * 削除
     *
     * @param integer $id
     * @return void
     */
    public function delete(int $id):void
    {
        $this->shikaku_repository->delete($id);
    }
}
