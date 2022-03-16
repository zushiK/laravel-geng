<?php

namespace App\Models;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliv extends BaseModel
{
    // use HasFactory;
    //テーブル名指定
    protected $table = 'dtb_deliv';

    //プライマリキーのカラム名がid以外なので設定
    protected $primaryKey = 'deliv_id';

    //既存のテーブルはカラムが多いので基本的には$fillableではなく$gaurdedで指定する
    protected $guarded = [
        'deliv_id',
    ];

    public function fees()
    {
        return $this->hasMany('App\Models\DelivFee', 'deliv_id')->orderBy("fee_id");
    }

    public function times()
    {
        return $this->hasMany('App\Models\DelivTime', 'deliv_id')->orderBy("time_id");
    }
}
