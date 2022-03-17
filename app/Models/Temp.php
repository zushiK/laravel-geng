<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Temp extends Model
{
    /**
     * Table Name
     * デフォルトはクラス名の複数形 スネークケース
     */
    // protected $table = 'temps';

    protected $fillable = [
        "name",
    ];
}
