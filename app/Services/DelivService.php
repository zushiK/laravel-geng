<?php
namespace App\Services;

use App\Models\Deliv;
use App\Repositories\DelivRepository;
use Illuminate\Database\Eloquent\Collection;

class DelivService
{
    /**
     * @var DelivRepository
     */
    private $deliv_repository;

    public function __construct(DelivRepository $deliv_repository)
    {
        $this->deliv_repository = $deliv_repository;
    }

    /**
     * 取得
     *
     * @param integer $id
     * @return Deliv
     */
    public function find():Deliv
    {
        $deliv = $this->deliv_repository->find();
        return $deliv;
    }

    /**
     * 更新
     *
     * @param array $data
     * @return void
     */
    public function update(array $data):void
    {
        $this->deliv_repository->update($data);
    }

    /**
     * オブジェクトをフォーム用のインプットに変換する。
     */
    public function parseArray(Deliv $deliv):array
    {
        $inputs = $deliv->toArray();
        $inputs["fees"] = [];
        $inputs["times"] = [];
        $fees = $deliv->fees;
        // dd($fees);
        foreach ($fees as $fee) {
            $inputs["fees"][ $fee->fee_id ] = $fee->fee;
        }
        $times = $deliv->times;
        foreach ($times as $time) {
            $inputs["times"][ $time->time_id ] = $time->deliv_time;
        }
        return $inputs;
    }
}
