<?php
namespace App\Services;

use App\Repositories\ZeiritsuRepository;
use App\Models\Zeiritsu;
use Illuminate\Database\Eloquent\Collection;

class ZeiritsuService
{
    /**
     * @var ZeiritsuRepository
     */
    private $zeiritsu_repository;

    public function __construct(ZeiritsuRepository $zeiritsu_repository)
    {
        $this->zeiritsu_repository = $zeiritsu_repository;
    }

    /**
     * idから一つ取得
     *
     * @param integer $id
     * @return Zeiritsu
     */
    public function findById(int $id):Zeiritsu
    {
        $zeiritsu = $this->zeiritsu_repository->findById($id);
        return $zeiritsu;
    }

    /**
     * 全件取得
     *
     * @return Zeiritsu
     */
    public function getAll():Collection
    {
        return $this->zeiritsu_repository->getAll();
    }

    /**
     * 新規作成
     *
     * @param array $data
     * @return void
     */
    public function create(array $data):void
    {
        $this->zeiritsu_repository->create($data);
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
        $this->zeiritsu_repository->update($id, $data);
    }
}
