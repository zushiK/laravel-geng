<?php
namespace App\Repositories;

use App\Models\Deliv;
use App\Models\DelivFee;
use App\Models\DelivTime;
use Illuminate\Database\Eloquent\Collection;

class DelivRepository
{
    private $deliv;

    private $deliv_fee;

    public function __construct(Deliv $deliv, DelivFee $deliv_fee, DelivTime $deliv_time)
    {
        $this->deliv = $deliv;
        $this->deliv_fee = $deliv_fee;
        $this->deliv_time = $deliv_time;
    }

    public function find():Deliv
    {
        $deliv_id = config("const.master_deliv_id");
        return $this->deliv->find($deliv_id);
    }

    public function update(array $data):void
    {
        $deliv_id = config("const.master_deliv_id");
        if (isset($data["fees"]) and is_array($data["fees"])) {
            $fees = $data["fees"];
            if (is_array($fees)) {
                foreach ($fees as $fee_id => $fee) {
                    $fee_obj = [
                        "fee" => $fee,
                    ];
                    $deliv_fee = $this->deliv_fee->where("deliv_id", $deliv_id)->where("fee_id", $fee_id)->first();
                    $deliv_fee->update($fee_obj);
                }
            }
            unset($data["fees"]);
        }

        if (isset($data["times"]) and is_array($data["times"])) {
            $times = $data["times"];
            if (is_array($times)) {
                foreach ($times as $time_id => $time) {
                    $time_obj = [
                        "deliv_time" => $time,
                    ];
                    $deliv_time = $this->deliv_time->where("deliv_id", $deliv_id)->where("time_id", $time_id)->first();
                    $deliv_time->update($time_obj);
                }
            }
            unset($data["time"]);
        }


        $deliv = $this->find();
        $deliv->update($data);
    }
}
