<?php

namespace App\Services;

class Service
{
    /**
     * 継承元でrepositoryのDIを行う
     *
     * @var  App\Repositories\Repository
     */
    protected $repository;

    /**
     * idから一つ取得
     *
     * @param integer $id
     * @return Illuminate\Database\Eloquent\Model
     */
    public function find(int $id)
    {
        $zeiritsu = $this->repository->findById($id);
        return $zeiritsu;
    }

    /**
     * 全件取得
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->repository->getAll();
    }

    /**
     * 新規作成
     *
     * @param array $data
     * @return Illuminate\Database\Eloquent\Model
     */
    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    /**
     * 更新
     *
     * @param integer $id
     * @param array $data
     * @return void
     */
    public function update(int $id, array $data)
    {
        $this->repository->update($id, $data);
    }

    /**
     * 削除Ï
     *
     * @param integer $id
     * @param array $data
     * @return void
     */
    public function delete(int $id)
    {
        $this->repository->delete($id);
    }
}
