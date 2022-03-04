<?php

namespace App\Models;

use App\Models\Base\BaseAuthModel;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Operator extends BaseAuthModel
{
    //テーブル名指定
    protected $table = 'dtb_operators';
  
    //プライマリキーのカラム名がid以外なので設定
    protected $primaryKey = 'operator_id';
    
    //既存のテーブルはカラムが多いので基本的には$fillableではなく$gaurdedで指定する
    protected $guarded = ['operator_id'];
    
    protected $hidden = ['password'];
    
    protected $casts = [
        'is_active' => 'boolean',
        'fld_code_list' => 'array',
    ];

    //自動的にCarbonインスタンスへキャスト
    protected $date = [
        'create_date',
        'update_date'
    ];
}
