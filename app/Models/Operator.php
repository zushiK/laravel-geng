<?php

namespace App\Models;

use App\Enums\OperatorIsActive;
use App\Models\Base\BaseAuthModel;
use Illuminate\Database\Eloquent\Casts\Attribute;

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
        'is_active' => OperatorIsActive::class,
    ];

    //自動的にCarbonインスタンスへキャスト
    protected $date = [
        'create_date',
        'update_date'
    ];

     /**
     * フィルドコードリスト
     * setter/getter設定
     *
     * @return Attribute
     */
    public function fldCodeList(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value)->selected,
            set: fn ($value) => ['fld_code_list' => json_encode(['selected' => $value])],
        );
    }
}
