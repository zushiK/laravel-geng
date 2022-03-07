<?php

namespace App\Models;

use App\Models\Base\BaseModel;

class Shikaku extends BaseModel
{
    //テーブル名指定
    protected $table = 'nbc_shikaku';
  
    //プライマリキーのカラム名がid以外なので設定
    protected $primaryKey = 'id';
        
    //既存のテーブルはカラムが多いので基本的には$fillableではなく$gaurdedで指定する
    protected $guarded = ['id'];
        
    protected $casts = [
    ];
    
    //自動的にCarbonインスタンスへキャスト
    protected $date = [
        'create_date',
        'update_date'
    ];
}
