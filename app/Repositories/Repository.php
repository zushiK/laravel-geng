<?php

namespace App\Repositories;

class Repository
{
    /**
     * 継承元でmodelのDIを行う
     *
     * @var Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * 1件取得
     *
     * @param integer $id
     * @return Illuminate\Database\Eloquent\Model
     */
    public function find(int $id)
    {
        return $this->model->find($id);
    }

    /**
     * 全取得
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->model->get();
    }

    /**
     * 新規作成
     *
     * @param array $data
     * @return Illuminate\Database\Eloquent\Model
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * 1件更新
     *
     * @param integer $id
     * @param array $data
     * @return void
     */
    public function update(int $id, array $data)
    {
        $this->model->where("id", $id)->update($data);
    }

    /**
     * 1件削除
     *
     * @param integer $id
     * @return void
     */
    public function delete(int $id)
    {
        $this->model->where("id", $id)->delete();
    }
}
