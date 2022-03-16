<?php

namespace App\Models;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DelivTime extends BaseModel
{
    // use HasFactory;
    //テーブル名指定
    protected $table = 'dtb_delivtime';

    //プライマリキーのカラム名がid以外なので設定
    // protected $primaryKey = ['deliv_id', 'time_id'];

    //既存のテーブルはカラムが多いので基本的には$fillableではなく$gaurdedで指定する
    protected $guarded = [
        'deliv_id',
        'time_id'
    ];

    protected $casts = [
        // 'template_id' => MailTemplateName::class,
    ];
}
