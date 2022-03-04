<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;
use App\Traits\SoftDeleteFlagTrait;

class BaseModel extends Model
{
    use SoftDeleteFlagTrait;

    const CREATED_AT = 'create_date';
    
    const UPDATED_AT = 'update_date';
    
    const DELETED_AT = 'del_flg';

    public function getIdAttribute()
    {
        return $this[$this->primaryKey];
    }
}
}
