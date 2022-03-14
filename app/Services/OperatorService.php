<?php
namespace App\Services;

use App\Repositories\OperatorRepository;
use App\Models\Operator;
use Illuminate\Database\Eloquent\Collection;

class OperatorService
{
    /**
     * @var OperatorRepository
     */
    private $operator_repository;

    public function __construct(OperatorRepository $operator_repository)
    {
        $this->operator_repository = $operator_repository;
    }

    /**
     * idから一つ取得
     *
     * @param integer $id
     * @return Operator
     */
    public function findById(int $id):Operator
    {
        $operator = $this->operator_repository->findById($id);
        return $operator;
    }

    /**
     * 全件取得
     *
     * @return Operator
     */
    public function getAll():Collection
    {
        return $this->operator_repository->getAll();
    }

    /**
     * 新規作成
     *
     * @param array $data
     * @return void
     */
    public function create(array $data):void
    {
        $this->operator_repository->create($data);
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
        $this->operator_repository->update($id, $data);
    }

    /**
     * 削除
     *
     * @param integer $id
     * @return void
     */
    public function delete(int $id):void
    {
        $this->operator_repository->delete($id);
    }
}
