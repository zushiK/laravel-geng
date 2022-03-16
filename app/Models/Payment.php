<?php

namespace App\Models;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends BaseModel
{
    // use HasFactory;
    //テーブル名指定
    protected $table = 'dtb_payment';

    //プライマリキーのカラム名がid以外なので設定
    protected $primaryKey = 'payment_id';

    //既存のテーブルはカラムが多いので基本的には$fillableではなく$gaurdedで指定する
    protected $guarded = [
        'payment_id'
    ];

    protected $casts = [

    ];

    //自動的にCarbonインスタンスへキャスト
    protected $date = [
        'create_date',
        'update_date'
    ];
}
