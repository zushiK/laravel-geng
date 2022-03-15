<?php

namespace App\Models;

use App\Models\Base\BaseModel;

class BaseInfo extends BaseModel
{
    //テーブル名指定
    protected $table = 'dtb_baseinfo';

    //プライマリキーのカラム名がid以外なので設定
    protected $primaryKey = 'id';

    //既存のテーブルはカラムが多いので基本的には$fillableではなく$gaurdedで指定する
    protected $guarded = ['id'];

    //自動的にCarbonインスタンスへキャスト
    protected $date = [
        'update_date'
    ];
}
