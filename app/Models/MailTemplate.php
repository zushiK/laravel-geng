<?php

namespace App\Models;

use App\Models\Base\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\MailTemplateName;

class MailTemplate extends BaseModel
{
    // use HasFactory;
    //テーブル名指定
    protected $table = 'dtb_mailtemplate';

    //プライマリキーのカラム名がid以外なので設定
    protected $primaryKey = 'template_id';

    //既存のテーブルはカラムが多いので基本的には$fillableではなく$gaurdedで指定する
    protected $guarded = [
        'template_id'
    ];

    protected $casts = [
        'template_id' => MailTemplateName::class,
    ];

    //自動的にCarbonインスタンスへキャスト
    protected $date = [
        'create_date',
        'update_date'
    ];
}
