<?php

namespace App\Models;

use App\Models\BaseModel;

class Operator extends BaseModel
{
  //テーブル名指定
  protected $table = 'dtb_operators';

  // 
  protected $primaryKey = 'operator_id';

  //既存のテーブルはカラムが多いので基本的には$fillableではなく$gaurdedで指定する
  protected $guarded = ['operator_id'];

  protected $hidden = ['password'];

  protected $casts = [
    'is_active' => 'boolean',
    'fld_code_list' => 'array'
  ];
}