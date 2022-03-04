<?php

namespace App\Models;

use App\Models\Base\BaseAuthModel;

class Customer extends BaseAuthModel
{
    //テーブル名指定
    protected $table = 'dtb_customer';
  
    //プライマリキーのカラム名がid以外なので設定
    protected $primaryKey = 'customer_id';
    
    //既存のテーブルはカラムが多いので基本的には$fillableではなく$gaurdedで指定する
    protected $guarded = ['customer_id'];
    
    protected $hidden = ['password','new_password'];
    
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
