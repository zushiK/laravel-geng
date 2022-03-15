<?php

namespace App\Models;

use App\Models\Base\BaseModel;

class Product extends BaseModel
{
    //テーブル名指定
    protected $table = 'dtb_products';

    //プライマリキーのカラム名がid以外なので設定
    protected $primaryKey = 'product_id';

    //既存のテーブルはカラムが多いので基本的には$fillableではなく$gaurdedで指定する
    protected $guarded = ['product_id'];

    protected $casts = [
        // 'struct' => ShikakuStruct::class,
    ];

    //自動的にCarbonインスタンスへキャスト
    protected $date = [
        'create_date',
        'update_date'
    ];
}
