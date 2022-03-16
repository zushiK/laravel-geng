<?php

namespace App\Models;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DelivFee extends BaseModel
{
    // use HasFactory;
    //テーブル名指定
    protected $table = 'dtb_delivfee';

    //プライマリキーのカラム名がid以外なので設定
    // protected $primaryKey = ['deliv_id', 'fee_id'];

    //既存のテーブルはカラムが多いので基本的には$fillableではなく$gaurdedで指定する
    protected $guarded = [
        'deliv_id',
        'fee_id'
    ];

    protected $casts = [
        // 'template_id' => MailTemplateName::class,
    ];
}
